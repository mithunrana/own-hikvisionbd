<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solutions;
use Validator;
class SolutionsController extends Controller
{



    public function index(){
        return view('UI.solutionsmain');
    }


    public function solutionView($url){
        $Solution = Solutions::where('Permalink',$url)->first();
        return view('UI.solutionsview',compact('Solution'));
    }


   //<<<<<<<<<--Events Manage Section Start-->>>>>>>>>>//
    public function solutionsManage(){
        $Solutions= Solutions::orderBy('id', 'DESC')->get();
        return view('Admin/solutionmanage',compact('Solutions'));
    }

    public function add(){
        return view('Admin.solutionadd');
    }



    public function store(Request $request){

        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => 'required',
            'SolutionsName' => 'required',
        ]);

        Solutions::create([
            'BrowserTitle' => $request->BrowserTitle,
            'Permalink' => $request->Permalink,
            'SolutionsName' => $request->SolutionsName,
            'SeoKeyword'=> $request->SeoKeyword,
            'SeoDescription' => $request->SeoDescription,
            'FeaturedImage1' => $request->FeaturedImage1,
            'FeaturedImage2' => $request->FeaturedImage2,
            'ImageAltText' => $request->ImageAltText,
            'ImageTitleText' => $request->ImageTitleText,
            'SolutionShortText' => $request->SolutionShortText,
            'SolutionsDetails' => $request->SolutionsDetails,
        ]);
        return redirect()->to('admin/solutions-manage')->with('message','Solutions Added Successfully');
    }




    public function edit($id){
        $Solution =  Solutions::findOrFail($id);
        return view('Admin.solutionedit',compact('Solution'));
    }



    public function update($id,Request $request){


        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => "required",
            'SolutionsName' => 'required',
        ]);

        $Portfolio = Solutions::findOrFail($id);
        $Portfolio->BrowserTitle = request('BrowserTitle');
        $Portfolio->SolutionsName = request('SolutionsName');
        $Portfolio->Permalink = request('Permalink');
        $Portfolio->SeoKeyword= request('SeoKeyword');
        $Portfolio->SeoDescription = request('SeoDescription');
        $Portfolio->FeaturedImage1 = request('FeaturedImage1');
        $Portfolio->FeaturedImage2 = request('FeaturedImage2');
        $Portfolio->ImageAltText = request('ImageAltText');
        $Portfolio->ImageTitleText = request('ImageTitleText');
        $Portfolio->SolutionShortText = request('SolutionShortText');
        $Portfolio->SolutionsDetails = request('SolutionsDetails');
        $Portfolio->save();
        return redirect()->to('admin/solutions-manage')->with('message','Solutions Update Successfully');
    }



    public function delete($id){
        $Portfolio = Solutions::find($id);
        $Portfolio->delete();
        return redirect()->to('admin/solutions-manage')->with('message','Events delete Successfully');
    }



    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Portfolio =  Solutions::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/solutions-manage')->with('message','Events Active Successfully');
        }else{
            $Portfolio =  Solutions::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/solutions-manage')->with('message','Events Deactive Successfully');
        }
    }


}
