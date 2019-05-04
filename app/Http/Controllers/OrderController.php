<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;

use Carbon\Carbon;
use DataTables;

class OrderController extends Controller
{
    
    public function index()
    {
        return view('order.index');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        try {
            //Detail Order
            $order = Order::where('id_order',$id)->first();

            //Detail Product
            $group_detail = array();
            $orderdetail = OrderDetail::join('t_order_resi','t_order_detail.id_order_resi', '=', 't_order_resi.id_order_resi')
            ->join('products','t_order_detail.id_product', '=', 'products.id')
            ->select('t_order_detail.*',
                't_order_resi.ongkir_estimate as ongkir_estimate','t_order_resi.is_isurance','t_order_resi.isurance',
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
            Session::flash('message', 'Terjadi kesalahan di server');
            return redirect()->route('orders.show');
        }
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
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
                            ]);

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
                return "<a href='{$show}' title='Detail'><i class='fa fa-eye text-primary'></i></a>";
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
}
