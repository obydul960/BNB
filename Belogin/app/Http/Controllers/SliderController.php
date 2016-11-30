<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Model\SliderModel;
use App\Http\Requests;
use Session;
use Input;
use Auth;
class SliderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // Slider form show by obydul.
    public function sliderAdd(){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                return view('backend.slider.sliderAdd');
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
    // slider image store by obydul date:24-10-16
    public function sliderStore(Request $request){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $validator = Validator::make($request->all(), [
                    'CompanyName' => 'required',
                    'imageTitle' => 'required',
                    'sliderImage' => 'mimes:jpeg,jpg,bmp,png,gif|required',
                ]);
                if ($validator->fails()) {
                    Session::flash('error', 'something wrong..!');
                    return redirect::to("sliderAdd")->withErrors($validator);
                } else {
                    if (Input::hasFile('sliderImage')) {
                        $extension3 = Input::file('sliderImage')->getClientOriginalExtension();
                        if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                            $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                            $image =Input::file('sliderImage');
                            $createFileName=time() . '.' . $image->getClientOriginalName();
                            $image->move(public_path('sliderImages'), $createFileName);
                        }

                    }
                    else{
                        $createFileName="" ;

                    }
                    $sliderImage = new SliderModel();
                    $sliderImage->company_name = $request->get('CompanyName');
                    $sliderImage->image_title = $request->get('imageTitle');
                    $sliderImage->image_name = $createFileName;
                    $sliderImage->slider_details = $request->get('sliderDetails');
                    $sliderImage->url_link = $request->get('urlLink');
                    $sliderImage->save();
                    Session::flash('success', 'Successfully Slider Image Uploaded.');
                    return redirect::to('SliderContrll');
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
    //slider image controll by obydul date:24-10-16
    public function sliderControll(){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $sliderShow = SliderModel::orderBy('id', 'DESC')->get();
                return view('backend.slider.sliderShowTable', compact('sliderShow'));
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
    // slider edit by obydul date:24-10-16
    public function sliderEdit($id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $slider = SliderModel::where('id', '=', $id)->first();
                return view('backend.slider.sliderEdit', compact('slider'));
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
    //slider update by obydul date:24-10-16
    public function sliderUpdate(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                if (Input::hasFile('sliderImage')) {
                    $title = $request->get('CompanyName');
                    $extension3 = Input::file('sliderImage')->getClientOriginalExtension();
                    if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                        $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                    ) {
                        $image = Input::file('sliderImage');
                        $createFileName = $title . time() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('sliderImages'), $createFileName);
                        $slider_update = SliderModel::where('id', '=', $id)->update(['company_name' => $request->get('CompanyName'),
                            'image_title' => $request->get('imageTitle'), 'image_name' => $createFileName,
                            'slider_details' => $request->get('sliderDetails')
                        ]);
                        Session::flash('success', 'Successfully updated.....');
                        return redirect::to('SliderContrll');

                    }
                } else {
                    $slider_update = SliderModel::where('id', '=', $id)->update(['company_name' => $request->get('CompanyName'),
                        'image_title' => $request->get('imageTitle'), 'slider_details' => $request->get('sliderDetails'),'url_link' => $request->get('urlLink')]);
                    Session::flash('success', 'Successfully updated.....');
                    return redirect::to('SliderContrll');
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
    //slider indexing number wish show by obydul date:24-10-16
    public function sliderIndexing(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $sliderIndex = $request->get('sliderIndexing');
                if ($sliderIndex != null) {
                    $check = SliderModel::where('image_indexing', $sliderIndex)->count();
                    if ($check > 0) {
                        Session::flash('error', 'Slider indexing number already exists...');
                        return redirect::to('SliderContrll');
                    } else {
                        $sliderIndexing = SliderModel::where('id', $id)->update(['image_indexing' => $request->get('sliderIndexing')]);
                        Session::flash('success', 'Successfully indexing updated.....');
                        return redirect::to('SliderContrll');
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
    // slider status 1= show 0=hide by obydul date:24-10-16
    public function sliderStatus(Request $request,$id){
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
                $sliderStatus = SliderModel::where('id', $id)->update(['status' => $request->get('sliderStatus')]);
                Session::flash('success', 'Successfully slider status updated.....');
                return redirect::to('SliderContrll');
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
    // slider delete id wish by obydul date:24-10-16
    public function sliderDelete($id){
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
                $mangeProduct = SliderModel::find($id);
                $file_path = 'Belogin/public/sliderImages/' . $mangeProduct->image_name;
                unlink($file_path);
                $mangeProduct->delete();
                return redirect::to('SliderContrll');
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

    //end class
}
