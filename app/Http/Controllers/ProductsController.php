<?php
namespace App\Http\Controllers;
use App\CCTVBrand;
use App\ProductsBrand;
use App\ProductsPrimaryCategory;
use App\ProductsSecondaryCategory;
use App\Products;
use App\CctvCameraMegaPixel;
use App\DiscoverProducts;
use App\SiteProfile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class ProductsController extends Controller
{
    public function index(){
        $SiteProfile = SiteProfile::first();
        $LatestProduct = Products::where('ActiveStatus',1)->orderBy('id', 'DESC')->skip(0)->take(8)->get();
        $DiscoverProducts = DiscoverProducts::where('ActiveStatus',1)->orderBy('id', 'DESC')->get();
        return view('UI.productsmain',compact('LatestProduct','DiscoverProducts','SiteProfile'));
    }

    public function productsmain(){
        $SiteProfile = SiteProfile::first();
        $MegaPixel = CctvCameraMegaPixel::get();
        $Products = Products::where('ActiveStatus',1)->orderBy('id', 'DESC')->paginate(21);
        $Brands = ProductsBrand::all();
        $Categories = ProductsPrimaryCategory::all();
        return view('UI.productsmain',compact('Categories','Brands','Products','MegaPixel','Products','SiteProfile'));
    }

    public function cctvPrimaryCategory($url){
        $SiteProfile = SiteProfile::first();
        $PrimaryCategory = ProductsPrimaryCategory::where('CategoryUrl',$url)->first();
        $SecondaryCategory = ProductsSecondaryCategory::select('id')->where('PrimaryCategoryId',$PrimaryCategory->id)->get()->toArray();
        $Products = Products::where('ActiveStatus',1)->whereIn('Category',$SecondaryCategory)->orderBy('id', 'DESC')->paginate(21);
        $MegaPixel = CctvCameraMegaPixel::get();
        $Brands = ProductsBrand::all();
        $Categories = ProductsPrimaryCategory::all();
        return view('UI.productsbyPrimarycategory',compact('Categories','Brands','Products','MegaPixel','Products','PrimaryCategory','SiteProfile'));
        //print_r($SecondaryCategory);
    }

    public function cctvSecondaryCategory($url){
        $SiteProfile = SiteProfile::first();
        $Category = ProductsSecondaryCategory::where('CategoryUrl',$url)->first();
        $Products = Products::where('ActiveStatus',1)->where('Category',$Category->id)->orderBy('id', 'DESC')->paginate(21);
        $MegaPixel = CctvCameraMegaPixel::get();
        $Brands = ProductsBrand::all();
        $Categories = ProductsPrimaryCategory::all();
        return view('UI.productbysecondarycategory',compact('Categories','Brands','Products','MegaPixel','Products','Category','SiteProfile'));
    }

    public function byBrand($url){
        $Brand = ProductsBrand::where('BrandUrl',$url)->first();
        $Products = Products::where('ActiveStatus',1)->where('BrandId',$Brand->id)->orderBy('id', 'DESC')->paginate(21);
        $MegaPixel = CctvCameraMegaPixel::get();
        $Brands = ProductsBrand::all();
        $Categories = ProductsPrimaryCategory::all();
        return view('UI.productsbybrand',compact('Categories','Brands','Products','MegaPixel','Products','Brand'));
    }

    public function byMegaPixel($url){
        $CurrentPixel = CctvCameraMegaPixel::where('MegaPixelUrl',$url)->first();
        $Products = Products::where('ActiveStatus',1)->where('MegaPixelId',$CurrentPixel->id)->orderBy('id', 'DESC')->paginate(21);
        $MegaPixel = CctvCameraMegaPixel::get();
        $Brands = ProductsBrand::all();
        $Categories = ProductsPrimaryCategory::all();
        return view('UI.productsbymegapixel',compact('Categories','Brands','Products','MegaPixel','Products','CurrentPixel'));
    }

    public function bySearch(Request $request){
        $Keyword = $request->keyword;
        $Result = Products::where('ActiveStatus',1)->Where('Model', 'like', '%' .$Keyword. '%')->get();
        if($Result->count() <1 ){
            $Result = Products::where('ActiveStatus',1)->Where('Name', 'like', '%' .$Keyword. '%')->get();
        }
        $Products = $Result;
        $MegaPixel = CctvCameraMegaPixel::get();
        $Brands = ProductsBrand::all();
        $Categories = ProductsPrimaryCategory::all();
        return view('UI.productsbysearch',compact('Categories','Brands','Products','MegaPixel','Products'));
    }


    public function view($url){
        $SiteProfile = SiteProfile::first();
        $Product = Products::where('Permalink',$url)->first();
        $MegaPixel = CctvCameraMegaPixel::get();
        $Products = Products::where('ActiveStatus',1)->orderBy('id', 'DESC')->get();
        $Brands = ProductsBrand::all();
        $Categories = ProductsPrimaryCategory::all();
        return view('UI.productsview',compact('Categories','Brands','Products','MegaPixel','Products','Product','SiteProfile'));
    }




































    //---------<<<<<<<<<<<<<<<<<<<<<<<-----------Management Related Work Bellow Here------------------------>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


    public function manage(){
        $Products = Products::orderBy('id', 'DESC')->get();
        return view('Admin.productsmanage',Compact('Products'));
    }




    public function add(){
        return view('Admin.productsadd');
    }




    public function store(Request $request){
        $this->validate($request,[
            'Datasheet' => 'mimes:pdf|max:2048',
            'Model' => 'required|unique:products,Model',
            'Name' => 'required',
            'Permalink' => "required|unique:products,Permalink",
            'BrandId' => 'required',
            'Category' => 'required',
            'RegularPrice'=> 'numeric',
            'CurrentPrice'=> 'numeric',
            'FeaturedImage' => 'required',
        ]);

        $Products = new  Products();
        if($request->hasFile('Datasheet')){
            $file = $request->file('Datasheet');
            $extension = $file->getClientOriginalExtension();
            $Datasheet= $request->Model.'.'.$extension;
            $file->move('productsdatasheet',$Datasheet);
            $Products->Model = $request->Model;
            $Products->Name = $request->Name;
            $Products->Datasheet = 'productsdatasheet'."/".$Datasheet;
            $Products->ProductShortDescription = $request->ProductShortDescription;
            $Products->Specification = $request->Specification;
            $Products->FeaturedImage = $request->FeaturedImage;
            $Products->Permalink = $request->Permalink;
            $Products->Category = $request->Category;
            $Products->SeoHeading = $request->SeoHeading;
            $Products->MegaPixelId = $request->MegaPixelId;
            $Products->BrandId = $request->BrandId;
            $Products->ProductsType = $request->ProductsType;
            $Products->BrowserTitle = $request->BrowserTitle;
            $Products->SeoKeyword = $request->SeoKeyword;
            $Products->SeoDescription = $request->SeoDescription;
            $Products->ImageAltText = $request->ImageAltText;
            $Products->ImageTitleText = $request->ImageTitleText;
            $Products->StructuredData = $request->StructuredData;
            $Products->RegularPrice = $request->RegularPrice;
            $Products->CurrentPrice = $request->CurrentPrice;
            $Products->PartnerPrice = $request->PartnerPrice;
            $Products->EmbeddedCode = $request->EmbeddedCode;
            $Products->OptionalContent = $request->OptionalContent;
            $Products->save();
        }else{
            $Products->Model = $request->Model;
            $Products->Name = $request->Name;
            $Products->Datasheet = '#';
            $Products->ProductShortDescription = $request->ProductShortDescription;
            $Products->Specification = $request->Specification;
            $Products->FeaturedImage = $request->FeaturedImage;
            $Products->Permalink = $request->Permalink;
            $Products->Category = $request->Category;
            $Products->SeoHeading = $request->SeoHeading;
            $Products->MegaPixelId = $request->MegaPixelId;
            $Products->BrandId = $request->BrandId;
            $Products->ProductsType = $request->ProductsType;
            $Products->BrowserTitle = $request->BrowserTitle;
            $Products->SeoKeyword = $request->SeoKeyword;
            $Products->SeoDescription = $request->SeoDescription;
            $Products->ImageAltText = $request->ImageAltText;
            $Products->ImageTitleText = $request->ImageTitleText;
            $Products->StructuredData = $request->StructuredData;
            $Products->RegularPrice = $request->RegularPrice;
            $Products->CurrentPrice = $request->CurrentPrice;
            $Products->PartnerPrice = $request->PartnerPrice;
            $Products->EmbeddedCode = $request->EmbeddedCode;
            $Products->OptionalContent = $request->OptionalContent;
            $Products->save();
        }
        return redirect()->to('admin/products-manage')->with('message','Blog Added Successfully');
    }


    public function edit($id){
        $Products = Products::findOrFail($id);
        return view('Admin.productsedit',compact('Products'));
    }


    public function update(Request $request,$id){
        $this->validate($request,[
            'Datasheet' => 'mimes:pdf|max:2048',
            'Model' => "required|unique:products,Model,$id",
            'Name' => 'required',
            'Permalink' => "required|unique:products,Permalink,$id",
            'BrandId' => 'required',
            'Category' => 'required',
            'FeaturedImage' => 'required',
        ]);

        $Products = Products::findOrFail($id);
        if($Products->Model == request('Model')){
            if($request->hasFile('Datasheet')){
                if(File::exists($Products->Datasheet)){
                    unlink($Products->Datasheet);
                    $file = $request->file('Datasheet');
                    $extension = $file->getClientOriginalExtension();
                    $Datasheet= $request->Model.'.'.$extension;
                    $file->move('productsdatasheet',$Datasheet);
                    $Products->Datasheet = 'productsdatasheet'."/".$Datasheet;
                }else{
                    $file = $request->file('Datasheet');
                    $extension = $file->getClientOriginalExtension();
                    $Datasheet= $request->Model.'.'.$extension;
                    $file->move('productsdatasheet',$Datasheet);
                    $Products->Datasheet = 'productsdatasheet'."/".$Datasheet;
                }
            }
        }else{
            if($request->hasFile('Datasheet')){
                if(File::exists($Products->Datasheet)){
                    unlink($Products->Datasheet);
                    $file = $request->file('Datasheet');
                    $extension = $file->getClientOriginalExtension();
                    $Datasheet= $request->Model.'.'.$extension;
                    $file->move('productsdatasheet',$Datasheet);
                    $Products->Datasheet = 'productsdatasheet'."/".$Datasheet;
                    $Products->Model = request('Model');
                }else{
                    $file = $request->file('Datasheet');
                    $extension = $file->getClientOriginalExtension();
                    $Datasheet= $request->Model.'.'.$extension;
                    $file->move('productsdatasheet',$Datasheet);
                    $Products->Model = request('Model');
                    $Products->Datasheet = 'productsdatasheet'."/".$Datasheet;
                }
            }else{
                if(File::exists($Products->Datasheet)){
                    File::move($Products->Datasheet,'productsdatasheet'."/".$request->Model.'.pdf');
                    $Products->Datasheet = 'productsdatasheet'."/".$request->Model;
                    $Products->Model = request('Model');
                }else{
                    $Products->Model = request('Model');
                    $Products->Datasheet = '#';
                }
            }
        }
        $Products->Name = request('Name');
        $Products->Permalink = request('Permalink');
        $Products->BrandId = request('BrandId');
        $Products->FeaturedImage = request('FeaturedImage');
        $Products->ProductShortDescription = request('ProductShortDescription');
        $Products->Specification = request('Specification');
        $Products->Permalink = request('Permalink');
        $Products->Category = request('Category');
        $Products->SeoHeading = request('SeoHeading');
        $Products->MegaPixelId = request('MegaPixelId');
        $Products->BrandId = request('BrandId');
        $Products->ProductsType = request('ProductsType');
        $Products->BrowserTitle = request('BrowserTitle');
        $Products->SeoKeyword = request('SeoKeyword');
        $Products->SeoDescription = request('SeoDescription');
        $Products->ImageAltText = request('ImageAltText');
        $Products->ImageTitleText = request('ImageTitleText');
        $Products->StructuredData = request('StructuredData');
        $Products->RegularPrice = request('RegularPrice');
        $Products->CurrentPrice = request('CurrentPrice');
        $Products->PartnerPrice = request('PartnerPrice');
        $Products->EmbeddedCode = request('EmbeddedCode');
        $Products->OptionalContent = request('OptionalContent');
        $Products->save();
        return redirect()->to('admin/products-manage')->with('message','Products Update Successfully');
    }


    public function delete($id){
        $Products = Products::find($id);
        if(File::exists($Products->Datasheet)){
            unlink($Products->Datasheet);
        }
        $Products->delete();
        return redirect()->to('admin/products-manage')->with('message','Products Delete Successfully');
    }


    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Products =  Products::findOrFail($portfolioId);
            $CategoryId = $Products->Category;
            if($CategoryId==0){
                return redirect()->to('admin/products-manage')->with('message','Please Set Category Before Active ');
            }else {
                $Blog = Products::findOrFail($portfolioId);
                $Blog->ActiveStatus = '1';
                $Blog->save();
                return redirect()->to('admin/products-manage')->with('message', 'Products Active Successfully');
            }
        }else{
            $Blog =  Products::findOrFail($portfolioId);
            $Blog->ActiveStatus = '0';
            $Blog->save();
            return redirect()->to('admin/products-manage')->with('message','Products Deactive Successfully');
        }
    }

    public function priceActiveDeactive($status,$productId){
        $productid = $productId;
        $status = $status;
        if($status==0){
        $Product = Products::findOrFail($productid);
        $Product->PriceStatus = '1';
        $Product->save();
        return redirect()->to('admin/products-manage')->with('message', 'Products Price Active Successfully');
        }else{
        $Product =  Products::findOrFail($productid);
        $Product->PriceStatus = '0';
        $Product->save();
        return redirect()->to('admin/products-manage')->with('message','Products Price Deactive Successfully');
        }
    }



























    public function productsBrand(){
        return view('Admin.productsbrand');
    }

    public function brandStore(Request $request){
        $this->validate($request,[
            'BrandName' => 'required',
            'BrandUrl' => 'required|unique:products_brands,BrandUrl',
            'BrandBrowserTitle' => 'required',
            'BrandSeoKeyword' => 'required',
            'BrandSeoDescription' => 'required',
            'FeaturedImage' => 'required',
        ]);
        ProductsBrand::create($request->all());
        return redirect()->to('admin/products-brand')->with('message','Brand Added Successfully');
    }

    public function brandEdit($id){
        $Brand = ProductsBrand::findOrFail($id);
        return view('Admin.productsbrandedit',compact('Brand'));
    }

    public function brandView($id){
        $Brand = ProductsBrand::findOrFail($id);
        return view('Admin.productsbrandview',compact('Brand'));
    }

    public function brandUpdate(Request $request,$id){
        $this->validate($request,[
            'BrandName' => 'required',
            'BrandUrl' => "required|unique:products_brands,BrandUrl,$id",
            'BrandBrowserTitle' => 'required',
            'BrandSeoKeyword' => 'required',
            'BrandSeoDescription' => 'required',
        ]);
        $Brand = ProductsBrand::findOrFail($id);
        $Brand->BrandName = request('BrandName');
        $Brand->BrandUrl = request('BrandUrl');
        $Brand->SeoHeading = request('SeoHeading');
        $Brand->BrandDetails = request('BrandDetails');
        $Brand->BrandBrowserTitle = request('BrandBrowserTitle');
        $Brand->BrandSeoKeyword = request('BrandSeoKeyword');
        $Brand->BrandSeoDescription = request('BrandSeoDescription');
        $Brand->FeaturedImage = request('FeaturedImage');
        $Brand->ImageAltText = request('ImageAltText');
        $Brand->ImageTitleText = request('ImageTitleText');
        $Brand->save();
        return redirect()->to('admin/products-brand')->with('message','Brand Update Successfully');
    }


    public function brandDelete($id){
        Products::where('BrandId',$id)->update(['BrandId'=>null]);
        $Products = ProductsBrand::find($id);
        $Products->delete();
        return redirect()->to('admin/products-brand')->with('message','Brands Delete Successfully');
    }


    public function cctvBrand(){
        return view('Admin.cctvbrand');
    }

    public function cctvBrandStore(Request $request){
        $this->validate($request,[
            'brandDisplayName' => 'required',
            'brandID' => 'required|unique:c_c_t_v_brands,brandID',
        ]);
        CCTVBrand::create($request->all());
        return redirect()->to('admin/cctv-brand')->with('message','CCTV Brand Added Successfully');
    }

    public function cctvBrandEdit($id){
        $BrandDetail = CCTVBrand::findOrFail($id);
        return view('Admin.cctvbrandedit',compact('BrandDetail'));
    }

    public function cctvBrandUpdate(Request $request,$id){
        $this->validate($request,[
            'brandDisplayName' => 'required',
            'brandID' => "required|unique:c_c_t_v_brands,brandID,$id"
        ]);
        $CCTVBrand = CCTVBrand::findOrFail($id);
        $CCTVBrand->brandDisplayName = request('brandDisplayName');
        $CCTVBrand->brandID = request('brandID');
        $CCTVBrand->save();
        return redirect()->to('admin/cctv-brand')->with('message','CCTV Brand Update Successfully');
    }

    public function cctvBrandDelete($id){
        $CCTVBrand = CCTVBrand::find($id);
        $CCTVBrand->delete();
        return redirect()->to('admin/cctv-brand')->with('message','CCTV Brand Delete Successfully');
    }



















    public function primaryCategoryBySecondary(Request $request){
       $primaryCategory = $request->get('CategoryId');
       $SecondaryCategories = ProductsSecondaryCategory::where('PrimaryCategoryId',$primaryCategory)->get();
       $output = '<option value="" selected disabled>=============Select Seconadry Category===========</option>';
        foreach($SecondaryCategories as $Category){
            $output .= '
             <option value="'.$Category->id.'">'.$Category->CategoryName.'</option>
            ';
        }
        $data = array(
            'totalcategory'  => $output
        );
        echo json_encode($data);
    }


    public function primaryCategoryManage(){
        $Categories = ProductsPrimaryCategory::all();
        return view('Admin.productsprimarycategory',Compact('Categories'));
    }

    public function primaryCategoryStore(Request $request){
        $this->validate($request,[
            'CategoryName' => 'required',
            'CategoryUrl' => "required|unique:products_primary_categories,CategoryUrl",
            'CategoryBrowserTitle' => 'required',
            'CategorySeoKeyword' => 'required',
            'CategorySeoDescription' => 'required',
        ]);

        ProductsPrimaryCategory::create([
            'CategoryName' => $request->CategoryName,
            'CategoryUrl' => $request->CategoryUrl,
            'CategoryBrowserTitle' => $request->CategoryBrowserTitle,
            'SeoHeading' => $request->SeoHeading,
            'CategoryDetails' => $request->CategoryDetails,
            'CategorySeoKeyword' => $request->CategorySeoKeyword,
            'CategorySeoDescription'=> $request->CategorySeoDescription,
        ]);
        return redirect()->to('admin/products-primary-category')->with('message','Category Added Successfully');
    }

    public function primaryCategoryEdit($id){
        $Category = ProductsPrimaryCategory::where('id',$id)->first();
        return view('Admin.productsprimarycategoryedit',Compact('Category'));
    }

    public function updateProductsPrimaryCategory(Request $request,$id){
        $this->validate($request,[
            'CategoryName' => 'required',
            'CategoryUrl' => "required|unique:products_primary_categories,CategoryUrl,$id",
            'CategoryBrowserTitle' => 'required',
            'CategorySeoKeyword' => 'required',
            'CategorySeoDescription' => 'required',
        ]);
        $PrimaryCategory = ProductsPrimaryCategory::findOrFail($id);
        $PrimaryCategory->CategoryName = request('CategoryName');
        $PrimaryCategory->CategoryUrl = request('CategoryUrl');
        $PrimaryCategory->CategoryBrowserTitle = request('CategoryBrowserTitle');
        $PrimaryCategory->SeoHeading = request('SeoHeading');
        $PrimaryCategory->CategoryDetails = request('CategoryDetails');
        $PrimaryCategory->CategorySeoKeyword = request('CategorySeoKeyword');
        $PrimaryCategory->CategorySeoDescription = request('CategorySeoDescription');
        $PrimaryCategory->save();
        return redirect()->to('admin/products-primary-category')->with('message','Category Update Successfully');
    }

    public function viewProductsPrimaryCategory($id){
        $Category = ProductsPrimaryCategory::where('id',$id)->first();
        return view('Admin.productsprimarycategoryview',Compact('Category'));
    }


    public function primaryCategoryDelete($id){
        $SecondaryCategory = ProductsSecondaryCategory::select('id')->where('PrimaryCategoryId',$id)->get()->toArray();
        $Products = Products::select('id')->whereIn('Category',$SecondaryCategory)->get()->toArray();
        Products::whereIn('id', $Products)->update(['ActiveStatus' => '0','Category' => '0']);
        ProductsSecondaryCategory::where('PrimaryCategoryId', $id)->delete();
        $PrimaryCategory = ProductsPrimaryCategory::find($id);
        DiscoverProducts::where('PrimaryCategoryId',$id)->delete();
        $PrimaryCategory->delete();
        return redirect()->to('admin/products-primary-category')->with('message','Category Delete Successfully');
    }
















    public function productsSecondaryCategoryManage(){
        $Categories = ProductsSecondaryCategory::all();
        return view('Admin.productssecondarycategory',Compact('Categories'));
    }

    public function secondaryCategoryStore(Request $request){
        $this->validate($request,[
            'PrimaryCategoryId' => 'required',
            'CategoryName' => 'required',
            'CategoryUrl' => "required|unique:products_secondary_categories,CategoryUrl",
            'CategoryBrowserTitle' => 'required',
            'CategorySeoKeyword' => 'required',
            'CategorySeoDescription' => 'required',
        ]);

        ProductsSecondaryCategory::create([
            'PrimaryCategoryId' => $request->PrimaryCategoryId,
            'CategoryName' => $request->CategoryName,
            'CategoryUrl' => $request->CategoryUrl,
            'SeoHeading' => $request->SeoHeading,
            'CategoryDetails' => $request->CategoryDetails,
            'CategoryBrowserTitle' => $request->CategoryBrowserTitle,
            'CategorySeoKeyword' => $request->CategorySeoKeyword,
            'CategorySeoDescription'=> $request->CategorySeoDescription,
        ]);
        return redirect()->to('admin/products-secondary-category')->with('message','Secondary Category Added Successfully');
    }

    public function productsSecondaryEdit($id){
        $Category = ProductsSecondaryCategory::findOrFail($id);
        return view('Admin.productssecondarycategoryedit',Compact('Category'));
    }

    public function secondaryCategoryUpdate(Request $request,$id){
        $this->validate($request,[
            'PrimaryCategoryId' => 'required',
            'CategoryName' => 'required',
            'CategoryUrl' => "required|unique:products_secondary_categories,CategoryUrl,$id",
            'CategoryBrowserTitle' => 'required',
            'CategorySeoKeyword' => 'required',
            'CategorySeoDescription' => 'required',
        ]);

        $SecondaryCategory = ProductsSecondaryCategory::findOrFail($id);
        $SecondaryCategory->PrimaryCategoryId = request('PrimaryCategoryId');
        $SecondaryCategory->CategoryName = request('CategoryName');
        $SecondaryCategory->CategoryUrl = request('CategoryUrl');
        $SecondaryCategory->CategoryBrowserTitle = request('CategoryBrowserTitle');
        $SecondaryCategory->SeoHeading = request('SeoHeading');
        $SecondaryCategory->CategoryDetails = request('CategoryDetails');
        $SecondaryCategory->CategorySeoKeyword = request('CategorySeoKeyword');
        $SecondaryCategory->CategorySeoDescription = request('CategorySeoDescription');
        $SecondaryCategory->save();
        return redirect()->to('admin/products-secondary-category')->with('message','Secondary Category Update Successfully');
    }

    public function secondaryCategoryView($id){
        $Category = ProductsSecondaryCategory::findOrFail($id);
        return view('Admin.productssecondarycategoryview',Compact('Category'));
    }

    public function secondaryCategoryDelete($id){
        Products::where('Category', $id)->update(['ActiveStatus' => '0','Category' => '0']);
        ProductsSecondaryCategory::where('id', $id)->delete();
        return redirect()->to('admin/products-secondary-category')->with('message','Category Delete Successfully');
    }

}


