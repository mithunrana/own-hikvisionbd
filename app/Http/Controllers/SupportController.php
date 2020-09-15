<?php

namespace App\Http\Controllers;

use App\BlogTutorial;
use App\SoftwareList;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $Tutorials = BlogTutorial::where('ActiveStatus',1)->orderBy('id', 'DESC')->paginate(9);
        return view('UI.support',compact('Tutorials'));
    }

    public function softwareManage(){
        return view('Admin.softwaremanage');
    }

    public function softwareAdd(){
        return view('Admin.softwareadd');
    }

    public function softwareStore(Request $request){
        $this->validate($request,[
            'SoftwareName' => 'required',
            'DownloadLink' => 'required',
        ]);

        SoftwareList::create([
            'SoftwareName' => $request->SoftwareName,
            'DownloadLink' => $request->DownloadLink,
        ]);
        return redirect()->to('admin/software-manage')->with('message','Software Added Successfully');
    }

    public function softwareEdit($id){
        $Software =  SoftwareList::findOrFail($id);
        return view('Admin.softwareedit',compact('Software'));
    }

    public function softwareUpdate(Request $request, $id){
        $this->validate($request,[
            'SoftwareName' => 'required',
            'DownloadLink' => 'required',
        ]);
        $Portfolio = SoftwareList::findOrFail($id);
        $Portfolio->SoftwareName = request('SoftwareName');
        $Portfolio->DownloadLink = request('DownloadLink');
        $Portfolio->save();
        return redirect()->to('admin/software-manage')->with('message','Software Update Successfully');
    }

    public function softwareDelete($id){
        $Portfolio = SoftwareList::find($id);
        $Portfolio->delete();
        return redirect()->to('admin/software-manage')->with('message','Software delete Successfully');
    }

    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Portfolio =  SoftwareList::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/software-manage')->with('message','Software Active Successfully');
        }else{
            $Portfolio =  SoftwareList::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/software-manage')->with('message','Software Deactive Successfully');
        }
    }

}
