<?php

namespace App\Http\Controllers\Tourist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Tourist\TouristOrderModel;
use Session;
use Auth;
class BookingOrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function bookingOrderTable(){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $bookingOrder = TouristOrderModel::where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->get();
                $bnbbookingOrder = TouristOrderModel::orderBy('id', 'DESC')->get();
                return view('backend.Tourist.mangeBookingOrder', compact('bookingOrder', 'bnbbookingOrder'));
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

    public function bookingOrderStatus(Request $request,$id){
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
                $bookingOrderStatus = TouristOrderModel::where('id', $id)->update(['status' => $request->get('BoodingOrderSstaus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('touristBooking');
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
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
                $bookingOrderDelete = TouristOrderModel::find($id)->delete();
                return redirect::to('touristBooking');
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
}
