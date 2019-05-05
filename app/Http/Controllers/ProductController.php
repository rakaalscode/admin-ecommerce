<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Gallery;
use App\Brands;
use App\Product;
use App\Merchant;
use Mockery\Exception;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Helpers\{alliyunOSS};
use OSS\OssClient;
use OSS\Core\OssException;
use DataTables;
use DB;

class ProductController extends Controller
{
  
    public function index()
    {
        return view('product.index');
    }

    public function create()
    {
        $merchants = Merchant::pluck('name','id');
        $categories = Category::where('mainid',NULL)->where('status',1)->pluck('name','id');
        return view('product.create',compact('categories','merchants'));
    }

    public function getBrands($id)
    {
        $brands = Brands::orderBy('id_brand','desc')->where('id_merchant', $id)->pluck('nama_brand','id_brand');
        
        if(count($brands) > 0) {
            return $brands;
        }else{
            return response()->json([
                'no_data' => 'true'
            ]);
        }
    }
   
    public function store(Request $request)
    {
        $accessKeyId = env('OSS_ACCESS_KEY_ID');
        $accessKeySecret = env('OSS_ACCESS_KEY_SECRET');
        $endpoint = env('OSS_ENDPOINT');
        $client = new OSSClient($accessKeyId, $accessKeySecret, $endpoint);
        $bucket = env("OSS_BUCKET");

        try {
            DB::beginTransaction();

            $product = new Product();

            $product->title        = strip_tags($request->input('title'));
            $product->id_brand     = $request->input('id_brand');
            $product->stock        = $request->input('stock');
            $product->sku          = strip_tags($request->input('sku'));
            $product->length       = strip_tags($request->input('length'));
            $product->width        = strip_tags($request->input('width'));
            $product->height       = strip_tags($request->input('height'));
            $product->weight       = $request->input('weight');
            $product->color        = strip_tags($request->input('color'));
            $product->sizes        = strip_tags($request->input('sizes'));
            $product->sla          = $request->input('sla');
            $product->price        = str_replace(".", "", $request->input('price'));
            $product->description  = strip_tags($request->input('description'));
            $product->policy       = strip_tags($request->input('policy'));
            $product->url          = strip_tags($request->input('url'));
            $product->url2         = strip_tags($request->input('url2'));
            $product->url3         = strip_tags($request->input('url3'));
            $product->tags         = strip_tags($request->input('tags'));

            $product->main_category = $request->mainid;
            $product->category      = $request->subid;
            
            $request->feature_image = null;

            if($request->hasFile('photo'))
            {
                $fileName = $request->photo->getClientOriginalName();
                $fileTemp = $request->photo->getPathName();
                $image  =  (new alliyunOSS())->upload($fileName,$fileTemp);
                $product->feature_image = $image;
            }

            $product->vendorid = $request->input('merchant');
            $product->status = 1;
            $product->file = 1;
            $product->save();
            $lastid = $product->id;

            if($files = $request->file('file'))
            {
                foreach ($files as $key => $file){
                    $gallery = new Gallery;
                    $fileName = $_FILES["file"]["name"][$key];
                    $fileTemp = $_FILES['file']['tmp_name'][$key];
                    $image  =  (new alliyunOSS())->upload($fileName,$fileTemp);
                    $gallery['image'] = $image;
                    $gallery['productid'] = $lastid;
                    $gallery->save();
                }
            }
        DB::commit();
        Session::flash('message', 'Data berhasil disimpan');
        return redirect()->route('product.index');

        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('messages', 'Terjadi kesalahan di server');
            return redirect()->route('product.index');
        }

    }
    
    public function edit($id)
    {
        try {
            $product = Product::findOrFail($id);
            $subs = Category::where('mainid',$product->main_category)->get();
            $brands = Brands::orderBy('id_brand','desc')->where('id_merchant', $product->vendorid)->get();
            $categories = Category::where('mainid',NULL)->where('status',1)->get();
            $galleries = Gallery::where('productid',$id)->get();
            return view('product.edit',compact('product','categories','brands','subs','galleries'));

        } catch (\Exception $e) {
            return response(view('pages.500'), 500);
        }
    }
   
