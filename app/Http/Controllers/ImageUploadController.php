<?php

namespace App\Http\Controllers;

use App\JobsImage;
use App\NewsImage;
use Illuminate\Http\Request;
use App\images;
use App\ProductsImage;
use Validator;
use App\SiteProfile;
use Illuminate\Support\Facades\File;
class ImageUploadController extends Controller
{

    //<<<<<---======================================General Image Upload Start Here=====================================------>>>>
    public function formSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success'=>'Please Insert Valid Image']);
        } else {
            $name  =  $request->image->getClientOriginalName();
            $findimages = 'images/'.$name;
            $check  = images::where('imageurl',$findimages)->first();
            if(!empty($check)){
                return response()->json(['success'=>'This name image already uploaded']);
            }else{
                images::create(['imageurl'=> $findimages]);
                $request->image->move(public_path('images'),$name);
                return response()->json(['success'=>'image uploaded successfully']);
            }
        }

        /*$imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        return response()->json(['success'=>'You have successfully upload image.']);*/
    }
    public function imagelist(){
        $allimages =  images::orderBy('id', 'DESC')->get();
        return response()->json($allimages);
    }
    //<<<<<---======================================General Image Upload Start Here=====================================------>>>>






    //<<<<<---======================================Products Image Upload Start Here=====================================------>>>>
    public function productsImageUpload(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success'=>'Please Insert Valid Image']);
        } else {
            $name  =  $request->image->getClientOriginalName();
            $findimages = 'productsImage/'.$name;
            $check  = ProductsImage::where('imageurl',$findimages)->first();
            if(!empty($check)){
                return response()->json(['success'=>'This name image already uploaded']);
            }else{
                ProductsImage::create(['imageurl'=> $findimages]);
                $request->image->move(public_path('productsImage'),$name);
                return response()->json(['success'=>'image uploaded successfully']);
            }
        }
    }
    public function productsImageGet(){
        $allimages =  ProductsImage::orderBy('id', 'DESC')->get();
        return response()->json($allimages);
    }
    //<<<<<---======================================Products Image Upload Ends Here=====================================------>>>>





    //<<<<<---======================================News Image Upload Start Here=====================================------>>>>
    public function newsImageUpload(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success'=>'Please Insert Valid Image']);
        } else {
            $name  =  $request->image->getClientOriginalName();
            $findimages = 'newsimage/'.$name;
            $check  = NewsImage::where('imageurl',$findimages)->first();
            if(!empty($check)){
                return response()->json(['success'=>'This name image already uploaded']);
            }else{
                NewsImage::create(['imageurl'=> $findimages]);
                $request->image->move(public_path('newsimage'),$name);
                return response()->json(['success'=>'image uploaded successfully']);
            }
        }
    }
    public function newsImageGet(){
        $allimages =  NewsImage::orderBy('id', 'DESC')->get();
        return response()->json($allimages);
    }
    //<<<<<---======================================News Image Upload Ends Here=====================================------>>>>





    //<<<<<---======================================Jobs Image Upload Start Here=====================================------>>>>
    public function jobsImageUpload(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success'=>'Please Insert Valid Image']);
        } else {
            $name  =  $request->image->getClientOriginalName();
            $findimages = 'jobsimage/'.$name;
            $check  = JobsImage::where('imageurl',$findimages)->first();
            if(!empty($check)){
                return response()->json(['success'=>'This name image already uploaded']);
            }else{
                JobsImage::create(['imageurl'=> $findimages]);
                $request->image->move(public_path('jobsimage'),$name);
                return response()->json(['success'=>'image uploaded successfully']);
            }
        }
    }
    public function jobsImageGet(){
        $allimages =  JobsImage::all();
        return response()->json($allimages);
    }
    //<<<<<---======================================Jobs Image Upload Ends Here=====================================------>>>>



    public function productImageDelete($id){
        $Product = ProductsImage::find($id);
        $check = $Product->delete();
        if($check==true){
            if(File::exists($Product->imageurl)){
                unlink($Product->imageurl);
            }
            return response()->json(['success'=>'Image Delete Successfully']);
        }else{
            return response()->json(['success'=>'test']);
        }
    }

    public function generalImageDelete($id){
        $Image = images::find($id);
        $check = $Image->delete();
        if($check==true){
            if(File::exists($Image->imageurl)){
                unlink($Image->imageurl);
            }
            return response()->json(['success'=>'Image Delete Successfully']);
        }else{
            return response()->json(['success'=>'test']);
        }
    }


}
