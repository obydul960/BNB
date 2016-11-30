<?php

namespace App\Http\Controllers\Hotel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\MarchentRegModel;
use App\Model\Hotel\AddRomeModel;
use Session;
use Auth;
use DB;
class HotelApproveController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    // Hotel approval table show by obydul date:29-10-16
    public function hotelApproveTable(){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $hotelMerchant = MarchentRegModel::where('user_type','=','3')->orderBy('id','DESC')->get();
                return view('backend.Hotel.hotelApprove', compact('hotelMerchant'));
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
    // hotel merchant status manage by obydul date 29-10-16
    public function hotelMarchentStatus(Request $request,$marchent_id){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $productAvailable = MarchentRegModel::where('user_id', $marchent_id)->update(['status' => $request->get('hotelMarchentSataus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('hotelManage');
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
    // hotel merchant delete by obydul date:29-10-16
    public function hotelMarchentDelete($id){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $hotelMarchebtDelete = MarchentRegModel::find($id)->delete();
                    return redirect::to('hotelManage');

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
