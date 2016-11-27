<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Model\ProductAddModel;
use Session;
use Input;
use DB;
use Auth;
class ProductManageController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
  }
   // Product Details Show by obydul
    public function productDetailsShow(){
        if(Auth::check()){
        if(Auth::user()->user == 1){
            $products = ProductAddModel::where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->get();
            $bnbproducts = ProductAddModel::orderBy('id', 'DESC')->get();
            return view('backend.product.productManage', compact('products', 'bnbproducts'));
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
    // Product publish and unpublished by obydul
    public function productStatus(Request $request,$product_id){
        if(Auth::check()){
          if(Auth::user()->user == 1) {
              $productPublish = ProductAddModel::where('product_id', $product_id)->update(['product_status' => $request->get('productStatus')]);
              Session::flash('success', 'Successfully.....');
              return redirect::to('productManage');
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
    // product available and unavailable by obydul
    public function storageStatus(Request $request,$product_id){
        if(Auth::check()){
            if(Auth::user()->user == 1) {
                $productAvailable = ProductAddModel::where('product_id', $product_id)->update(['storage_status' => $request->get('storageStatus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('productManage');
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
    // End classs
}
