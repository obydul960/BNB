<?php

namespace App\Http\Controllers\Tourist;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Tourist\TouristManageModel;
use Session;
use Input;
use Auth;

class ManagePackageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function managePackage(){
        if(Auth::check()) {
            if (Auth::user()->user == 1 ||Auth::user()->user == 4 ) {
                $packageList = TouristManageModel::where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->get();
                $bnbpackageList = TouristManageModel::orderBy('id', 'DESC')->get();
                return view('backend.Tourist.managePackage', compact('packageList', 'bnbpackageList'));
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

    public function managePackageStatus(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $packagePublish = TouristManageModel::where('id', $id)->update(['package_status' => $request->get('managePackageStatus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('managePackage');
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

    public function packageStorageStatus(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1 || Auth::user()->user == 4) {
                $packageAvailable = TouristManageModel::where('id', $id)->update(['storage_status' => $request->get('packageStorageStatus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('managePackage');
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

    public function packageEdit($id){
        if(Auth::check()) {
            if (Auth::user()->user == 1 || Auth::user()->user == 4) {
                $packageEdit = TouristManageModel::where('id', '=', $id)->first();
                return view('backend.Tourist.packageEdit', compact('packageEdit'));
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
    public function packageUpdate(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1 || Auth::user()->user == 4) {
                /*if (Input::hasFile('imageOne')) {
                    $title_one = $request->get('title');
                    $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                    if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                        $extension3 == 'PNG' || $extension3 == 'JPG' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                    ) {
                        $imageFirst = Input::file('imageOne');
                        $createFileNameOne = $title_one . '_' . time() . '_' . $imageFirst->getClientOriginalName();
                        $imageFirst->move(public_path('touristImage'), $createFileNameOne);
                        $imageFirstUpdate = TouristManageModel::where('id', '=', $id)->update(['image_one' => $createFileNameOne]);
                    }
                }

                if (Input::hasFile('imageTwo')) {
                    $title = $request->get('title');
                    $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                    if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                        $extension3 == 'PNG' || $extension3 == 'JPG' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                    ) {
                        $imageTwo = Input::file('imageTwo');
                        $createFileNameTwo = $title . '_' . time() . '_' . $imageTwo->getClientOriginalName();
                        $imageTwo->move(public_path('touristImage'), $createFileNameTwo);
                        $imageSecundUpdate = TouristManageModel::where('id', '=', $id)->update(['image_two' => $createFileNameTwo]);
                    }
                }
                if (Input::hasFile('imageThree')) {
                    $title = $request->get('title');
                    $extension3 = Input::file('imageThree')->getClientOriginalExtension();
                    if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                        $extension3 == 'PNG' || $extension3 == 'JPG' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                    ) {
                        $imageThree = Input::file('imageThree');
                        $createFileNameThree = $title . '_' . time() . '_' . $imageThree->getClientOriginalName();
                        $imageThree->move(public_path('touristImage'), $createFileNameThree);
                        $imageSecundUpdate = TouristManageModel::where('id', '=', $id)->update(['image_three' => $createFileNameThree]);
                    }
                }
                if (Input::hasFile('imageFour')) {
                    $title = $request->get('title');
                    $extension3 = Input::file('imageFour')->getClientOriginalExtension();
                    if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                        $extension3 == 'PNG' || $extension3 == 'JPG' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                    ) {
                        $imageFour = Input::file('imageFour');
                        $createFileNameFour = $title . '_' . time() . '_' . $imageFour->getClientOriginalName();
                        $imageFour->move(public_path('touristImage'), $createFileNameFour);
                        $imageSecundUpdate = TouristManageModel::where('id', '=', $id)->update(['image_four' => $createFileNameFour]);
                    }
                }*/
                $packageUpade = TouristManageModel::find($id)->update([
                    'title' => $request->get('title'),
                    'price' => $request->get('price'),
                    'commission' => $request->get('commission'),
                    'start_date' => $request->get('startDate'),
                    'end_date' => $request->get('EndDate'),
                    'discription' => $request->get('discrioption'),
                    'facilities' => $request->get('facilities')
                ]);
                Session::flash('success', 'Successfully  Update....');
                return redirect::to('managePackage');
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

    public function packageSearch(Request $request){
        if(Auth::check()) {
            $location = $request->get('location');
            $tourist = $request->get('tourist');
            if(Auth::user()->user==1){
                if ($location != null && $tourist != null) {
                    $bnbpackageSearch = TouristManageModel::where('location', '=', $location)->where('turist_name', '=', $tourist)->get();
                } elseif ($location != null) {
                    $bnbpackageSearch = TouristManageModel::where('location', '=', $location)->get();
                } elseif ($tourist != null) {
                    $bnbpackageSearch = TouristManageModel::where('turist_name', '=', $tourist)->get();
                } else {
                    $bnbpackageSearch = TouristManageModel::get();
                }
                return view('backend.Tourist.packageSearch', compact('bnbpackageSearch'));
            }
            else{
                if ($location != null && $tourist != null) {
                    $packageSearch = TouristManageModel::where('marchent_id','=',Auth::user()->user_id)->where('location', '=', $location)->where('turist_name', '=', $tourist)->get();
                } elseif ($location != null) {
                    $packageSearch = TouristManageModel::where('marchent_id','=',Auth::user()->user_id)->where('location', '=', $location)->get();
                } elseif ($tourist != null) {
                    $packageSearch = TouristManageModel::where('marchent_id','=',Auth::user()->user_id)->where('turist_name', '=', $tourist)->get();
                } else {
                    $packageSearch = TouristManageModel::where('marchent_id','=',Auth::user()->user_id)->get();
                }
                return view('backend.Tourist.packageSearch', compact('packageSearch'));
            }
        }
        else{
            Session::flash('error', 'Please try again later...');
            return redirect::to('/');
        }
    }
    public function packageDelete($id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $mangepackage = TouristManageModel::find($id)->delete();
                return redirect::to('managePackage');
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
