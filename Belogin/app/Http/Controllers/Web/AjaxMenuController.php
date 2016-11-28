<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxMenuController extends Controller{
    public function fusion()
    {
      return 1;
        return view('front_web.index');
    }

    public function getView1()
    {
        return view('front_web.hotel');
    }
    public function categorydetails()
    {
      return 1;
      # code...
    }
/*
    public function getView2()
    {
        return view('tutorial.view2');
    }

    public function getView3()
    {
        return view('tutorial.view3');
    }*/
}
