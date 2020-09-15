<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthorizationCertificate;
class AuthorizationController extends Controller
{
    public function manage(){
        return view('Admin.authorisedcertificatemanage');
    }


    public function add(){
        return view('Admin.authorisedcertificateadd');
    }

    public function store(Request $request){
        $this->validate($request,[
            'FeaturedImage1' => 'required',
            'FeaturedImage2' => 'required',
            'CertificateName' => 'required',
        ]);
        AuthorizationCertificate::create($request->all());
        return redirect()->to('admin/authorised-manage')->with('message','Certificate Added Successfully');
    }

    public function edit($id){
        $Certificate = AuthorizationCertificate::findOrFail($id);
        return view('Admin.authorisedcertificateedit',compact('Certificate'));
    }

    public function update(Request $request,$id){
        $Profile = AuthorizationCertificate::findOrFail($id);
        $Profile->CertificateName = request('CertificateName');
        $Profile->certificatedetails = request('certificatedetails');
        $Profile->FeaturedImage1 = request('FeaturedImage1');
        $Profile->FeaturedImage2 = request('FeaturedImage2');
        $Profile->save();
        return redirect()->to('admin/authorised-manage')->with('message','Certificate Update Successfully');
    }

    public function delete($id){
        $Profile = AuthorizationCertificate::find($id);
        $Profile->delete();
        return redirect()->to('admin/team-member-manage')->with('message','Certificate Delete Successfully');
    }

    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Portfolio =  AuthorizationCertificate::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '1';
            $Portfolio->save();
            return redirect()->to('admin/authorised-manage')->with('message','Certificate Active Successfully');
        }else{
            $Portfolio =  AuthorizationCertificate::findOrFail($portfolioId);
            $Portfolio->ActiveStatus = '0';
            $Portfolio->save();
            return redirect()->to('admin/authorised-manage')->with('message','Certificate Deactive Successfully');
        }
    }

}
