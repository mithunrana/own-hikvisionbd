<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuickLiinks;
use App\SocialLinks;
use App\WebSiteTopic;
use App\SiteProfile;
class QuickLinksController extends Controller
{
    public function index(){
        return view('Admin.quicklinks');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:quick_liinks,name',
        ]);

        QuickLiinks::create([
            'name' => $request->name,
            'url' => $request->url,
        ]);
        return redirect()->to('admin/quicklinks')->with('message','QuickLinks Added Successfully');
    }

    public function view($id){
        $QuickLink = QuickLiinks::findOrFail($id);
        return view('Admin.quicklinksview',compact('QuickLink'));
    }

    public function edit($id){
        $QuickLink = QuickLiinks::findOrFail($id);
        return view('Admin.quicklinksedit',compact('QuickLink'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => "required|unique:quick_liinks,name,$id",
        ]);

        $QuickLinks = QuickLiinks::findOrFail($id);
        $QuickLinks->name = request('name');
        $QuickLinks->url = request('url');
        $QuickLinks->save();
        return redirect()->to('admin/quicklinks')->with('message','QuickLinks Update Successfully');
    }

    public function delete($id){
        $QuickLink = QuickLiinks::find($id);
        $QuickLink->delete();
        return redirect()->to('admin/quicklinks')->with('message','QuickLinks Delete Successfully');
    }














    public function socialLinks(){
        return view('Admin.sociallinks');
    }

    public function storeSocialLinks(Request $request){
        $this->validate($request,[
            'visualtext' => 'required',
            'url' => 'required',
            'sitename' => 'required|unique:social_links,sitename',
            'icon' => 'required',
        ]);

        SocialLinks::create([
            'visualtext' => $request->visualtext,
            'url' => $request->url,
            'sitename' => $request->sitename,
            'icon' => $request->icon,
        ]);
        return redirect()->to('admin/sociallinks')->with('message','Social Site Added Successfully');
    }

    public function sociallinksView($id){
        $SocialLinks = SocialLinks::findOrFail($id);
        return view('Admin.sociallinksview',compact('SocialLinks'));
    }

    public function sociallinksEdit($id){
        $SocialLinks = SocialLinks::findOrFail($id);
        return view('Admin.sociallinksedit',compact('SocialLinks'));
    }

    public function sociallinksUpdate(Request $request,$id){
        $this->validate($request,[
            'visualtext' => 'required',
            'url' => 'required',
            'sitename' => "required|unique:social_links,sitename,$id",
            'icon' => 'required',
        ]);

        $SocialLinks = SocialLinks::findOrFail($id);
        $SocialLinks->visualtext = request('visualtext');
        $SocialLinks->url = request('url');
        $SocialLinks->sitename = request('sitename');
        $SocialLinks->icon = request('icon');
        $SocialLinks->save();
        return redirect()->to('admin/sociallinks')->with('message','Social Link Update Successfully');
    }

    public function sociallinksDelete($id){
        $SocialLink = SocialLinks::find($id);
        $SocialLink->delete();
        return redirect()->to('admin/sociallinks')->with('message','SocialLink Delete Successfully');
    }

















    public function topic(){
        return view('Admin.topic');
    }

    public function topicStore(Request $request){
        $this->validate($request,[
            'TopicName' => 'required|unique:web_site_topics,TopicName',
            'url' => 'required',
            'icon' => 'required',
        ]);

        WebSiteTopic::create([
            'TopicName' => $request->TopicName,
            'url' => $request->url,
            'icon' => $request->icon
        ]);
        return redirect()->to('admin/topic')->with('message','Topic Added Successfully');
    }

    public function topicEdit($id){
        $Topic = WebSiteTopic::findOrFail($id);
        return view('Admin.topicedit',compact('Topic'));
    }

    public function topicUpdate(Request $request,$id){
        $this->validate($request,[
            'TopicName' => "required|unique:web_site_topics,TopicName,$id",
            'url' => 'required',
            'icon' => 'required',
        ]);

        $Topic = WebSiteTopic::findOrFail($id);
        $Topic->TopicName = request('TopicName');
        $Topic->url = request('url');
        $Topic->icon = request('icon');
        $Topic->save();
        return redirect()->to('admin/topic')->with('message','Topic Update Successfully');
    }

    public function topicView($id){
        $Topic = WebSiteTopic::findOrFail($id);
        return view('Admin.topicview',compact('Topic'));
    }

    public function topicDelete($id){
        $Topic = WebSiteTopic::find($id);
        $Topic->delete();
        return redirect()->to('admin/topic')->with('message','Topic Delete Successfully');
    }


}
