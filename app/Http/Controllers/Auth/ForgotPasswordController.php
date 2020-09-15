<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\BlogTutorial;
use App\Course;
use App\Http\Controllers\Controller;
use App\Mail\RegisterSendMail;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Service;
use Mail;
use App\User;
use App\SiteProfile;
use App\Software;
use App\Mail\UserForgetPasswordToken;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm(){
        $SiteProfile = SiteProfile::first();
        return view('auth.forgetpassword',compact('SiteProfile'));
    }


    public function sendResetLinkEmail(Request $request){
        $User = User::where('email',$request->email)->first();
        if($User!=null){
            $code = mt_rand(100000,999999);
            $User->VerifyCode = $code;
            $User->save();
            Mail::to($request->email)->send(new UserForgetPasswordToken($code));
            return redirect()->to('/password/forget-token-checker')->with(array('message'=>'Verification Code Send Successfully In Your Mail Check Inbox Or Spam','Email'=>$request->email));
        }else{
            return redirect()->to('/password/reset')->with(array('message'=>'Inserted Email Not Registered In Our Website','Email'=>$request->email));
        }

    }


    public function forgetTokenVerificationChecker(){
        $SiteProfile = SiteProfile::first();
        return view('auth.userforgetpassword',compact('SiteProfile'));
    }


    public function forgetTokenVerificationCheck(Request $request){
        $Result = User::where('email',$request->email)->where('VerifyCode',$request->VerifyCode)->first();
        if($Result==null){
            return redirect()->to('password/forget-token-checker')->with(array('message'=>'Email With Verification Code Does Not Match','Email'=>$request->email));
        }else{
            $Profile = User::findOrFail($Result->id);
            $Profile->activestatus = "EndUserActive";
            $Profile->save();
            $request->session()->put('passwordchange',$request->email);
            return redirect()->to('password/new-password-set')->with(array('message'=>'Verification Code Successfully Match Set New Password'));
        }
    }

    public function userNewPassword(){
        $SiteProfile = SiteProfile::first();
        return view('auth.newpasswordset',compact('SiteProfile'));
    }

    public function userNewPasswordSet(Request $request){

        $this->validate($request,[
            'password' => 'required|min:6|confirmed',
        ]);

        if (Session::has('passwordchange')){
            echo $request->password;
            $User = User::where('email',Session::get('passwordchange'))->first();
            $User->password = Hash::make($request->password);
            $User->save();
            Session::forget('passwordchange');
            return redirect()->to('login')->with(array('message'=>'Your Password Change Successfully Please Login'));
        }else{
            return redirect()->to('password/new-password-set')->with(array('message'=>'You Are Not Verified Your For Password Change'));
        }
    }

}
