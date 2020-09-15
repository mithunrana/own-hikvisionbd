<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiscoverProducts;
use App\SiteProfile;
class DiscoverProductsController extends Controller
{
    public function discoverProduct(){
        $DiscoverProducts = DiscoverProducts::orderBy('id', 'DESC')->get();
        return view('Admin.productsdiscovermanage',Compact('DiscoverProducts'));
    }

    public function discoverProductAdd(){
        return view('Admin.productsdiscoveradd');
    }

    public function discoverProductStore(Request $request){
        $this->validate($request,[
            'FeaturedImage' => 'required',
            'DiscoverName' => 'required',
            'PrimaryCategoryId' => 'required',
        ]);
        DiscoverProducts::create($request->all());
        return redirect()->to('admin/discoverproducts')->with('message','Discover Added Successfully');
    }

    public function  productsGridEdit($id){
        $Discover = DiscoverProducts::findOrFail($id);
        return view('Admin.productsdiscoveredit',Compact('Discover'));
    }

    public function discoverProductUpdate(Request $request,$id){
        $this->validate($request,[
            'FeaturedImage' => 'required',
            'DiscoverName' => 'required',
            'PrimaryCategoryId' => 'required',
        ]);
        $ProductsGrid = DiscoverProducts::find($id);
        $ProductsGrid->FeaturedImage  = $request->FeaturedImage;
        $ProductsGrid->DiscoverName  = $request->DiscoverName;
        $ProductsGrid->PrimaryCategoryId = $request->PrimaryCategoryId;
        $ProductsGrid->ImageTitleText  = $request->ImageTitleText;
        $ProductsGrid->ImageAltText  = $request->ImageAltText;
        $ProductsGrid->save();
        return redirect()->to('admin/discoverproducts')->with('message','Discover Update Successfully');
    }

    public function discoverProductActiveDeactive($status,$grid){
        $gridid = $grid;
        $status = $status;
        if($status==0){
            $Portfolio =  DiscoverProducts::findOrFail($gridid);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/discoverproducts')->with('message','Discover Active Successfully');
        }else{
            $Portfolio =  DiscoverProducts::findOrFail($gridid);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/discoverproducts')->with('message','Discover Deactive Successfully');
        }
    }

    public function discoverProductDelete($id){
        $Products = DiscoverProducts::find($id);
        $Products->delete();
        return redirect()->to('admin/discoverproducts')->with('message','Discover Delete Successfully');
    }
}
