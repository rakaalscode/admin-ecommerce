<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FlashSale;
use App\FlashSaleProduk;
use App\FlashSaleCategory;

use DataTables;
use DB;

class ProductFlashSaleController extends Controller
{
  
    public function index()
    {
        return view('productflash.index');
    }

    public function destroy($id)
    {
        $flashSale = FlashSaleProduk::where('id_flash_product',$id)->first();
        if($flashSale != null)
        {
            $flashSale->delete();
        }

        return response()->json([
            'success' => 200
        ]);
    }

    public function productFlashDatatables(Request $request)
    {
        $productFlash = FlashSaleProduk::join('products', 'flash_sale_product.id_product', '=', 'products.id')
                        ->join('vendor_profiles', 'products.vendorid', '=', 'vendor_profiles.id')
                        ->join('t_flash_sale', 'flash_sale_product.id_flash_sale', '=', 't_flash_sale.id_flash_sale')
                        ->select([
                                'flash_sale_product.*',
                                'products.title','products.main_category','products.feature_image','products.vendorid',
                                'vendor_profiles.name',
                                't_flash_sale.judul','t_flash_sale.banner','t_flash_sale.start_date','t_flash_sale.end_date'
                                ]);
        
        return Datatables::of($productFlash)
            ->addColumn('action', function ($productFlash) {
                if($productFlash->status == 'pending'){
                    return '<a onclick="Approve('. $productFlash->id_flash_product .')"><i class="fas fa-check text-success"></i></a>
                            <a onclick="Reject('. $productFlash->id_flash_product .')"><i class="fas fa-times text-danger"></i></a>';
                }if($productFlash->status == 'reject'){
                    return '<a onclick="deleteData('. $productFlash->id_flash_product .')"><i class="fas fa-trash-alt text-danger"></i></a>';
                }else{
                    return "";
                }
            })
            ->editColumn('name-image', function ($productFlash) {
                if($productFlash->feature_image != null){
                    $photo = $productFlash->feature_image;
                }else{
                    $photo = '';
                }
                return "<p class='text-dark weight-600'><img src='$photo' alt='$photo' width='42' height='42'> $productFlash->title</p>";
            })
            ->editColumn('harga_baru', function ($productFlash) {
                return number_format($productFlash->harga_baru, 0,',',',');
            })
            ->editColumn('status', function ($productFlash) {
                $show = route('orders.show',$productFlash->id_flash_product);
                if($productFlash->status == 'pending'){
                    $color  = 'badge-warning';
                    $title  = 'Status Pending';
                    $status = 'Pending';
                }else if($productFlash->status == 'approved'){
                    $color  = 'badge-success';
                    $title  = 'Status Approved';
                    $status = 'Approved';
                }else if($productFlash->status == 'reject'){
                    $color  = 'badge-danger';
                    $title  = 'Status Reject';
                    $status = 'Reject';
                }
                return "<span class='badge {$color} font-weight-bold' title='{$title}' style='font-size: 10pt;'>{$status}</span>";
            })
            ->rawColumns(['action','name-image','status','harga_baru'])

            ->make(true);
    }

    public function approve($id)
    {
        //update data
        try {
            $productFlash = FlashSaleProduk::where('id_flash_product',$id)->first();
                $input['status'] = 'approved';
            $productFlash->update($input);

            return response()->json([
                'success' => 200
            ]);
        } catch (\Exception $e) {
            $returnData = array(
                'status' => 'error',
                'message' => 'Terjadi kesalahan pada server'
            );
            return Response::json($returnData, 400);
        }
    }

    public function reject($id)
    {
        //update data
        try {
            $productFlash = FlashSaleProduk::where('id_flash_product',$id)->first();
                $input['status'] = 'reject';
            $productFlash->update($input);

            return response()->json([
                'success' => 200
            ]);
        } catch (\Exception $e) {
            $returnData = array(
                'status' => 'error',
                'message' => 'Terjadi kesalahan pada server'
            );
            return Response::json($returnData, 400);
        }
    }
}
