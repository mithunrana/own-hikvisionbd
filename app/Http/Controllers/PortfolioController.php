<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Portfolio;
use App\SiteProfile;
class PortfolioController extends Controller
{
    public function index(){
        $SiteProfile = SiteProfile::first();
        $Portfolios = Portfolio::where('ActiveStatus',1)->orderBy('id', 'DESC')->paginate(9);
        return view('UI.success-history',compact('Portfolios','SiteProfile'));
    }

    public function portfolioView($url){
        $SiteProfile = SiteProfile::first();
        $Portfolio = Portfolio::where('Permalink',$url)->first();
        return view('UI/portfolioview',compact('Portfolio'));
    }



    public function portfolioManage(){
        $Portfolios = Portfolio::orderBy('id', 'DESC')->get();
        return view('Admin/portfoliomanage',compact('Portfolios'));
    }

    public function add(){
        return view('Admin.portfolioadd');
    }


    public function store(Request $request){

        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => 'required',
            'ProjectName' => 'required',
        ]);

        Portfolio::create([
            'BrowserTitle' => $request->BrowserTitle,
            'Permalink' => $request->Permalink,
            'ProjectName' => $request->ProjectName,
            'SeoKeyword'=> $request->SeoKeyword,
            'SeoDescription' => $request->SeoDescription,
            'FeaturedImage1' => $request->FeaturedImage1,
            'FeaturedImage2' => $request->FeaturedImage2,
            'ImageAltText' => $request->ImageAltText,
            'liveurl' => $request->liveurl,
            'ImageTitleText' => $request->ImageTitleText,
            'FeaturedDetails' => $request->FeaturedDetails,
            'ProjectDetails' => $request->ProjectDetails,
        ]);
        return redirect()->to('admin/portfolio-manage')->with('message','Portfolio Added Successfully');

    }


    public function edit($id){
        $Portfolio =  Portfolio::findOrFail($id);
        return view('Admin.portfolioedit',compact('Portfolio'));
    }


    public function update($id,Request $request){

        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => "required",
            'ProjectName' => 'required',
        ]);

        $Portfolio = Portfolio::findOrFail($id);
        $Portfolio->BrowserTitle = request('BrowserTitle');
        $Portfolio->ProjectName = request('ProjectName');
        $Portfolio->liveurl = request('liveurl');
        $Portfolio->Permalink = request('Permalink');
        $Portfolio->SeoKeyword= request('SeoKeyword');
        $Portfolio->SeoDescription = request('SeoDescription');
        $Portfolio->FeaturedImage1 = request('FeaturedImage1');
        $Portfolio->FeaturedImage2 = request('FeaturedImage2');
        $Portfolio->ImageAltText = request('ImageAltText');
        $Portfolio->ImageTitleText = request('ImageTitleText');
        $Portfolio->FeaturedDetails = request('FeaturedDetails');
        $Portfolio->ProjectDetails = request('ProjectDetails');
        $Portfolio->save();
        return redirect()->to('admin/portfolio-manage')->with('message','Portfolio Update Successfully');
    }

    public function delete($id){
        $Portfolio = Portfolio::find($id);
        $Portfolio->delete();
        return redirect()->to('admin/portfolio-manage')->with('message','Portfolio delete Successfully');
    }

    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Portfolio =  Portfolio::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/portfolio-manage')->with('message','Portfolio Active Successfully');
        }else{
            $Portfolio =  Portfolio::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/portfolio-manage')->with('message','Portfolio Deactive Successfully');
        }
    }

}
