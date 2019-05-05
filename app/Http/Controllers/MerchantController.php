<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchant;
use Illuminate\Support\Facades\Response;

use DataTables;
use DB;

class MerchantController extends Controller
{
  
    public function index()
    {
        return view('merchant.index');
    }

    public function store(Request $request)
    {
        // validasi
        $this->validate(
            $request, 
            [   
                'email'          => 'required|email|max:200|unique:vendor_profiles',
                'name'           => 'required|max:200',
                
            ],
            [
                'name.required'     => 'Kolom nama harus diisi',
                'email.required'    => 'Kolom email harus diisi',
                'email.email'       => 'Masukan format email',
                'email.unique'      => 'Email sudah dipakai',
            ]
        );
        try {
            $input['email'] = $request->input('email');
            $input['name']  = $request->input('name');
            $input['is_official_store'] = $request->input('status') ? 'true' : 'false';

            Merchant::create($input);
            
            return response()->json([
                'success' => 200,
                'message' => 'Merchant Created'
            ]);

        } catch (\Exception $e) {
            $returnData = array(
                'status' => 'error',
                'message' => 'Terjadi kesalahan pada server'
            );
            return Response::json($returnData, 400);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $merchant = Merchant::findOrFail($id);
        return $merchant;
    }

    public function update(Request $request, $id)
    {
        $merchant = Merchant::findOrFail($id);
        // validasi
        $this->validate(
            $request, 
            [   
                'email'          => 'required|email|max:200|unique:vendor_profiles,email,' . $id,
                'name'           => 'required|max:200',
            ],
            [
                'name.required'     => 'Kolom nama harus diisi',
                'email.required'    => 'Kolom email harus diisi',
                'email.email'       => 'Masukan format email',
                'email.unique'      => 'Email sudah dipakai',
            ]
        );

        try {
            $input['email'] = $request->input('email');
            $input['name']  = $request->input('name');
            $input['is_official_store'] = $request->input('status') ? 'true' : 'false';

            $merchant->update($input);

            return response()->json([
                'success' => 200
            ]);

        } catch (\Exception $e) {
            $returnData = array(
                'status' => 'error',
                'message' => 'Terjadi kesalahan pada server'
            );
            return Response::json($returnData, 422);
        }
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
                return '<a onclick="editForm('. $merchant->id .')"><i class="fas fa-pencil-alt text-primary"></i></a>
                        <a onclick="deleteData('. $merchant->id .')"><i class="fas fa-trash-alt text-danger"></i></a>';
            })
            ->editColumn('is_official_store', function ($merchant) {
                if($merchant->is_official_store=="true"){
                    $type = "<span class='badge badge-warning font-weight-bold' style='font-size: 10pt;'>Official Store</span>";
                }else{
                    $type = 'Regular Store';
                }
                return $type;
            })
            ->rawColumns(['action','is_official_store'])

            ->make(true);
    }
}
