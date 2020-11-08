<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use Illuminate\Http\Request;
use App\BlogTutorial;
use App\SiteProfile;
class BlogController extends Controller
{


    public function index(){
        $Categories = BlogCategory::all();
        $count = BlogTutorial::count();
        if($count<3){
            $skip = 0;
        }else{
            $skip = 3;
        }
        $gettotal = $count-$skip;
        $SiteProfile = SiteProfile::first();
        $HighLights = BlogTutorial::where('ActiveStatus',1)->orderBy('id', 'DESC')->skip(0)->take(1)->first();
        $RecentTwo = BlogTutorial::where('ActiveStatus',1)->orderBy('id', 'DESC')->skip(1)->take(2)->get();
        $Tutorials =  BlogTutorial::where('ActiveStatus',1)->orderBy('id', 'DESC')->skip(3)->take($gettotal)->get();
        return view('UI.tutorialmain',compact('Categories','HighLights','Tutorials','RecentTwo','SiteProfile'));
    }

    public function blogByURL($url){
        $Categories = BlogCategory::all();
        $SiteProfile = SiteProfile::first();
        $HighLights =  BlogTutorial::where('Permalink',$url)->first();
        $Tutorials = BlogTutorial::where('ActiveStatus',1)->orderBy('id', 'DESC')->paginate(9);
        return view('UI.support-view',compact('Categories','HighLights','Tutorials','SiteProfile'));
    }

    public function blogByCategory($url){
        $Categories = BlogCategory::all();
        $SiteProfile = SiteProfile::first();
        $HighLights =  BlogTutorial::where('Permalink',$url)->first();
        $Category = BlogCategory::where('CategoryUrl',$url)->first();
        $Tutorials =  BlogTutorial::where('Category',$Category->id)->where('ActiveStatus',1)->orderBy('id', 'DESC')->get();
        $RecentTwo = BlogTutorial::where('ActiveStatus',1)->orderBy('id', 'DESC')->skip(0)->take(2)->get();
        return view('UI.tutorialbycategory',compact('Categories','Category','Tutorials','SiteProfile'));
    }







    public function blogCategory(){
        $Categories = BlogCategory::orderBy('id', 'DESC')->get();
        return view('Admin.blogcategory',compact('Categories'));
    }

    public function storeCategory(Request $request){
        $this->validate($request,[
            'CategoryName' => 'required',
            'CategoryUrl' => 'required|unique:blog_categories,CategoryUrl',
            'CategoryBrowserTitle' => 'required',
            'CategorySeoKeyword' => 'required',
            'CategorySeoDescription' => 'required',
        ]);

        BlogCategory::create([
            'CategoryName' => $request->CategoryName,
            'CategoryUrl' => $request->CategoryUrl,
            'CategoryBrowserTitle' => $request->CategoryBrowserTitle,
            'CategorySeoKeyword' => $request->CategorySeoKeyword,
            'CategorySeoDescription'=> $request->CategorySeoDescription,
        ]);
        return redirect()->to('admin/blog-category')->with('message','Category Added Successfully');
    }

    public function viewBlogCategory($id){
        $Categories = BlogCategory::all();
        $Category = BlogCategory::findOrFail($id);
        return view('Admin.blogCategoryView',compact('Category','Categories'));
    }

    public function editCategory($id){
        $Categories = BlogCategory::all();
        $Category = BlogCategory::findOrFail($id);
        return view('Admin.blogcategoryedit',compact('Category','Categories'));
    }

    public function updateCategory($id,Request $request){

        $this->validate($request,[
            'CategoryName' => 'required',
            'CategoryUrl' => "required|unique:blog_categories,CategoryUrl,$id",
            'CategoryBrowserTitle' => 'required',
            'CategorySeoKeyword' => 'required',
            'CategorySeoDescription' => 'required',
        ]);

        $BlogCategory = BlogCategory::findOrFail($id);
        $BlogCategory->CategoryName = request('CategoryName');
        $BlogCategory->CategoryUrl = request('CategoryUrl');
        $BlogCategory->CategoryBrowserTitle = request('CategoryBrowserTitle');
        $BlogCategory->CategorySeoKeyword= request('CategorySeoKeyword');
        $BlogCategory->CategorySeoDescription = request('CategorySeoDescription');
        $BlogCategory->save();

        return redirect()->to('admin/blog-category')->with('message','Category Update Successfully');
    }

