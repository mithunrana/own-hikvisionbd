<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
class TrainingController extends Controller
{
    //<<<<<<<<<--Events Manage Section Start-->>>>>>>>>>//

    public function trainingManage(){
        $Events = Training::orderBy('id', 'DESC')->get();
        return view('Admin/trainingmanage',compact('Events'));
    }

    public function add(){
        return view('Admin.trainingadd');
    }


    public function store(Request $request){
        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => 'required|unique:trainings,Permalink',
            'TrainingName' => 'required',
        ]);

        Training::create([
            'BrowserTitle' => $request->BrowserTitle,
            'Permalink' => $request->Permalink,
            'TrainingTime' => $request->TrainingTime,
            'TrainingDate' => $request->TrainingDate,
            'TrainingName' => $request->TrainingName,
            'SeoKeyword'=> $request->SeoKeyword,
            'SeoDescription' => $request->SeoDescription,
            'FeaturedImage1' => $request->FeaturedImage1,
            'FeaturedImage2' => $request->FeaturedImage2,
            'ImageAltText' => $request->ImageAltText,
            'ImageTitleText' => $request->ImageTitleText,
            'TrainingShortText' => $request->TrainingShortText,
            'TrainingDetails' => $request->TrainingDetails,
        ]);
        return redirect()->to('admin/training-manage')->with('message','Training Added Successfully');
    }


    public function edit($id){
        $Training =  Training::findOrFail($id);
        return view('Admin.trainingedit',compact('Training'));
    }


    public function update($id,Request $request){

        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => "required|unique:trainings,Permalink,$id",
            'TrainingName' => 'required',
        ]);

        $Portfolio = Training::findOrFail($id);
        $Portfolio->BrowserTitle = request('BrowserTitle');
        $Portfolio->TrainingName = request('TrainingName');
        $Portfolio->Permalink = request('Permalink');
        $Portfolio->TrainingTime = request('TrainingTime');
        $Portfolio->TrainingDate = request('TrainingDate');
        $Portfolio->SeoKeyword= request('SeoKeyword');
        $Portfolio->SeoDescription = request('SeoDescription');
        $Portfolio->FeaturedImage1 = request('FeaturedImage1');
        $Portfolio->FeaturedImage2 = request('FeaturedImage2');
        $Portfolio->ImageAltText = request('ImageAltText');
        $Portfolio->ImageTitleText = request('ImageTitleText');
        $Portfolio->TrainingShortText = request('TrainingShortText');
        $Portfolio->TrainingDetails = request('TrainingDetails');
        $Portfolio->save();
        return redirect()->to('admin/training-manage')->with('message','Training Update Successfully');
    }



    public function delete($id){
        $Portfolio = Training::find($id);
        $Portfolio->delete();
        return redirect()->to('admin/training-manage')->with('message','Training delete Successfully');
    }

    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Portfolio =  Training::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/training-manage')->with('message','Training Active Successfully');
        }else{
            $Portfolio =  Training::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/training-manage')->with('message','Training Deactive Successfully');
        }
    }
}
