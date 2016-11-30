<?php

namespace App\Http\Controllers\Tourist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Tourist\TouristManageModel;
use Session;
use Auth;

class PackageProfitController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function packageProfitFrom(){
        if(Auth::check()) {
            if (Auth::user()->user == 1 || Auth::user()->user == 4) {
                $profitList = TouristManageModel::where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->get();
                $bnbprofitList = TouristManageModel::orderBy('id', 'DESC')->get();
                return view('backend.Tourist.manageProfit', compact('profitList', 'bnbprofitList'));
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

    public function packageProfitReport(Request $request){
        if(Auth::check()) {
            if (Auth::user()->user == 1 || Auth::user()->user == 4) {
                $startDate = $request->get('startDate');
                $endDate = $request->get('endDate');
                if($startDate!=null && $endDate!=null){
                    $reportQuery = TouristManageModel::where('marchent_id', '=', Auth::user()->user_id)->whereBetween('date', [$startDate, $endDate])->get();
                    $bnbreportQuery = TouristManageModel::whereBetween('date', [$startDate, $endDate])->get();
                    Return view('backend.Tourist.packageLiveReport', compact('reportQuery', 'bnbreportQuery'));
                }
                else{
                    $reportQuery = TouristManageModel::where('marchent_id', '=', Auth::user()->user_id)->get();
                    $bnbreportQuery = TouristManageModel::orderBy('id','DESC')->get();
                    Return view('backend.Tourist.packageLiveReport', compact('reportQuery', 'bnbreportQuery'));
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
    //End class
}
