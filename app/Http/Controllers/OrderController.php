<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderResi;
use App\OrderDetail;
use App\UniqueCode;
use App\Helpers\{curlAPI};
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use Carbon\Carbon;
use DataTables;
use DB;

class OrderController extends Controller
{
    
    public function index()
    {
        return view('order.index');
    }

    public function show($id)
    {
        try {
            //Detail Order
            $order = Order::join('t_user', 't_order.id_user', '=', 't_user.id_user')
                ->leftJoin('t_voucher', 't_order.id_voucher', '=', 't_voucher.id_voucher')
                ->leftJoin('t_bank', 't_order.id_bank', '=', 't_bank.id_bank')
                ->select(
                            't_order.id_order','t_order.status','t_order.code_uniq','t_order.total_bayar','t_order.total_harga','t_order.total_barang','t_order.no_pesanan','t_order.alamat_penerima',
                            't_order.nama_penerima','t_order.created_at','t_order.payment_method','t_order.payment_status','t_order.pop',
                            't_user.name','t_user.email','t_user.telephone','t_user.alamat',
                            't_voucher.amount as diskon','t_bank.bank'
                        )
                ->where('t_order.id_order',$id)
                ->firstOrFail();

            if($order->payment_method == null)
            {
                return response(view('errors.400'), 400);
            }

            //Detail Product
            $group_detail = array();  
            $orderdetail = OrderDetail::Join('t_order_resi','t_order_detail.id_order_resi', '=', 't_order_resi.id_order_resi')
            ->Join('products','t_order_detail.id_product', '=', 'products.id')
            ->select('t_order_detail.*',
                't_order_resi.ongkir_estimate as ongkir_estimate','t_order_resi.is_isurance','t_order_resi.isurance','t_order_resi.jasa_name',
                'products.vendorid','products.price','products.title','products.feature_image')
            ->where('t_order_detail.id_order',$id)
            ->groupBy('t_order_detail.id_product')
            ->get();

            foreach($orderdetail as $det){
                if(empty($group_detail[$det->vendorid])){
                    $group_detail[$det->vendorid][]=$det;
                }else{
                    if(empty($group_detail[$det->vendorid])){
                        $group_detail[$det->vendorid][] = $det;
                    }
                    else{
                        array_push($group_detail[$det->vendorid], $det);    
                    }
                }
            }

        return view('order.show',compact('group_detail','order'));

        } catch (\Exception $e) {
            return response(view('errors.400'), 400);
        }
    }
    
    public function destroy($id)
    {
        //
    }

    public function orderDatatables(Request $request)
    {
        $orders = Order::join('t_user', 't_order.id_user', '=', 't_user.id_user')
                    ->select([
                            't_order.id_order','t_order.status','t_order.created_at','t_order.id_order','t_order.no_pesanan','t_order.payment_method','t_order.total_bayar',
                            't_user.name'
                            ])
                    ->wherenotnull('t_order.payment_method');

        if($request->from_date != '' && $request->to_date != '')
        {
            $orders->whereBetween('t_order.created_at', [date('Y-m-d',strtotime($request->input("from_date"))), date('Y-m-d',strtotime($request->input("to_date")." +1 day"))
            ]);
        } 

        if($request->status != '')
        {
            $orders->where('t_order.status',$request->input("status"));
        }
        
        return Datatables::of($orders)
            ->addColumn('action', function ($orders) {
                $show = route('orders.show',$orders->id_order);
                return "<a href='{$show}' title='Detail'><i class='fa fa-eye text-warning'></i></a>";
            })
            ->editColumn('id_order', function ($orders) {
                $show = route('orders.show',$orders->id_order);
                return "<a href='{$show}' style='color:#000' title='ID order $orders->id_order'>".$orders->id_order."</a>";
            })
            ->editColumn('name', function ($orders) {
                $show = route('orders.show',$orders->id_order);
                return "<a href='{$show}' title='$orders->name'><text class='text-dark weight-600'>".$orders->name."</text></a>";
            })
            ->editColumn('total_bayar', function ($orders) {
                return number_format($orders->total_bayar, 0,',',',');
            })
            ->editColumn('status', function ($orders) {
                $show = route('orders.show',$orders->id_order);
                if($orders->status == 'created'){
                    $status = 'text-purple';
                    $title  = 'Created Order';
                    $order  = 'Created';
                }else if($orders->status == 'verified'){
                    $status = 'text-primary';
                    $title  = 'Verified Order';
                    $order  = 'Verified';
                }else if($orders->status == 'expired'){
                    $status = 'text-danger';
                    $title  = 'Expired Order';
                    $order  = 'Expired';
                }else if($orders->status == 'complited'){
                    $status = 'text-success';
                    $title  = 'Completed Order';
                    $order  = 'Done';
                }
                return "<a href='{$show}' title='{$title}'><text class='{$status} weight-600'>".$order."</text></a>";
            })
            ->editColumn('no_pesanan', function ($orders) {
                $show = route('orders.show',$orders->id_order);
                return "<a href='{$show}' style='color:#000' title='$orders->no_pesanan'>".$orders->no_pesanan."</a>";
            })
            ->rawColumns(['action','name','status','no_pesanan','id_order'])

            ->make(true);
    }

