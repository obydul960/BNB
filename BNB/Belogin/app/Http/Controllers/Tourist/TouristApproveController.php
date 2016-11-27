<?php

namespace App\Http\Controllers\Tourist;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Tourist\TouristManageModel;
use Session;
use Auth;

class TouristApproveController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function touristTable(){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $turistList = TouristManageModel::get();
                return view('backend.Tourist.touristApprove', compact('turistList'));
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
    public function touristStatus(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $touristSatus = TouristManageModel::where('id', $id)->update(['status' => $request->get('touristApproveStatus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('touristManage');
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
    public function touristDelete($id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $touristDelete = TouristManageModel::find($id)->delete();
                return redirect::to('touristManage');
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
