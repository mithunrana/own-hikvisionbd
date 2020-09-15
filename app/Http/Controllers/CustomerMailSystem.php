<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\SiteProfile;
use Session;
use Mail;
use App\Mail\CustomerMailSend;
class CustomerMailSystem extends Controller
{
    public function CustomerMail(){
        return view('Admin.CustomerMailSendingSystem');
    }


    public function ConditionalUserCount(Request $request){
        $customertype = $request->get('customertype');
        $servicetype = $request->get('servicetype');
        $activestatus = $request->get('activestatus');
        if ($customertype || $servicetype || $activestatus ) {
            $MailList = User::where('customertype',$customertype)
                ->Where('servicetype', $servicetype)
                ->Where('activestatus', $activestatus)->get();
            $data = count($MailList);
        } else {
            $MailList = User::all();
            $data = count($MailList);
        }
        echo $data;
    }



    public function CustomerMailSend(Request $request){
        $this->validate($request,[
            'MailDetails' => 'required',
            'MailSubject' => 'required',
            'skipvalue' => 'required',
            'takevalue' => 'required',
        ]);
        $skip = $request->skipvalue;
        $take = $request->takevalue;
        $MailDetails = $request->MailDetails;
        $MailSubject = $request->MailSubject;

        $customertype = request('customertype');
        $servicetype = request('servicetype');
        $activestatus = request('activestatus');
        if ($customertype || $servicetype || $activestatus ) {
            $emails = User::where('customertype',$customertype)
                ->Where('servicetype', $servicetype)
                ->Where('activestatus', $activestatus)->skip($skip)->take($take)->get()->toArray();
        }
        else {
            $emails = User::get()->toArray();
        }
        Mail::to($emails)->send(new CustomerMailSend($MailDetails,$MailSubject));
        Session::flash("success");
        return redirect()->to('admin/customer-mail-send');
    }
}
