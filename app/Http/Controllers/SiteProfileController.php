<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteProfile;
class SiteProfileController extends Controller
{
    public function index(){
        $SiteProfile = SiteProfile::first();
        return view('Admin.siteprofile',compact('SiteProfile'));
    }






    public function siteProfileUpdate(Request $request){
        $SiteProfile = SiteProfile::first();
        if(isset($SiteProfile->id)){
            $SiteProfile = SiteProfile::find($SiteProfile->id);
            $SiteProfile->SiteName =$request->SiteName;
            $SiteProfile->EditorPublisher =$request->EditorPublisher;
            $SiteProfile->CorporateAddress =$request->CorporateAddress;
            $SiteProfile->HeadAddress =$request->HeadAddress;
            $SiteProfile->CorporatePhone =$request->CorporatePhone;
            $SiteProfile->Phone1 =$request->Phone1;
            $SiteProfile->phone2 =$request->phone2;
            $SiteProfile->phone3 =$request->phone3;
            $SiteProfile->CorporateEmail =$request->CorporateEmail;
            $SiteProfile->Email2 =$request->Email2;
            $SiteProfile->Email3 =$request->Email3;
            $SiteProfile->MainLogo =$request->MainLogo;
            $SiteProfile->MainLogoTitleText =$request->MainLogoTitleText;
            $SiteProfile->MainLogoAltText =$request->MainLogoAltText;
            $SiteProfile->CopyRightText =$request->CopyRightText;
            $SiteProfile->DomainName =$request->DomainName;
            $SiteProfile->DesignerDeveloperName =$request->DesignerDeveloperName;
            $SiteProfile->DesignerDeveloperDomain =$request->DesignerDeveloperDomain;
            $SiteProfile->ShortDescription =$request->ShortDescription;
            $SiteProfile->GoogleMap =$request->GoogleMap;
            $SiteProfile->save();
            return redirect()->to('admin/siteprofile')->with('message','SiteProfile Update Successfully');
        }
        else{
            $SiteProfile = new  SiteProfile();
            $SiteProfile->SiteName =$request->SiteName;
            $SiteProfile->EditorPublisher =$request->EditorPublisher;
            $SiteProfile->CorporateAddress =$request->CorporateAddress;
            $SiteProfile->HeadAddress =$request->HeadAddress;
            $SiteProfile->CorporatePhone =$request->CorporatePhone;
            $SiteProfile->Phone1 =$request->Phone1;
            $SiteProfile->phone2 =$request->phone2;
            $SiteProfile->phone3 =$request->phone3;
            $SiteProfile->CorporateEmail =$request->CorporateEmail;
            $SiteProfile->Email2 =$request->Email2;
            $SiteProfile->Email3 =$request->Email3;
            $SiteProfile->MainLogo =$request->MainLogo;
            $SiteProfile->MainLogoTitleText =$request->MainLogoTitleText;
            $SiteProfile->MainLogoAltText =$request->MainLogoAltText;
            $SiteProfile->CopyRightText =$request->CopyRightText;
            $SiteProfile->DomainName =$request->DomainName;
            $SiteProfile->DesignerDeveloperName =$request->DesignerDeveloperName;
            $SiteProfile->DesignerDeveloperDomain =$request->DesignerDeveloperDomain;
            $SiteProfile->ShortDescription =$request->ShortDescription;
            $SiteProfile->GoogleMap =$request->GoogleMap;
            $SiteProfile->save();
            return redirect()->to('admin/siteprofile')->with('message','Site Profile Create Successfully');
        }
    }
}
