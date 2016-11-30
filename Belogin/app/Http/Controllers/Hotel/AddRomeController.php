<?php

namespace App\Http\Controllers\Hotel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Hotel\AddRomeModel;
use App\Model\Hotel\HotelImageModel;
use App\Model\MarchentRegModel;
use App\Model\division;
use Session;
use DB;
use Input;
use Auth;

class AddRomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // add rome form show by obydul date:29-10-16
    public function addRomeFrom(){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $division = division::lists('name', 'id');
                $hotelList =MarchentRegModel::where('user_type', '3')->get();
                //dd($division);
                return view('backend.Hotel.addRome', compact('division','hotelList'));
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

    // add rome store by obydul date:29-10-16
    public function addRomeStore(Request $request){
        if(Auth::check()) {
            if (Auth::user()->user == 1 || Auth::user()->user == 3 ) {
                $validator = Validator::make($request->all(), [
                    'hotelName' => 'required',
                    'division' => 'required',
                    'district' => 'required',
                    'thana' => 'required',
                    'stateAddress' => 'required',
                    'title' => 'required',
                    'roomNumber' => 'required',
                    'price' => 'required',
                    'commission' => 'required',
                    'discrioption' => 'required'
                ]);
                if ($validator->fails()) {
                    Session::flash('error', 'something wrong..!');
                    return redirect::to("addRome");
                } else {
                    $romeId = uniqid();
                    $addRome = new AddRomeModel();

                    $addRome->room_id = $romeId;
                    $addRome->date = date("d-m-Y");
                    $addRome->divistion =$request->get('division');
                    $addRome->district = $request->get('district');
                    $addRome->thana = $request->get('thana');
                    $addRome->marchent_id =Auth::user()->user_id;
                    $addRome->hotel_name = $request->get('hotelName');
                    $addRome->state_address = $request->get('stateAddress');
                    $addRome->title = $request->get('title');
                    $addRome->room_number = $request->get('roomNumber');
                    $addRome->price = $request->get('price');
                    $addRome->commission = $request->get('commission');
                    $addRome->discription = $request->get('discrioption');
                    $addRome->save();
                    Session::flash('success', 'Successfully Image Uploaded.');
                    return redirect::to('manageRoom');
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
    // Hotel image upload
    public function hotelImageStore(Request $request){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $validator = Validator::make($request->all(), [
                    'imageOne' => 'mimes:jpeg,jpg,bmp,png,gif',
                    'imageTwo' => 'mimes:jpeg,jpg,bmp,png,gif',
                    'imageThree' => 'mimes:jpeg,jpg,bmp,png,gif',
                    'imageFour' => 'mimes:jpeg,jpg,bmp,png,gif'
                ]);
                if ($validator->fails()) {
                    Session::flash('error', 'something wrong upload...!');
                    return redirect::to("managePackage");
                } else {
                    $porductID = $request->get('roomId');
                    $cheackProductId = HotelImageModel::where('room_id', $porductID)->count();
                    if ($cheackProductId > 0) {
                        if (Input::hasFile('imageOne')) {
                            $porductID = $request->get('roomId');
                            $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('imageOne');
                                $createFileName = $porductID . time() . '.' . $image->getClientOriginalExtension();
                                $image->move(public_path('hotelImage/category'), $createFileName);
                                $slider_update = HotelImageModel::where('room_id', '=', $porductID)->update(['image_one' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('manageRoom');
                            }

                        }

                        if(Input::hasFile('imageTwo')) {
                            $porductID = $request->get('roomId');
                            $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('imageTwo');
                                $createFileName = $porductID . time() . '.' . $image->getClientOriginalExtension();
                                $image->move(public_path('hotelImage/details'), $createFileName);
                                $slider_update = HotelImageModel::where('room_id', '=', $porductID)->update(['image_two' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('manageRoom');
                            }

                        }

                        if(Input::hasFile('imageThree')) {
                            $porductID = $request->get('roomId');
                            $extension3 = Input::file('imageThree')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('imageThree');
                                $createFileName = $porductID . time() . '.' . $image->getClientOriginalExtension();
                                $image->move(public_path('hotelImage/details'), $createFileName);
                                $slider_update = HotelImageModel::where('room_id', '=', $porductID)->update(['imge_three' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('manageRoom');
                            }

                        }

                        if(Input::hasFile('imageFour')) {
                            $porductID = $request->get('roomId');
                            $extension3 = Input::file('imageFour')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('imageFour');
                                $createFileName = $porductID . time() . '.' . $image->getClientOriginalExtension();
                                $image->move(public_path('hotelImage/details'), $createFileName);
                                $slider_update = HotelImageModel::where('room_id', '=', $porductID)->update(['image_four' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('manageRoom');
                            }

                        }

                    } else {
                        $porductID = $request->get('roomId');
                        if ($request->file('imageOne') != null && $request->file('imageTwo') != null && $request->file('imageThree') != null && $request->file('imageFour') != null) {

                            if (Input::hasFile('imageOne')) {
                                $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $imageOne =Input::file('imageOne');
                                    $createFileNameOne=$porductID.'_'.time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('hotelImage/category'), $createFileNameOne);
                                }
                            }

                            if (Input::hasFile('imageTwo')) {
                                $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $imageTwo =Input::file('imageTwo');
                                    $detailsImageTwo =$porductID.'_'.time() . '_' . $imageTwo->getClientOriginalName();
                                    $imageTwo->move(public_path('hotelImage/details'), $detailsImageTwo);
                                }
                            }
                            if (Input::hasFile('imageThree')) {
                                $extension3 = Input::file('imageThree')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $detailsTwo = $request->file('imageThree');
                                    $detailsThree =$porductID.'_'. time() . '_' . $detailsTwo->getClientOriginalName();
                                    $detailsTwo->move(public_path('hotelImage/details'), $detailsThree);
                                }
                            }

                            if (Input::hasFile('imageFour')) {
                                $extension3 = Input::file('imageFour')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $detailsFour = $request->file('imageFour');
                                    $detailsImageFour = $porductID.'_'. time() . '_' . $detailsFour->getClientOriginalName();
                                    $detailsFour->move(public_path('hotelImage/details'), $detailsImageFour);
                                }
                            }
                            $imageInsert = new HotelImageModel();
                            $imageInsert->room_id = $request->get('roomId');
                            $imageInsert->image_one = $createFileNameOne;
                            $imageInsert->image_two = $detailsImageTwo;
                            $imageInsert->imge_three = $detailsThree;
                            $imageInsert->image_four = $detailsImageFour;
                            $imageInsert->save();
                        } elseif ($request->file('imageOne') != null && $request->file('imageTwo') != null && $request->file('imageThree') != null) {
                            if (Input::hasFile('imageOne')) {
                                $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $imageOne =Input::file('imageOne');
                                    $createFileNameOne=$porductID.'_'.time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('hotelImage/category'), $createFileNameOne);
                                }
                            }

                            if (Input::hasFile('imageTwo')) {
                                $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $imageTwo =Input::file('imageTwo');
                                    $detailsImageTwo =$porductID.'_'.time() . '_' . $imageTwo->getClientOriginalName();
                                    $imageTwo->move(public_path('hotelImage/details'), $detailsImageTwo);
                                }
                            }
                            if (Input::hasFile('imageThree')) {
                                $extension3 = Input::file('imageThree')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $detailsTwo = $request->file('imageThree');
                                    $detailsThree =$porductID.'_'. time() . '_' . $detailsTwo->getClientOriginalName();
                                    $detailsTwo->move(public_path('hotelImage/details'), $detailsThree);
                                }
                            }


                            $imageInsert = new HotelImageModel();
                            $imageInsert->room_id = $request->get('roomId');
                            $imageInsert->image_one = $createFileNameOne;
                            $imageInsert->image_two = $detailsImageTwo;
                            $imageInsert->imge_three = $detailsThree;
                            $imageInsert->save();
                        } elseif ($request->file('imageOne') != null && $request->file('imageTwo') != null && $request->file('imageFour') != null) {
                            if (Input::hasFile('imageOne')) {
                                $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $imageOne =Input::file('imageOne');
                                    $createFileNameOne=$porductID.'_'.time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('hotelImage/category'), $createFileNameOne);
                                }
                            }

                            if (Input::hasFile('imageTwo')) {
                                $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $imageTwo =Input::file('imageTwo');
                                    $detailsImageTwo =$porductID.'_'.time() . '_' . $imageTwo->getClientOriginalName();
                                    $imageTwo->move(public_path('hotelImage/details'), $detailsImageTwo);
                                }
                            }

                            if (Input::hasFile('imageFour')) {
                                $extension3 = Input::file('imageFour')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $detailsFour = $request->file('imageFour');
                                    $detailsImageFour = $porductID.'_'. time() . '_' . $detailsFour->getClientOriginalName();
                                    $detailsFour->move(public_path('hotelImage/details'), $detailsImageFour);
                                }
                            }

                            $imageInsert = new HotelImageModel();
                            $imageInsert->room_id = $request->get('roomId');
                            $imageInsert->image_one = $createFileNameOne;
                            $imageInsert->image_two = $detailsImageTwo;
                            $imageInsert->image_four = $detailsImageFour;
                            $imageInsert->save();
                        } elseif ($request->file('imageOne') != null && $request->file('imageTwo') != null) {
                            if (Input::hasFile('imageOne')) {
                                $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $imageOne =Input::file('imageOne');
                                    $createFileNameOne=$porductID.'_'.time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('hotelImage/category'), $createFileNameOne);
                                }
                            }

                            if (Input::hasFile('imageTwo')) {
                                $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                                    $imageTwo =Input::file('imageTwo');
                                    $detailsImageTwo =$porductID.'_'.time() . '_' . $imageTwo->getClientOriginalName();
                                    $imageTwo->move(public_path('hotelImage/details'), $detailsImageTwo);
                                }
                            }

                            $imageInsert = new HotelImageModel();
                            $imageInsert->room_id = $request->get('roomId');
                            $imageInsert->image_one = $createFileNameOne;
                            $imageInsert->image_two = $detailsImageTwo;
                            $imageInsert->save();
                        }

                    }


                    Session::flash('success', 'Successfully Image Uploaded.');
                    return redirect::to('manageRoom');
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
    public function hotelImageDelete(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $categoryImage = HotelImageModel::find($id);
                if ($request->get('ImageOne') != null) {
                    $file_path = 'Belogin/public/hotelImage/category/' . $categoryImage->image_one;
                    unlink($file_path);
                    $categoryImage = HotelImageModel::where('id', $id)->update([
                        'image_one' => null]);
                } elseif ($request->get('imageTwo') != null) {
                    // return 1;
                    $filePathOne = 'Belogin/public/hotelImage/details/' . $categoryImage->image_two;
                    unlink($filePathOne);
                    $detailsImageOne = HotelImageModel::where('id', $id)->update([
                        'image_two' => null]);
                } elseif ($request->get('imageThree') != null) {
                    $filePathTwo = 'Belogin/public/hotelImage/details/' . $categoryImage->imge_three;
                    unlink($filePathTwo);
                    $detailsImageTwo = HotelImageModel::where('id', $id)->update([
                        'imge_three' => null]);
                } elseif ($request->get('imageFour') != null) {
                    $fileFour = 'Belogin/public/hotelImage/details/' . $categoryImage->image_four;
                    unlink($fileFour);
                    $detailsImagethree = HotelImageModel::where('id', $id)->update([
                        'image_four' => null]);
                } else {
                    Session::flash('error', 'Please try again later!');
                    return redirect::to('manageRoom');
                }
                Session::flash('success', 'Successfully Delete.....');
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

    // marchent wish room add
    public function marchentRoomAdd(){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                return view('backend.Hotel.marchentRoomAdd');
            }
            else{
                Session::flash('error', 'Sorry access denied!');
                return redirect::to('home');
            }
        }
        else{
            return redirect::to('/');
        }
    }
    // merchant wish room store
    public function merchantRoomStore(Request $request){
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'roomNumber' => 'required',
                    'price' => 'required',
                    'commission' => 'required',
                    'discrioption' => 'required'
                ]);
                if ($validator->fails()) {
                    Session::flash('error', 'something wrong..!');
                    return redirect::to("marchentRoomAdd");
                } else {
                    $romeId = uniqid();
                    $title = $request->get('title');
                    $addRome = new AddRomeModel();
                    $addRome->room_id = $romeId;
                    $addRome->date = date("d-m-Y");
                    $addRome->title = $title;
                    $addRome->room_number = $request->get('roomNumber');
                    $addRome->discription = $request->get('discrioption');
                    $addRome->price = $request->get('price');
                    $addRome->commission = $request->get('commission');
                    $addRome->save();
                    Session::flash('success', 'Successfully data store.');
                    return redirect::to('manageRoom');
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
