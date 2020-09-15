<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CctvCameraMegaPixel;
use App\Products;
use App\SiteProfile;
class CctvMegaPixelController extends Controller
{
    public function megaPixelManage(){
        $Categories = CctvCameraMegaPixel::orderBy('id', 'DESC')->get();
        return view('Admin.cctvcameramegapixeladdmanage',Compact('Categories'));
    }

    public function megaPixelStore(Request $request){
        $this->validate($request,[
            'MegaPixel' => 'required',
            'MegaPixelUrl' => "required|unique:cctv_camera_mega_pixels,MegaPixelUrl",
            'MegaPixelBrowserTitle' => 'required',
        ]);
        CctvCameraMegaPixel::create($request->all());
        return redirect()->to('admin/cctvmegapixel')->with('message','Mega Pixel Added Successfully');
    }

    public function megaPixelEdit($id){
        $MegaPixel = CctvCameraMegaPixel::where('id',$id)->first();
        return view('Admin.cctvcameramegapixeledit',Compact('MegaPixel'));
    }

    public function updateMegaPixel(Request $request,$id){
        $this->validate($request,[
            'MegaPixel' => 'required',
            'MegaPixelUrl' => "required|unique:cctv_camera_mega_pixels,MegaPixelUrl,$id",
            'MegaPixelBrowserTitle' => 'required',
        ]);
        $MegaPixel = CctvCameraMegaPixel::findOrFail($id);
        $MegaPixel->MegaPixel = request('MegaPixel');
        $MegaPixel->MegaPixelUrl = request('MegaPixelUrl');
        $MegaPixel->SeoHeading = request('SeoHeading');
        $MegaPixel->MegaPixelBrowserTitle = request('MegaPixelBrowserTitle');
        $MegaPixel->MegaPixelSeoKeyword = request('MegaPixelSeoKeyword');
        $MegaPixel->MegaPixelSeoDescription = request('MegaPixelSeoDescription');
        $MegaPixel->MegaPixelDetails = request('MegaPixelDetails');
        $MegaPixel->save();
        return redirect()->to('admin/cctvmegapixel')->with('message','Mega Pixel Update Successfully');
    }

    public function megaPixelView($id){
        $MegaPixel = CctvCameraMegaPixel::where('id',$id)->first();
        return view('Admin.cctvcameracameramegapixelview',Compact('MegaPixel'));
    }

    public function megaPixelDelete($id){
       Products::where('MegaPixelId',$id)->update(['MegaPixelId' => 0]);
       $MegaPixel = CctvCameraMegaPixel::find($id);
       $MegaPixel->delete();
       return redirect()->to('admin/cctvmegapixel')->with('message','Mega Pixel Delete Successfully');
    }


}
