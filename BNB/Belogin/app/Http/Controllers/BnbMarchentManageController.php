<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Model\MarchentRegModel;
use App\Model\UserModel;
use App\User;
use DB;
use Auth;
use Session;
class BnbMarchentManageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // show all merchant list
	public function merchantTable(){
        if (Auth::check()) {
            if(Auth::user()->user==1) {
                $merchantList = DB::table('users')
                    ->Join('merchant', 'users.user_id', '=', 'merchant.user_id')
                    ->select('merchant.*')
                    ->get();
                return view('backend.BNB.bnbMarchentManage', compact('merchantList'));
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
     // mange merchant list
    public function merchantStatus(Request $request,$user_id){
        if (Auth::check()) {
            if(Auth::user()->user==1) {
                if ($request->get('marchentStatus') == 1) {
                    $userCategory = User::where('user_id', '=', $user_id)->first();
                    if ($userCategory->user_category == 0) {
                        // normal user type 0
                        $userTable = User::where('user_id', $user_id)->update(['user' => 0, 'status' => 1]);
                        $merchantTable = MarchentRegModel::where('user_id', $user_id)->update(['user_type' => 0, 'status' => 1]);
                    } elseif ($userCategory->user_category == 1) {
                        // Supper admin type 1
                        $userTable = User::where('user_id', $user_id)->update(['user' => 1, 'status' => 1]);
                        $merchantTable = MarchentRegModel::where('user_id', $user_id)->update(['user_type' => 1, 'status' => 1]);
                    } elseif ($userCategory->user_category == 2) {
                        //  Fashion and related merchant type 2
                        $userTable = User::where('user_id', $user_id)->update(['user' => 2, 'status' => 1]);
                        $merchantTable = MarchentRegModel::where('user_id', $user_id)->update(['user_type' => 2, 'status' => 1]);
                    } elseif ($userCategory->user_category == 3) {
                        // Hotel merchant type 3
                        $userTable = User::where('user_id', $user_id)->update(['user' => 3, 'status' => 1]);
                        $merchantTable = MarchentRegModel::where('user_id', $user_id)->update(['user_type' => 3, 'status' => 1]);
                    } elseif ($userCategory->user_category == 4) {
                        // Tour merchant type 4
                        $userTable = User::where('user_id', $user_id)->update(['user' => 4, 'status' => 1]);
                        $merchantTable = MarchentRegModel::where('user_id', $user_id)->update(['user_type' => 4, 'status' => 1]);
                    } else {
                        Session::flash('error', 'please your not permitted...');
                        return redirect::to('marchentManage');
                    }

                } else {
                    $marchentTable = MarchentRegModel::where('user_id', $user_id)->update(['status' => $request->get('marchentStatus')]);
                }
                Session::flash('success', 'Successfully updated.....');
                return redirect::to('marchentManage');
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

    // show popular brand
    public function popularBrandShow(Request $request,$user_id){
        if (Auth::check()) {
            if(Auth::user()->user==1) {

             $popularBrandName = MarchentRegModel::where('user_id', $user_id)->update(['popular_brand' => $request->get('popularBrand')]);
             Session::flash('success', 'Successfully updated.....');
                return redirect::to('marchentManage');
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
    // popular brand indexing number controll
    public function popularBrandIndexing(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $logoIndexing = $request->get('logoIndexing');
                if ($logoIndexing != null) {
                    $logoCheack = MarchentRegModel::where('logo_indexing', $logoIndexing)->count();
                    if ($logoCheack > 0) {
                        Session::flash('error', 'Logo indexing number already exists...');
                        return redirect::to('marchentManage');
                    } else {
                        $sliderIndexing = MarchentRegModel::where('id', $id)->update(['logo_indexing' => $request->get('logoIndexing')]);
                        Session::flash('success', 'Successfully indexing updated.....');
                        return redirect::to('marchentManage');
                    }
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
