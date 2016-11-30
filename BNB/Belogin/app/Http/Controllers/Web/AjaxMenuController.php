<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AjaxMenuController extends Controller{
    public function categorydetails()
    {
        return view('front_web.fusion');
    }

    public function getView1()
    {
        return view('front_web.hotel');
    }
    // fushaion category all fushaion show
    public function fushaionShow($manid){
        // home =1, fashion=2, hotel=3,tourism=4, decorator=5,household=6
        if ($manid==2 || $manid==6 || $manid==5 ) {           
        $fashionList=DB::table('product_add')
            ->join('product_image', 'product_add.product_id', '=', 'product_image.product_id')
            ->where('product_add.main_manu',$manid)
            ->select('product_add.*', 'product_image.*')
            ->get();
            //dd($fashion);
        return view('front_web.fashion',compact('fashionList'));
        }

    }
    // fushion category details show
    public function fushaionDetails($product_id){
        $fashionDeatils=DB::table('product_add')
            ->join('product_image', 'product_add.product_id', '=', 'product_image.product_id')
            ->where('product_add.product_id','=',$product_id)
            ->where('product_image.product_id','=',$product_id)
            ->select('product_add.*', 'product_image.*')
            ->first();
        $relatedProduct=DB::table('product_add')
            ->join('product_image', 'product_add.product_id', '=', 'product_image.product_id')
            ->where('product_add.main_manu','=',$fashionDeatils->main_manu)
            ->where('product_add.main_category','=',$fashionDeatils->main_category)
            ->where('product_add.sub_category','=',$fashionDeatils->sub_category)
            ->select('product_add.*', 'product_image.*')
            ->get();    
            //dd($relatedProduct);
        return view('front_web.fashionDeatils',compact('fashionDeatils','relatedProduct'));
    }

    // hotel category
    public function hotelCategory(){
        $hotelCategory=DB::table('hotel_manage')
            ->join('hotel_image', 'hotel_manage.room_id', '=', 'hotel_image.room_id')
            ->select('hotel_manage.*', 'hotel_image.*')
            ->get();
            //dd($hotelCategory); 
        return view('front_web.hotelCategory',compact('hotelCategory'));    
    }

    // company profile
    public function companyProfile($manid){
        //return $manid;
        $profile=DB::table('product_add')
            ->join('product_image', 'product_add.product_id', '=', 'product_image.product_id')
            ->where('product_add.marchent_id','=',$manid)
            ->select('product_add.*', 'product_image.*')
            ->get();
            //dd($profile);
        return view('front_web.companyProfile',compact('profile'));
    }



    // hotel category profile show
    public function hotelcategoryProfile($room_id){
        return view('front_web.hotelCategoryProfile');
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