    public function approve($id)
    {
        try {
            DB::beginTransaction();

            $now = Carbon::now('UTC')->format('Y-m-d H:i:s');
            $orders = OrderResi::where('id_order',$id);
                $orders->update([
                    'status'    => "pending" 
                ]);

            $approve = Order::where('id_order',$id)->firstorFail();
            $orderResi = OrderResi::where('id_order',$id)->select('id_order_resi','invoice')->get();
            $uniq = UniqueCode::where('id_user',$approve->id_user)->where('code_uniq',$approve->code_uniq)->first();
            if($uniq != null)
            {
                $uniq->delete();
            }

            // \Ratchet\Client\connect(env('WSS'))->then(function($conn) {
            //     $conn->send('Send');
            //     $conn->close();

            // }, function ($e) {
            // });

            $approve->update([
                'payment_status'    => "settlement",
                'status'            => "verified",
                'approved_date'     => $now
            ]);

            $resi = array();
                foreach($orderResi as $data){
                    $array [] = $data->invoice;
                }

            $invoice = implode(",",$array);

            //SEND NOTIF
            $body = array(
                "id_user"               =>  $approve->id_user,
                "modul"                 =>  10,
                "judul"                 =>  "Marketplace - Payment",
                "pesan"                 =>  "Pembayaran Order dengan nomer Invoice ".$invoice." Berhasil Terverifikasi ",
                "entry_date"            =>  $now,
                "start_date"            =>  $now,
                "type"                  =>  1,
                "id_order"              =>  $approve->id_order,
            );

            $curl_url = env('API_ORDER_MARKET');
            $curlApiPost  =  (new curlAPI())->curlPost($curl_url,$body);

            $cekOrder = Order::leftJoin('t_user', 
                't_order.id_user', '=', 't_user.id_user')
                ->leftJoin( 't_bank',
                            't_order.id_bank', '=', 't_bank.id_bank')
                ->select('t_user.email',
                        't_user.name',
                        't_order.total_bayar',
                        't_order.no_pesanan',
                        't_order.created_at',
                        't_order.status',
                        't_bank.image as bank_image',
                        't_order.code_uniq',
                        't_order.alamat_penerima',
                        't_order.nama_penerima')
                ->where('t_order.id_order', $id)
                ->first();
            
                if(!empty($cekOrder))
                {
                    // get Product
                    $cekProduct     = OrderDetail::leftjoin('products', 
                        't_order_detail.id_product', '=', 'products.id')
                        ->leftjoin( 't_order_resi',
                                't_order_detail.id_order_resi', '=', 't_order_resi.id_order_resi')
                        ->select(   
                            'products.title',
                            'products.feature_image',
                            't_order_detail.catatan',
                            't_order_detail.jumlah',
                            't_order_detail.total_harga',
                            't_order_resi.max_day',
                            't_order_resi.min_day',
                            't_order_resi.created_at')
                        ->where('t_order_detail.id_order', $id)
                        ->get();
    
                    $cekOngkir = OrderResi::where('id_order', $id)->get();
                    foreach($cekOngkir as $ongkirs)
                    {
                        $getOngkir[]        = $ongkirs['ongkir_estimate'];
                        $getInsurance[]       = $ongkirs['isurance'];
                    }
                    
                    $countOngkir        = array_sum($getOngkir);
                    $countInsurance     = array_sum($getInsurance);
                    $totalOngkir        = $countOngkir + $countInsurance;  
    
                    foreach($cekProduct as $products)
                    {
                        $datas                          = [];
                        $datas['title']                 = $products['title'];
                        $datas['feature_image']         = $products['feature_image'];
                        $datas['catatan']               = $products['catatan'];
                        $datas['jumlah']                = $products['jumlah'];
                        $datas['total_harga']           = number_format($products['total_harga'], 0, ',', '.');
                        
                        $created_at                     = $products['created_at'];
                        $estimasi                       = "(".$products['min_day']."-".$products['max_day']." Hari)";
    
                        $datas['estimasi_pengiriman']   = substr($estimasi, 0,10);
                        $dataProduct[]                  = $datas;
    
                    }    
                    $totalBayar     = number_format($cekOrder['total_bayar'], 0, ',', '.');
                    $waktuCheckout  = date('Y-m-d H:i:s', strtotime(+7 .'hours', strtotime($cekOrder['created_at'])));
    
                    //sendEmail
                    $data = array (
                        'template_email'    => 'body-waiting-payment',
                        'CustomerEmail'     => $cekOrder['email'],
                        'CustomerName'      => $cekOrder['name'],
                        'TotalBayar'        => $totalBayar,
                        'NoPesanan'         => $cekOrder['no_pesanan'],
                        'MethodePembayaran' => 'Bank Transfer',
                        'WaktuCheckout'     => $waktuCheckout,
                        'StatusPembayaran'  => 'Menunggu Pembayaran',
                        'BankImage'         => $cekOrder['bank_image'],
                        'subject'           => 'CARSWORLD MARKETPLACE - Payment Order',
                        'products'          => $dataProduct,
                        'ongkir'            => number_format($totalOngkir, 0, ',', '.'),
                        'ppn'               => 0,
                        'code_uniq'         => $cekOrder['code_uniq'],
                        'alamat_penerima'   => $cekOrder['alamat_penerima'],
                        'nama_penerima'     => $cekOrder['nama_penerima'],
                        'logo_cars'         => 'http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com/tf-20190328083427512744-logo_carsworld.png',
                        'android'           => 'http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com/tf-20190328083833793314-img_android.png',
                        'iphone'            => 'http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com/tf-20190328084003130332-img_apple.png',
                        'instagram'         => 'http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com/tf-20190328084128172868-instagram.png',
                        'twitter'           => 'http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com/tf-2019032808460058009-twitter.png',
                        'linkedin'          => 'http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com/tf-20190328084411321192-linkedin.png',
                        'facebook'          => 'http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com/tf-20190328083659415957-facebook.png',
                        'youtube'           => 'http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com/tf-20190328093343464391-youtube.png'
                    );
                    Mail::send('mail.body-payment-success', $data , function($message) use ($data){
                        $message->from('info@carsworld.id');
                        $message->to($data['CustomerEmail']);
                        // $message->to('rajakakautharallam74@gmail.com');
                        $message->subject("CARSWORLD MARKETPLACE - Konfirmasi Pembayaran");
                    });
                }
            DB::commit();
            Session::flash('message', 'No pesanan '.$approve->no_pesanan. 'berhasil di approve');
            return redirect()->route('orders.index');

        } catch (\Exception $e) {
            Session::flash('messages', 'Terjadi kesalahan di server');
            return redirect()->back();
        }  
    }
}
