<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxMenuController extends Controller{

  public function categorydetails()
   {
       return view('front_web.fusion');
   }
   public function getView1()
   {
       return view('front_web.hotel');
   }
}
