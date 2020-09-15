<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUIController extends Controller
{



    public function index(){
        return view('UI.index');
    }



    public function sucessHistory(){
        return view('UI.success-history');
    }

    public function megaTrading(){
        return view('UI.about');
    }

    public function career(){
        return view('UI.career');
    }


    public function contact(){
        return view('UI.contact');
    }


    public function importer(){
        return view('UI.hikvision-importer');
    }


    public function distributor(){
        return view('UI.hikvision-distributor');
    }

    public function login(){
        return view('UI.login');
    }


}
