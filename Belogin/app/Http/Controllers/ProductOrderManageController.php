<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Model\ProductOrderManageModel;
use App\Model\CategoryModel;
use Session;
use Input;
use DB;
use Auth;

class ProductOrderManageController extends Controller
{
public function __construct(){
      $this->middleware('auth');
  }
    // Order product show data table by obydul
    public function productOrderManageTable(){
        if(Auth::check()){
            if(Auth::user()->user == 1 || Auth::user()->user == 2) {
                $orderListShow = ProductOrderManageModel::where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->get();
                $bnborderListShow = ProductOrderManageModel::orderBy('id', 'DESC')->get();
                return view('backend.product.productOrderManage', compact('orderListShow', 'bnborderListShow'));
            }
            else{
                Session::flash('error', 'Sorry access denied!');
                return redirect::to('home');
            }
    }
    else{
        Session::flash('error', 'Please try again later...');
        return redirect::to('/');
    }
    }

    // order product status manage by obydul
    public function productOrderStatus(Request $request,$id){
        if(Auth::check()){
            if(Auth::user()->user == 1 ) {
                $productAvailable = ProductOrderManageModel::where('id', $id)->update(['status' => $request->get('productOrderStatus')]);
                Session::flash('success', 'Successfully  ....');
                return redirect::to('productOrderManage');
            }
            else{
                Session::flash('error', 'Sorry access denied!');
                return redirect::to('home');
            }
    }
    else{
        Session::flash('error', 'Please try again later...');
        return redirect::to('/');
    }
    }
   // order confirm status
    public function productOrderConfirmStatus(Request $request,$id){
        if(Auth::check()){
            if(Auth::user()->user==1 || Auth::user()->user==2) {
                $productAvailable = ProductOrderManageModel::where('id', $id)->update(['od_confrim_status' => $request->get('productOrderConfirmStatus')]);
                Session::flash('success', 'Successfully  ....');
                return redirect::to('productOrderManage');
            }
            else{
                Session::flash('error', 'Sorry access denied!');
                return redirect::to('home');
            }
        }
        else{
            Session::flash('error', 'Please try again later...');
            return redirect::to('/');
        }
    }

    //product area Search auto sugest by obydul data:27-10-106
    public function areaSearchSuggestionAutocomplete(Request $request){
        if(Auth::check()) {
            if(Auth::user()->user == 1 || Auth::user()->user == 2) {
                $data = ProductOrderManageModel::select("area as name")->where("area", "LIKE", "%{$request->input('query')}%")->get();
                return response()->json($data);
            }
            else{
                Session::flash('error', 'Sorry access denied!');
                return redirect::to('home');
            }
        }
        else{
            Session::flash('error', 'Please try again later...');
            return redirect::to('/');
        }
    }

    // order product status Search by obydul
    public function productSearch(Request $request){
        if(Auth::check()){
    	$date = $request->get('submitDate');
    	$area = $request->get('area');
    	$price = $request->get('price');
        if(Auth::user()->user==1){
            if($date!=null && $area!=null && $price!=null){
                $bnbserchData = DB::table('product_order')
                    ->where('date', '=', $date)
                    ->where('area', '=', $area)
                    ->where('price', '=', $price)
                    ->get();
            }
            elseif($date!=null && $area!=null){
                $bnbserchData = DB::table('product_order')
                    ->where('date', '=', $date)
                    ->where('area', '=', $area)
                    ->get();
            }
            elseif($date!=null && $price!=null){
                $bnbserchData = DB::table('product_order')
                    ->where('date', '=', $date)
                    ->where('price', '=', $price)
                    ->get();
            }
            elseif($area!=null && $price!=null){
                $bnbserchData = DB::table('product_order')
                    ->where('area', '=', $area)
                    ->where('price', '=', $price)
                    ->get();
            }
            elseif($date!=null){
                $bnbserchData = DB::table('product_order')
                    ->where('date', '=', $date)
                    ->get();
            }
            elseif($area!=null){
                $bnbserchData = DB::table('product_order')
                    ->where('area', '=', $area)
                    ->get();
            }
            elseif($price!=null){
                $bnbserchData = DB::table('product_order')
                    ->where('price', '=', $price)
                    ->get();
            }
            else{
                $bnbserchData=DB::table('product_order')->get();
            }
            return view('backend.product.productSerchTable',compact('bnbserchData'));

        }
        else{
            if($date!=null && $area!=null && $price!=null){
                $serchData = DB::table('product_order')
                    ->where('marchent_id','=',Auth::user()->user_id)
                    ->where('date', '=', $date)
                    ->where('area', '=', $area)
                    ->where('price', '=', $price)
                    ->get();
            }
            elseif($date!=null && $area!=null){
                $serchData = DB::table('product_order')
                    ->where('marchent_id','=',Auth::user()->user_id)
                    ->where('date', '=', $date)
                    ->where('area', '=', $area)
                    ->get();
            }
            elseif($date!=null && $price!=null){
                $serchData = DB::table('product_order')
                    ->where('marchent_id','=',Auth::user()->user_id)
                    ->where('date', '=', $date)
                    ->where('price', '=', $price)
                    ->get();
            }
            elseif($area!=null && $price!=null){
                $serchData = DB::table('product_order')
                    ->where('marchent_id','=',Auth::user()->user_id)
                    ->where('area', '=', $area)
                    ->where('price', '=', $price)
                    ->get();
            }
            elseif($date!=null){
                $serchData = DB::table('product_order')
                    ->where('marchent_id','=',Auth::user()->user_id)
                    ->where('date', '=', $date)
                    ->get();
            }
            elseif($area!=null){
                $serchData = DB::table('product_order')
                    ->where('area', '=', $area)
                    ->get();
            }
            elseif($price!=null){
                $serchData = DB::table('product_order')
                    ->where('marchent_id','=',Auth::user()->user_id)
                    ->where('price', '=', $price)
                    ->get();
            }
            else{
                $serchData= DB::table('product_order')->get();
            }
            return view('backend.product.productSerchTable',compact('serchData'));

        }

    }
    else{
        Session::flash('error', 'Please try again later...');
        return redirect::to('/');
    }
}
    //end class
}