    public function update(Request $request, $id)
    {

        try {
            DB::beginTransaction();

            $product = Product::findOrFail($id);
            $gallery = Gallery::where('productid',$id)->first();

            $photo = $product->feature_image;
            $input['title']        = strip_tags($request->input('title'));
            $input['id_brand']     = $request->input('id_brand');
            $input['stock']        = $request->input('stock');
            $input['sku']          = strip_tags($request->input('sku'));
            $input['length']       = strip_tags($request->input('length'));
            $input['width']        = strip_tags($request->input('width'));
            $input['height']       = strip_tags($request->input('height'));
            $input['weight']       = $request->input('weight');
            $input['color']        = strip_tags($request->input('color'));
            $input['sizes']        = strip_tags($request->input('sizes'));
            $input['sla']          = $request->input('sla');
            $input['price']        = str_replace(".", "", $request->input('price'));
            $input['description']  = strip_tags($request->input('description'));
            $input['policy']       = strip_tags($request->input('policy'));
            $input['url']          = strip_tags($request->input('url'));
            $input['url2']         = strip_tags($request->input('url2'));
            $input['url3']         = strip_tags($request->input('url3'));
            $input['tags']         = strip_tags($request->input('tags'));
            
            $input['main_category'] = $request->mainid;
            $input['category']      = $request->subid;
            
            //OSS
            $accessKeyId = env('OSS_ACCESS_KEY_ID');
            $accessKeySecret = env('OSS_ACCESS_KEY_SECRET');
            $endpoint = env('OSS_ENDPOINT');
            $client = new OSSClient($accessKeyId, $accessKeySecret, $endpoint);
            $bucket = env("OSS_BUCKET");

            //insert image
            if($request->hasFile('photo'))
            {
                if($product->feature_image != null){
                    $pictureurl         = $product->feature_image;
                    $pictureName        = substr($pictureurl,39);
                    $deletePicture      = (new alliyunOSS())->deleteImage($pictureName);
                }

                $fileName = $request->photo->getClientOriginalName();
                $fileTemp = $request->photo->getPathName();
                $image  =  (new alliyunOSS())->upload($fileName,$fileTemp);
                $input['feature_image'] = $image;
            }

            //if delete gallery
            if ($request->galdel == 1){
                if($gallery != null){
                    $gal        = Gallery::where('productid',$id)->get();
                    $galleries  = Gallery::where('productid',$id);

                    foreach($gal as $key => $gallery){
                        $pictureurl         = $gallery['image'];
                        $pictureName        = substr($pictureurl,39);
                        $deletePicture      = (new alliyunOSS())->deleteImage($pictureName);
                    }
                    $galleries->delete();
                }
            }

            //update gallery
            if($files = $request->file('file'))
            {
                foreach ($files as $key => $file){
                    $gallery = new Gallery;
                    $fileName = $_FILES["file"]["name"][$key];
                    $fileTemp = $_FILES['file']['tmp_name'][$key];
                    $image  =  (new alliyunOSS())->upload($fileName,$fileTemp);
                    $gallery['image'] = $image;
                    $gallery['productid'] = $id;
                    $gallery->save();
                }
            }

            $product->update($input);
            DB::commit();
            Session::flash('message', 'Produk berhasil diupdate');
            if($request->input('import')==1){
                return redirect('ecommerce/import_products');
            }else{
                return redirect()->route('product.index');
            }

        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('messages','Terjadi kesalahan pada server');
            return redirect()->back();
        }
    }
    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $gallery = Gallery::where('productid',$id)->first();
        $productShip   = Product::join('t_order_detail', 'products.id', '=', 't_order_detail.id_order_detail')
                                ->where('products.id',$id)
                                ->first();
        if($productShip != null) 
        {
            $product->delete();
        }
        else
        {
            if($product->feature_image != null){
                $pictureurl         = $product->feature_image;
                $pictureName        = substr($pictureurl,39);
                $deletePicture      = (new alliyunOSS())->deleteImage($pictureName);
            }

            if($gallery != null){
                $gal        = Gallery::where('productid',$id)->get();
                $galleries  = Gallery::where('productid',$id);
                foreach($gal as $key => $gallery){
                    $pictureurl         = $gallery['image'];
                    $pictureName        = substr($pictureurl,39);
                    $deletePicture      = (new alliyunOSS())->deleteImage($pictureName);
                }
                $galleries->delete();
            }
            
            $product->forceDelete($id);
        }
        return response()->json([
            'success' => 200
        ]);
    }

    public function productDatatables(Request $request)
    {
        $product = Product::join('categories', 'products.category', '=', 'categories.id')
                    ->join('vendor_profiles', 'products.vendorid', '=', 'vendor_profiles.id')
                    ->select([
                                'products.id','products.status', 'title','sku','price','stock','products.feature_image',
                                'vendor_profiles.name as mercname',
                                'categories.name as catname'
                            ]);
        
        return Datatables::of($product)
            ->addColumn('action', function ($product) {
            if($product->status == 1){
                $icon = 'fa fa-check';
                $title = 'Aktif'; 
                $color = 'text-success'; 
            }else{
                $icon = 'fa fa-times';
                $title = 'Tidak Aktif';
                $color = 'text-warning'; 
            }
            $edit = route('product.edit',$product->id);
            $show = route('product.show',$product->id);
                return "<a href='{$edit}' title='Ubah'><i class='fas fa-pencil-alt text-primary'></i></a>
                        <a onclick='statusData($product->id)' title='{$title}'><i class='{$icon} {$color}'></i></a>
                        <a onclick='deleteData($product->id)' title='Hapus'><i class='fas fa-trash-alt text-danger'></i></a>
                        <a href='{$show}' title='Detail'><i class='fa fa-eye text-warning'></i></a>";
            })
            ->editColumn('price', function ($product) {
                return number_format($product->price, 0,',',',');
            })
            ->editColumn('name-image', function ($product) {
                if($product->feature_image != null){
                    $photo = $product->feature_image;
                }else{
                    $photo = '';
                }
                return "<p class='text-dark weight-600'><img src='$photo' alt='$photo' width='42' height='42'> $product->title</p>";
            })
            ->rawColumns(['name-image','action'])

            ->make(true);
    }

    public function subcats($id)
    {
        $subcats = Category::where('mainid', $id)->where('status',1)->pluck('name','id');
        return collect(json_decode($subcats, true));
    }

    public function title_product()
    {
        $product = Product::all()->where('is_delete',0)->where('title', Input::get('title'))->where('vendorid',58)->first();
        if ($product) {
            return Response::json('Produk "'.Input::get('title').'" sudah digunakan');
        } else {
           return 'true';
        }
    }

    public function title_product_edit($id)
    {
        $vendor = Product::select('id','vendorid')->where('id',$id)->first();
        $product = Product::where('title', Input::get('title'))->where('vendorid',$vendor->vendorid)->where('id',$id)->first();
        $products = Product::where('title', Input::get('title'))->where('vendorid',$vendor->vendorid)->first();
        if ($product) {
            return 'true';
        } elseif($products) {
            return Response::json('Produk "'.Input::get('title').'" sudah digunakan');
        }else {
            return 'true';
        }
    }

    public function status($id)
    {
        //update data
        try {
            $product = Product::where('id',$id)->first();
            if($product->status == 1){
                $input['status'] = 0;
            }else{
                $input['status'] = 1;
            }
            $product->update($input);

            return response()->json([
                'success' => 200
            ]);
        } catch (\Exception $e) {
            $returnData = array(
                'status' => 'error',
                'message' => 'Terjadi kesalahan'
            );
            return Response::json($returnData, 400);
        }
    }
}
