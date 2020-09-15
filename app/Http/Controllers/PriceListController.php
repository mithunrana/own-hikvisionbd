<?php

namespace App\Http\Controllers;

use App\PriceList;
use App\SiteProfile;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class PriceListController extends Controller
{

   //----------Manage Section Price List-------------------

    public function manage(){
        return view('Admin/pricelistmanage');
    }

    public function view(){

    }

    public function store(Request $request){
        $this->validate($request,[
            'PriceListName' => 'required',
            'file' => 'required|mimes:pdf|max:10240',
        ]);
        $PriceList = new  PriceList();
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $PriceListPDF= $request->PriceListName.'.'.$extension;
        $file->move('pricelist',$PriceListPDF);
        $PriceList->PriceListName = 'pricelist'."/".$PriceListPDF;
        $PriceList->save();
        return redirect()->to('admin/price-list-manage')->with('message','Price List Save Successfully');
    }


    public function delete($id){
        $PriceList = PriceList::find($id);
        if(File::exists($PriceList->PriceListName)){
            unlink($PriceList->PriceListName);
        }
        $PriceList->delete();
        return redirect()->to('admin/price-list-manage')->with('message','Price List Delete Successfully');
    }



}
