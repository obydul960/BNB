<?php

namespace App\Http\Controllers\Hotel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Hotel\AddRomeModel;
use App\Model\MarchentRegModel;
use Session;
use Input;
use Auth;

class ManageRoomController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // show manage rome table
    public function manageRoomShowTable(){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $manageRoom = AddRomeModel::where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->get();
                $bnbmanageRoom = AddRomeModel::orderBy('id', 'DESC')->get();
                return view('backend.Hotel.manageRoom', compact('manageRoom', 'bnbmanageRoom'));
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
    // manage room publish unpublished by obydul date :29-10-16
    public function manageRoomStatus(Request $request,$id){
        if(Auth::check()) {
            if(Auth::user()->user==1){
                $manageRoomPublish = AddRomeModel::where('id', $id)->update(['manage_room_status' => $request->get('mangeRoomPublish')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('manageRoom');
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
    // manage room availability by obydul date :29-10-16
    public function manageRoomAvailability(Request $request,$id){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $manageRoomAvailability = AddRomeModel::where('id', $id)->update(['availability' => $request->get('manageRoomAvailability')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('manageRoom');
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

    // manage room Edit by obydul date:29-10-16
    public function manageRoomEdit($id){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $manageRoomEdit = AddRomeModel::where('id', '=', $id)->first();
                $hotelListShow = MarchentRegModel::where('hotel_marchent_status', 1)->get();
                return view('backend.Hotel.manageRoomEdit', compact('manageRoomEdit', 'hotelListShow'));
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

    // only merchant room edit
    public function merchantManageRoomEdit($id){
        if(Auth::check()) {
            if(Auth::user()->user==3) {
                $manageRoomEdit = AddRomeModel::where('id', '=', $id)->first();
                $hotelListShow = MarchentRegModel::where('hotel_marchent_status', 1)->get();
                return view('backend.Hotel.merchantManageEditRoom', compact('manageRoomEdit', 'hotelListShow'));
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

    // manage room update by obydul date:29-10-16
    public function manageRoomUpdate(Request $request,$id){
        if(Auth::check()) {
            if(Auth::user()->user==1 || Auth::user()->user==3) {
                $manageRoomUpdate = AddRomeModel::find($id)->update([
                    'area' => $request->get('araName'),
                    'location' => $request->get('locationName'),
                    'hotel_name' => $request->get('hotelName'),
                    'title' => $request->get('title'),
                    'room_number' => $request->get('roomNumber'),
                    'discription' => $request->get('discription'),
                    'price' => $request->get('price'),
                    'commission' => $request->get('commission')
                ]);
                Session::flash('success', 'Successfully  Update....');
                return redirect::to('manageRoom');
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
    // manage room search by obydul date:30-10-16
    public function manageRoomSearch(Request $request){
        if(Auth::check()) {
            $area = $request->get('area');
            $location = $request->get('location');
            $hotel = $request->get('hotelName');
            $areaLocationHotelList = AddRomeModel::get();
            if(Auth::user()->user==1){
                if ($area != null && $location != null && $hotel != null) {
                    $bnbmanageRoomSearch = AddRomeModel::where('area', '=', $area)
                        ->where('location', '=', $location)
                        ->where('hotel_name', '=', $hotel)
                        ->get();
                } elseif ($area != null && $location != null) {
                    $bnbmanageRoomSearch = AddRomeModel::where('area', '=', $area)
                        ->where('location', '=', $location)
                        ->get();
                } elseif ($area != null && $hotel != null) {
                    $bnbmanageRoomSearch = AddRomeModel::where('area', '=', $area)
                        ->where('hotel_name', '=', $hotel)
                        ->get();
                } elseif ($location != null && $hotel != null) {
                    $bnbmanageRoomSearch = AddRomeModel::where('location', '=', $location)
                        ->where('hotel_name', '=', $hotel)
                        ->get();
                } elseif ($area != null) {
                    $bnbmanageRoomSearch = AddRomeModel::where('area', '=', $area)->get();
                } elseif ($location != null) {
                    $bnbmanageRoomSearch = AddRomeModel::where('location', '=', $location)->get();
                } elseif ($hotel != null) {
                    $bnbmanageRoomSearch = AddRomeModel::where('hotel_name', '=', $hotel)->get();
                } else {
                    $bnbmanageRoomSearch = AddRomeModel::orderBy('id','DESC')->get();
                }
                return view('backend.Hotel.manageRoomSearch', compact('bnbmanageRoomSearch', 'areaLocationHotelList'));
            }else{
                if ($area != null && $location != null && $hotel != null) {
                    $manageRoomSearch = AddRomeModel::where('marchent_id','=',Auth::user()->user_id)->where('area', '=', $area)
                        ->where('location', '=', $location)
                        ->where('hotel_name', '=', $hotel)
                        ->get();
                } elseif ($area != null && $location != null) {
                    $manageRoomSearch = AddRomeModel::where('marchent_id','=',Auth::user()->user_id)->where('area', '=', $area)
                        ->where('location', '=', $location)
                        ->get();
                } elseif ($area != null && $hotel != null) {
                    $manageRoomSearch = AddRomeModel::where('marchent_id','=',Auth::user()->user_id)->where('area', '=', $area)
                        ->where('hotel_name', '=', $hotel)
                        ->get();
                } elseif ($location != null && $hotel != null) {
                    $manageRoomSearch = AddRomeModel::where('marchent_id','=',Auth::user()->user_id)->where('location', '=', $location)
                        ->where('hotel_name', '=', $hotel)
                        ->get();
                } elseif ($area != null) {
                    $manageRoomSearch = AddRomeModel::where('marchent_id','=',Auth::user()->user_id)->where('area', '=', $area)->get();
                } elseif ($location != null) {
                    $manageRoomSearch = AddRomeModel::where('marchent_id','=',Auth::user()->user_id)->where('location', '=', $location)->get();
                } elseif ($hotel != null) {
                    $manageRoomSearch = AddRomeModel::where('marchent_id','=',Auth::user()->user_id)->where('hotel_name', '=', $hotel)->get();
                } else {
                    $manageRoomSearch = AddRomeModel::orderby('id','DESC')->get();
                }
                return view('backend.Hotel.manageRoomSearch', compact('manageRoomSearch', 'areaLocationHotelList'));
            }

        }
        else{
            return redirect::to('/');
        }
    }

    // manage room Delete by obydul date:29-10-16
    public function manageRoomDelete($id){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $manageRoomDelete = AddRomeModel::find($id)->delete();
                return redirect::to('manageRoom');
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
