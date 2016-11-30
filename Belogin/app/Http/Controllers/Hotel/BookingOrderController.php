<?php

namespace App\Http\Controllers\Hotel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Hotel\BookingOrderModel;
use Session;
use Auth;

class BookingOrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // booking order table show data by obydul date:29-10-16
    public function bookingOrderTable(){
        if(Auth::check()) {
            if(Auth::user()->user==1){
                $bookingOrder = BookingOrderModel::orderBy('id', 'DESC')->get();
                return view('backend.Hotel.bookingOrder', compact('bookingOrder'));
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
    // booking  order status by obydul date:29-10-16
    public function bookingOrderStatus(Request $request,$id){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $bookingOrderStatus = BookingOrderModel::where('id', $id)->update(['status' => $request->get('BoodingOrderSstaus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('bookingOrderManage');
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

    public function bookingOrderDelete($id){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $bookingOrderDelete = BookingOrderModel::find($id)->delete();
                return redirect::to('bookingOrderManage');
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
