<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Session;
use Auth;
use Hash;
class ChangePasswordController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        if(Auth::check()) {
            return view('changePassword');
        }
        else{
            Session::flash('error', 'Please try again later...');
            return redirect::to('/');
        }
    }
    // change password store by obydul date:7-11-16
    public function changePassword(Request $request){
        if(Auth::check()){
            $newPassword = $request->get('newPassword');
            $confirmPassword = $request->get('confirmPassword');
            if($newPassword == $confirmPassword){
                $passwrod = Hash::make($confirmPassword);
                $update = User::where('user_id','=',Auth::user()->user_id)->where('email','=',Auth::user()->email)
                    ->update(['password'=>$passwrod]);
                Session::flash('success','Password Changed Successfully!');
                return Redirect::to('/logout');
            }
            else{
                Session::flash('error','Password Not Matched Please write Correctly!');
                return Redirect::to('passwordChange');
            }
        }
        else{
            Session::flash('error', 'Please try again later...');
            return redirect::to('passwordChange');
        }
    }
    //End class
}
