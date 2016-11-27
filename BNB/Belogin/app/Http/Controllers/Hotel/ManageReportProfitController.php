<?php

namespace App\Http\Controllers\Hotel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Hotel\AddRomeModel;
use Auth;
use Session;
class ManageReportProfitController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function manageProfitFrom(){
        if(Auth::check()) {
            if(Auth::user()->user==1 || Auth::user()->user==3) {
                $porfitList = AddRomeModel::where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->get();
                $bnbporfitList = AddRomeModel::orderBy('id', 'DESC')->get();
                return view('backend.Hotel.hotelManagePofit', compact('porfitList', 'bnbporfitList'));
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

    public function manageProfitReport(Request $request){
        if(Auth::check()) {
            if(Auth::user()->user==1 || Auth::user()->user==3) {
                $startDate = $request->get('startDate');
                $endDate = $request->get('endDate');
                if($startDate!=null && $endDate!=null ){
                    $reportQuery = AddRomeModel::where('marchent_id', '=', Auth::user()->user_id)->whereBetween('date', [$startDate, $endDate])->get();
                    $bnbreportQuery = AddRomeModel::whereBetween('date', [$startDate, $endDate])->get();
                    Return view('backend.Hotel.hotelManageProfitLiveReport', compact('reportQuery', 'bnbreportQuery'));
                }
                else{
                    $reportQuery = AddRomeModel::where('marchent_id', '=', Auth::user()->user_id)->get();
                    $bnbreportQuery = AddRomeModel::get();
                    Return view('backend.Hotel.hotelManageProfitLiveReport', compact('reportQuery', 'bnbreportQuery'));
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
    // End class
}