    public function deleteCategory(){

    }





    public function manage(){
        $Blogs = BlogTutorial::orderBy('id', 'DESC')->get();
        return view('Admin.blogmanage',compact('Blogs'));
    }

    public function add(){
        return view('Admin.blogadd');
    }

    public function store(Request $request){
        $this->validate($request,[
            'VideoURL' => 'URL',
            'FeaturedImage' => 'required',
            'Category' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => 'required|unique:blog_tutorials,Permalink',
            'BlogName' => 'required',
            'EmbeddedVideo' => 'required',
            'BlogDetails' => 'required',
        ]);

        //$userid = auth()->id();
        $userid = 1;
        BlogTutorial::create([
            'Category' => $request->Category,
            'BrowserTitle' => $request->BrowserTitle,
            'Permalink' => $request->Permalink,
            'BlogName' => $request->BlogName,
            'SeoKeyword'=> $request->SeoKeyword,
            'SeoDescription' => $request->SeoDescription,
            'FeaturedImage' => $request->FeaturedImage,
            'ImageAltText' => $request->ImageAltText,
            'ImageTitleText' => $request->ImageTitleText,
            'VideoURL' => $request->VideoURL,
            'EmbeddedVideo' => $request->EmbeddedVideo,
            'StructuredData' => $request->StructuredData,
            'BlogDetails' => $request->BlogDetails,
            'blog_poster' => $userid
        ]);
        return redirect()->to('admin/blog-manage')->with('message','Blog Added Successfully');
    }


    public function edit($id){
        $BlogTutorial = BlogTutorial::findOrFail($id);
        return view('Admin.blogedit',compact('BlogTutorial'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'VideoURL' => 'URL',
            'FeaturedImage' => 'required',
            'Category' => 'required',
            'BrowserTitle' => 'required',
            'Permalink' => "required|unique:blog_tutorials,Permalink,$id",
            'BlogName' => 'required',
            'EmbeddedVideo' => 'required',
            'BlogDetails' => 'required',
        ]);

        $Blog = BlogTutorial::findOrFail($id);
        $Blog->Category = request('Category');
        $Blog->BrowserTitle = request('BrowserTitle');
        $Blog->Permalink = request('Permalink');
        $Blog->BlogName= request('BlogName');
        $Blog->SeoKeyword = request('SeoKeyword');
        $Blog->SeoDescription = request('SeoDescription');
        $Blog->FeaturedImage = request('FeaturedImage');
        $Blog->ImageAltText = request('ImageAltText');
        $Blog->ImageTitleText = request('ImageTitleText');
        $Blog->VideoURL = request('VideoURL');
        $Blog->EmbeddedVideo = request('EmbeddedVideo');
        $Blog->StructuredData = request('StructuredData');
        $Blog->BlogDetails = request('BlogDetails');
        $Blog->save();
        return redirect()->to('admin/blog-manage')->with('message','Blog Update Successfully');
    }

    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Blog =  BlogTutorial::findOrFail($portfolioId);
            $CategoryId = $Blog->Category;
            if($CategoryId==0){
                return redirect()->to('admin/blog-manage')->with('message','Please Set Category Before Active ');
            }else {
                $Blog = BlogTutorial::findOrFail($portfolioId);
                $Blog->ActiveStatus = '1';
                $Blog->save();
                return redirect()->to('admin/blog-manage')->with('message', 'Blog Active Successfully');
            }
        }else{
            $Blog =  BlogTutorial::findOrFail($portfolioId);
            $Blog->ActiveStatus = '0';
            $Blog->save();
            return redirect()->to('admin/blog-manage')->with('message','Blog Deactive Successfully');
        }
    }

    public function delete($id){
        $Blog = BlogTutorial::find($id);
        $Blog->delete();
        return redirect()->to('admin/blog-manage')->with('message','Blog delete Successfully');
    }

}
