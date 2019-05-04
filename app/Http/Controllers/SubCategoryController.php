<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Mockery\Exception;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rule;
use App\Helpers\{alliyunOSS};
use DataTables;

class SubCategoryController extends Controller
{
  
    public function index()
    {
        return view('subcategory.index');
    }
   
    public function store(Request $request)
    {
        // validasi
        $this->validate(
            $request, 
            [   
                'name'          => 'required',
                'feature_image' => 'required|image|mimes:jpg,png,jpeg',
                'feature_image' => 'max:3240',
            ],
            [
                'name.required'                     => 'Kolom nama harus diisi',
                'feature_image.requred'             => 'Gambar kategori harus diisi',
                'feature_image.mimes:jpg,png,jpeg'  => 'Format gambar harus jpeg, jpg, png',
                'feature_image.max'                 => 'Ukuran gambar maksimal 3MB'
            ]
        );
        try {
            $checkMainName = Category::where('name',$request->input('name'))->where('mainid',$request->input('mainid'))->first();
            if($checkMainName != null)
            {
                $returnData = array(
                    'errors' => 'Nama kategori sudah dipakai',
                    'message' => 'Error duplicate'
                );
                return Response::json($returnData, 422);
            }

            $input = $request->all();
            $input['feature_image'] = null;

            if($request->hasFile('feature_image'))
            {
                $fileName = $request->feature_image->getClientOriginalName();
                $fileTemp = $request->feature_image->getPathName();
                $image  =  (new alliyunOSS())->upload($fileName,$fileTemp);
                $input['feature_image'] = $image;
            }

            Category::create($input);
            
            return response()->json([
                'success' => 200,
                'message' => 'SubCategory Created'
            ]);

        } catch (\Exception $e) {
            $returnData = array(
                'status' => 'error',
                'message' => 'Terjadi kesalahan'
            );
            return Response::json($returnData, 400);
        }

    }
    
    public function edit($id)
    {
    $category = Category::select('id','mainid','feature_image','name','status')->findOrFail($id);
    $main     = Category::findOrFail($category->mainid);
    $category->mainname = $main->name;
    return $category;
    }
   
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        // validasi
        $this->validate(
            $request, 
            [   
                'name'          => 'required',
                'feature_image' => 'nullable|image|mimes:jpg,png,jpeg'
            ],
            [
                'name.required'                     => 'Kolom nama harus diisi',
                'name.unique'                       => 'Nama kategori sudah dipakai',
                'feature_image.mimes:jpg,png,jpeg'  => 'Format gambar harus jpeg, jpg, png'
            ]
        );

        try {

            $checkMainName = Category::where('name',$request->input('name'))->where('mainid',$request->input('mainid'))->where('id',$id)->first();
            if($checkMainName == null)
            {
                $returnData = array(
                    'errors' => 'Nama kategori sudah dipakai',
                    'message' => 'Error duplicate'
                );
                return Response::json($returnData, 422);
            }

            $input = $request->all();

            $input['feature_image'] = $category->feature_image;
            if($request->hasFile('feature_image'))
            {
                if($category->hasFile != null){
                    $pictureurl         = $category->feature_image;
                    $pictureName        = substr($pictureurl,39);
                    $deletePicture      = (new alliyunOSS())->deleteImage($pictureName);
                }
                $fileName = $request->feature_image->getClientOriginalName();
                $fileTemp = $request->feature_image->getPathName();
                $image  =  (new alliyunOSS())->upload($fileName,$fileTemp);
                $input['feature_image'] = $image;
            }

            $category->update($input);

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
    
    public function destroy($id)
    {
        $subcategory       = Category::findOrFail($id);
        $subcategoryShip   = Category::join('products', 'products.category', '=', 'categories.id')
                                    ->where('categories.id',$id)
                                    ->first();
        if($subcategoryShip != null) 
        {
            $subcategory->delete($id);
        }
        else
        {
            if($subcategory->feature_image != null){
                $pictureurl         = $subcategory->feature_image;
                $pictureName        = substr($pictureurl,39);
                $deletePicture      = (new alliyunOSS())->deleteImage($pictureName);
            }
            $subcategory->forceDelete($id);
        }
        return response()->json([
            'success' => 200
        ]);
    }

    public function subCategoryDatatables(Request $request)
    {
        $category = Category::select(['id', 'name', 'mainid', 'feature_image', 'slug', 'status'])
                            ->where('mainid','!=',NULL);
      
        return Datatables::of($category)
        
            ->addColumn('action', function ($category) {
                return '<a onclick="editForm('. $category->id .')"><i class="fas fa-pencil-alt text-primary"></i></a> &nbsp; &nbsp;
                        <a onclick="deleteData('. $category->id .')"><i class="fas fa-trash-alt text-danger"></i></a>';
            })
            ->editColumn('name-image', function ($category) {
                if($category->feature_image != null){
                    $photo = $category->feature_image;
                }else{
                    $photo = '';
                }
                return "<p class='text-dark weight-600'><img src='$photo' alt='$photo' width='42' height='42'> $category->name</p>";
            })
            ->editColumn('mainid', function ($category) {
                $main     = Category::withTrashed()->findOrFail($category->mainid);
                return $category->mainname = $main->name;
                
            })
            ->rawColumns(['name-image','action'])

            ->make(true);
    }

    public function categorylist(Request $request)
    {
        //get data kategori
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Category::where('mainid',NULL)->where('status','1')->search($term)->limit(5)->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->name];
        }

        return \Response::json($formatted_tags);
    }
}
