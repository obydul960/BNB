<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Model\ProductOrderManageModel;
use App\Http\Requests;
use Auth;
use DB;
use Session;

class BnbLiveReportController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // mange profit list  show only bnb supper admin
    public function manageProfitList(){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $bnbReport = ProductOrderManageModel::orderBy('id', 'DESC')->get();
                return view('backend.BNB.bnbManageProfit', compact('bnbReport'));
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

    public function manageProfileReportShow(Request $request){
        if(Auth::check()){
            if(Auth::user()->user==1) {
                $startDate = $request->get('startDate');
                $endDate = $request->get('endDate');
                if($startDate!=null && $endDate!=null){
                    $manageProfit = ProductOrderManageModel::whereBetween('date', [$startDate, $endDate])
                        ->orderBy('id', 'DESC')
                        ->get();
                    Return view('backend.BNB.bnbManageProfitReportTable', compact('manageProfit'));
                }
                else{
                    $manageProfit = ProductOrderManageModel::orderBy('id', 'DESC')->get();
                    Return view('backend.BNB.bnbManageProfitReportTable', compact('manageProfit'));
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
    // End Class
}
