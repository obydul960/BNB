<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Model\ProductOrderManageModel;
use Session;
use Auth;

class BnbProductOrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // BNB Product order list show table by obydul date:20-10-16
    public function productOrderTable(){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $productList = ProductOrderManageModel::orderBy('id', 'DESC')->get();
                return view('backend.BNB.index', compact('productList'));
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

    // BNB Product order list status manage by obydul date:20-10-16
    public function productOrderStatus(Request $request,$product_code_no){
        if(Auth::check()){
            if(Auth::user()->user==1) {
                $productOrderStatus = ProductOrderManageModel::where('id', $product_code_no)->update(['order_status' => $request->get('bnbProductOrderStatus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('BnbProductOrder');
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


    //End class
}
