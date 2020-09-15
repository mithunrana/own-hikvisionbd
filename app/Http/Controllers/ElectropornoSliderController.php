<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ElectroPronoSlider;
class ElectropornoSliderController extends Controller
{
    public function electroPornoSlider(){
        return view('Admin.electropornoslidermanage');
    }

    public function electroPornoSliderAdd(){
        return view('Admin.electropornoslideradd');
    }

    public function electroPornoSliderStore(Request $request){
        $this->validate($request,[
            'FeaturedImage' => 'required',
            'slidername' => 'required',
        ]);
        ElectroPronoSlider::create([
            'sliderimage' => $request->FeaturedImage,
            'sliderTopic' => $request->slidername,
        ]);
        return redirect()->to('admin/electroporno-slider-manage')->with('message','Slider Added Successfully');
    }

    public function electroPornoSliderActiveDeactive($status,$liderid){
        $liderid = $liderid;
        $status = $status;
        if($status==0){
            $Portfolio =  ElectroPronoSlider::findOrFail($liderid);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/electroporno-slider-manage')->with('message','Slider Active Successfully');
        }else{
            $Portfolio =  ElectroPronoSlider::findOrFail($liderid);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/electroporno-slider-manage')->with('message','Slider Deactive Successfully');
        }
    }

    public function electroPornoSliderDelete($id){
        $Products = ElectroPronoSlider::find($id);
        $Products->delete();
        return redirect()->to('admin/electroporno-slider-manage')->with('message','Slider Delete Successfully');
    }
}
