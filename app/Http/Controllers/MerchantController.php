<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchant;

use DataTables;
use DB;

class MerchantController extends Controller
{
  
    public function index()
    {
        return view('merchant.index');
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
        //
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

    public function merchantDatatables(Request $request)
    {
        $merchant = Merchant::select([
                                    'id','name','is_official_store','phone','address','status','email'
                                ]);
        
        return Datatables::of($merchant)
            ->addColumn('action', function ($merchant) {
                if($merchant->status == 'pending'){
                    return '<a onclick="Approve('. $merchant->id .')"><i class="fas fa-check text-success"></i></a>
                            <a onclick="Reject('. $merchant->id .')"><i class="fas fa-times text-danger"></i></a>';
                }if($merchant->status == 'reject'){
                    return '<a onclick="deleteData('. $merchant->id .')"><i class="fas fa-trash-alt text-danger"></i></a>';
                }else{
                    return "";
                }
            })
            ->editColumn('type', function ($merchant) {
                if($merchant->is_official_store=="true"){
                    $type = "<span class='badge badge-warning font-weight-bold' style='font-size: 10pt;'>Official Store</span>";
                }else{
                    $type = 'Regular Store';
                }
                return $type;
            })
            ->editColumn('harga_baru', function ($merchant) {
                return number_format($merchant->harga_baru, 0,',',',');
            })
            ->editColumn('status', function ($merchant) {
                $show = route('orders.show',$merchant->id);
                if($merchant->status == 'pending'){
                    $color  = 'badge-warning';
                    $title  = 'Status Pending';
                    $status = 'Pending';
                }else if($merchant->status == 'approved'){
                    $color  = 'badge-success';
                    $title  = 'Status Approved';
                    $status = 'Approved';
                }else if($merchant->status == 'reject'){
                    $color  = 'badge-danger';
                    $title  = 'Status Reject';
                    $status = 'Reject';
                }
                return "<span class='badge {$color} font-weight-bold' title='{$title}' style='font-size: 10pt;'>{$status}</span>";
            })
            ->rawColumns(['action','name-image','status','harga_baru'])

            ->make(true);
    }
}
