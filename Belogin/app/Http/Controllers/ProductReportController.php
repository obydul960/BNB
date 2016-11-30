<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Input;
use DB;
use Auth;
use Session;
class ProductReportController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
  }
	// Product Report from show by obydul 
    public function reportTable(){
        if(Auth::check()){
            if (Auth::user()->user == 1 || Auth::user()->user == 2) {
                $reportQuery = DB::table('product_order')->where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->get();
                $bnbreportQuery = DB::table('product_order')->orderBy('id', 'DESC')->get();
                return view('backend.product.productReport', compact('reportQuery', 'bnbreportQuery'));
            }else{
                Session::flash('error', 'Sorry access denied!');
                return redirect::to('home');
            }
    }
    else{
        Session::flash('error', 'Please try again later...');
        return redirect::to('/');
    }
	}
    // Product Recport show by obydul
	public function reportController(Request $request){
        if(Auth::check()){
            if (Auth::user()->user == 1 || Auth::user()->user == 2){
                $startDate = $request->get('startDate');
                $endDate = $request->get('endDate');
                if($startDate!=null && $endDate!=null){
                    $reportQuery = DB::table('product_order')->where('marchent_id', '=', Auth::user()->user_id)->whereBetween('date', [$startDate, $endDate])->orderBy('id','DESC')->get();
                    $bnbreportQuery = DB::table('product_order')->whereBetween('date', [$startDate, $endDate])->orderBy('id','DESC')->get();
                    Return view('backend.product.reportShow', compact('reportQuery', 'bnbreportQuery'));
                }
                else{
                    $reportQuery = DB::table('product_order')->where('marchent_id', '=', Auth::user()->user_id)->orderBy('id','DESC')->get();
                    $bnbreportQuery = DB::table('product_order')->orderBy('id','DESC')->get();
                    Return view('backend.product.reportShow', compact('reportQuery', 'bnbreportQuery'));
                }

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
    //end class
}
