<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Mockery\Exception;
use Illuminate\Support\Facades\Response;
use App\Helpers\{alliyunOSS};
use DataTables;

class CategoryController extends Controller
{
  
    public function index()
    {
        return view('category.index');
    }
   
    public function store(Request $request)
    {
        // validasi
        $this->validate(
            $request, 
            [   
                'name'          => 'required|string|max:25|unique:categories',
                'feature_image' => 'required|image|mimes:jpg,png,jpeg',
                'feature_image' => 'max:3240',
                
            ],
            [
                'name.required'                     => 'Kolom nama harus diisi',
                'name.unique'                       => 'Nama kategori sudah dipakai',
                'feature_image.requred'             => 'Gambar kategori harus diisi',
                'feature_image.mimes:jpg,png,jpeg'  => 'Format gambar harus jpeg, jpg, png',
                'feature_image.max'                 => 'Ukuran gambar maksimal 3MB'
            ]
        );
        try {
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
                'message' => 'Category Created'
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
        $category = Category::findOrFail($id);
        return $category;
    }
   
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        // validasi
        $this->validate(
            $request, 
            [   
                'name'          => 'required|unique:categories,name,' . $id,
                'feature_image' => 'nullable|image|mimes:jpg,png,jpeg'
            ],
            [
                'name.required'                     => 'Kolom nama harus diisi',
                'name.unique'                       => 'Nama kategori sudah dipakai',
                'feature_image.mimes:jpg,png,jpeg'  => 'Format gambar harus jpeg, jpg, png'
            ]
        );

        try {
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
            return Response::json($returnData, 422);
        }
    }
    
    public function destroy($id)
    {
        $category       = Category::findOrFail($id);
        // category ship to product
        $categoryShip   = Category::join('products', 'products.main_category', '=', 'categories.id')
                                    ->where('categories.id',$id)
                                    ->first();
        // category ship to subcategory
        $subcategoryShip    = Category::where('mainid',$id)->first();
        
        if($categoryShip != null || $subcategoryShip != null) 
        {
            if($subcategoryShip != null)
            {
                $subcategoryShip = Category::where('mainid',$id)->delete();
            }
            $category->delete();
            
        }
        else
        {
            if($category->feature_image != null){
                $pictureurl         = $category->feature_image;
                $pictureName        = substr($pictureurl,39);
                $deletePicture      = (new alliyunOSS())->deleteImage($pictureName);
            }
            $category->forceDelete($id);
            $subcategoryShip->forceDelete($id);
        }
        return response()->json([
            'success' => 200
        ]);
    }

    public function categoryDatatables(Request $request)
    {
        $category = Category::select(['id', 'name', 'feature_image','slug','status'])
                            ->where('mainid',NULL);
      
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
            ->rawColumns(['name-image','action'])

            ->make(true);
    }
}
