<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
class EventsController extends Controller
{














    //<<<<<<<<<--Events Manage Section Start-->>>>>>>>>>//

    public function eventsManage(){
        $Events = Events::orderBy('id', 'DESC')->get();
        return view('Admin/eventsmanage',compact('Events'));
    }

    public function add(){
        return view('Admin.eventsadd');
    }


    public function store(Request $request){

        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => 'required|unique:events,Permalink',
            'EnventsName' => 'required',
        ]);

        Events::create([
            'BrowserTitle' => $request->BrowserTitle,
            'Permalink' => $request->Permalink,
            'EnventsName' => $request->EnventsName,
            'EventsDate' => $request->EventsDate,
            'EventsTime' => $request->EventsTime,
            'SeoKeyword'=> $request->SeoKeyword,
            'SeoDescription' => $request->SeoDescription,
            'FeaturedImage1' => $request->FeaturedImage1,
            'FeaturedImage2' => $request->FeaturedImage2,
            'ImageAltText' => $request->ImageAltText,
            'ImageTitleText' => $request->ImageTitleText,
            'FeaturedDetails' => $request->FeaturedDetails,
            'EventsDetails' => $request->EventsDetails,
        ]);
        return redirect()->to('admin/eventsmanage')->with('message','Events Added Successfully');

    }


    public function edit($id){
        $Event =  Events::findOrFail($id);
        return view('Admin.eventsedit',compact('Event'));
    }


    public function update($id,Request $request){

        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => "required|unique:events,Permalink,$id",
            'EnventsName' => 'required',
        ]);

        $Portfolio = Events::findOrFail($id);
        $Portfolio->BrowserTitle = request('BrowserTitle');
        $Portfolio->EnventsName = request('EnventsName');
        $Portfolio->Permalink = request('Permalink');
        $Portfolio->EventsTime = request('EventsTime');
        $Portfolio->EventsDate = request('EventsDate');
        $Portfolio->SeoKeyword= request('SeoKeyword');
        $Portfolio->SeoDescription = request('SeoDescription');
        $Portfolio->FeaturedImage1 = request('FeaturedImage1');
        $Portfolio->FeaturedImage2 = request('FeaturedImage2');
        $Portfolio->ImageAltText = request('ImageAltText');
        $Portfolio->ImageTitleText = request('ImageTitleText');
        $Portfolio->FeaturedDetails = request('FeaturedDetails');
        $Portfolio->EventsDetails = request('EventsDetails');
        $Portfolio->save();
        return redirect()->to('admin/eventsmanage')->with('message','Events Update Successfully');
    }



    public function delete($id){
        $Portfolio = Events::find($id);
        $Portfolio->delete();
        return redirect()->to('admin/eventsmanage')->with('message','Events delete Successfully');
    }

    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Portfolio =  Events::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/eventsmanage')->with('message','Events Active Successfully');
        }else{
            $Portfolio =  Events::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/eventsmanage')->with('message','Events Deactive Successfully');
        }
    }
}
