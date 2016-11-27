<?php

namespace App\Http\Controllers\Tourist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Tourist\TouristManageModel;
use App\Model\Tourist\PackageImageModel;
use Session;
use DB;
use Input;
use Auth;

class AddPackageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function addPackageFrom(){
        if(Auth::check()){
            if (Auth::user()->user == 1 || Auth::user()->user == 4) {
                return view('backend.Tourist.addPackage');
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
    public function packageStore(Request $request){
        if(Auth::check()) {
            if (Auth::user()->user == 1 || Auth::user()->user == 4) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'price' => 'required',
                    'commission' => 'required',
                    'startDate' => 'required',
                    'EndDate' => 'required',
                    'discrioption' => 'required',
                    'facilities' => 'required'
                ]);
                if ($validator->fails()) {
                    Session::flash('error', 'something wrong..!');
                    return redirect::to("addPackage");
                } else {
                    $packageID = uniqid();
                    $addPackage = new TouristManageModel();
                    $addPackage->package_id = $packageID;
                    $addPackage->title = $request->get('title');
                    $addPackage->price = $request->get('price');
                    $addPackage->commission = $request->get('commission');
                    $addPackage->start_date = $request->get('startDate');
                    $addPackage->end_date = $request->get('EndDate');
                    $addPackage->discription = $request->get('discrioption');
                    $addPackage->facilities = $request->get('facilities');
                    $addPackage->date = date("d-m-Y");
                    $addPackage->save();
                    Session::flash('success', 'Successfully Image Uploaded.');
                    return redirect::to('managePackage');
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
    // package image upload and update
    public function packageImageStore(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->user == 1 || Auth::user()->user == 4) {
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
                    $porductID = $request->get('packageID');
                    $cheackProductId = PackageImageModel::where('package_id', $porductID)->count();
                    if ($cheackProductId > 0) {
                        if (Input::hasFile('imageOne')) {
                            $porductID = $request->get('packageID');
                            $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('imageOne');
                                $createFileName = $porductID . '_' . time() . '_' . $image->getClientOriginalName();
                                $image->move(public_path('touristImage/category'), $createFileName);
                                $slider_update = PackageImageModel::where('package_id', '=', $porductID)->update(['category_image' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('managePackage');
                            }

                        }

                        if (Input::hasFile('imageTwo')) {
                            $porductID = $request->get('packageID');
                            $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('imageTwo');
                                $createFileName = $porductID . '_' . time() . '_' . $image->getClientOriginalName();
                                $image->move(public_path('touristImage/details'), $createFileName);
                                $slider_update = PackageImageModel::where('package_id', '=', $porductID)->update(['details_image' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('managePackage');
                            }

                        }

                        if (Input::hasFile('imageThree')) {
                            $porductID = $request->get('packageID');
                            $extension3 = Input::file('imageThree')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('imageThree');
                                $createFileName = $porductID . '_' . time() . '_' . $image->getClientOriginalName();
                                $image->move(public_path('touristImage/details'), $createFileName);
                                $slider_update = PackageImageModel::where('package_id', '=', $porductID)->update(['home_image_one' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('managePackage');
                            }

                        }

                        if (Input::hasFile('imageFour')) {
                            $porductID = $request->get('packageID');
                            $extension3 = Input::file('imageFour')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('imageFour');
                                $createFileName = $porductID . '_' . time() . '_' . $image->getClientOriginalName();
                                $image->move(public_path('touristImage/details'), $createFileName);
                                $slider_update = PackageImageModel::where('package_id', '=', $porductID)->update(['home_image_two' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('managePackage');
                            }

                        }

                    } else {
                        $porductID = $request->get('packageID');
                        if ($request->file('imageOne') != null && $request->file('imageTwo') && $request->file('imageThree') && $request->file('imageFour')) {

                            if (Input::hasFile('imageOne')) {
                                $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $imageOne = Input::file('imageOne');
                                    $homeimageName = $porductID . '_' . time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('touristImage/category'), $homeimageName);
                                }
                            }

                            if (Input::hasFile('imageTwo')) {
                                $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $imageOne = Input::file('imageTwo');
                                    $detailsImageOneName = $porductID . '_' . time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('touristImage/details'), $detailsImageOneName);
                                }
                            }

                            if (Input::hasFile('imageThree')) {
                                $extension3 = Input::file('imageThree')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsTwo = $request->file('imageThree');
                                    $detailsTowImageName = $porductID . '_' . time() . '_' . $detailsTwo->getClientOriginalName();
                                    $detailsTwo->move(public_path('touristImage/details'), $detailsTowImageName);
                                }
                            }

                            if (Input::hasFile('imageFour')) {
                                $extension3 = Input::file('imageFour')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsThree = $request->file('imageFour');
                                    $detailsThreeImageName = $porductID . '_' . time() . '_' . $detailsThree->getClientOriginalName();
                                    $detailsThree->move(public_path('touristImage/details'), $detailsThreeImageName);
                                }
                            }


                            $imageInsert = new PackageImageModel();
                            $imageInsert->package_id = $request->get('packageID');
                            $imageInsert->category_image = $homeimageName;
                            $imageInsert->details_image = $detailsImageOneName;
                            $imageInsert->home_image_one = $detailsTowImageName;
                            $imageInsert->home_image_two = $detailsThreeImageName;
                            $imageInsert->save();
                        } elseif ($request->file('imageOne') != null && $request->file('imageTwo') && $request->file('imageThree')) {
                            if (Input::hasFile('imageOne')) {
                                $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $imageOne = Input::file('imageOne');
                                    $homeimageName = $porductID . '_' . time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('touristImage/category'), $homeimageName);
                                }
                            }

                            if (Input::hasFile('imageTwo')) {
                                $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $imageOne = Input::file('imageTwo');
                                    $detailsImageOneName = $porductID . '_' . time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('touristImage/details'), $detailsImageOneName);
                                }
                            }

                            if (Input::hasFile('imageThree')) {
                                $extension3 = Input::file('imageThree')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsTwo = $request->file('imageThree');
                                    $detailsThreeImageName = $porductID . '_' . time() . '_' . $detailsTwo->getClientOriginalName();
                                    $detailsTwo->move(public_path('touristImage/details'), $detailsThreeImageName);
                                }
                            }
                            $imageInsert = new PackageImageModel();
                            $imageInsert->package_id = $request->get('packageID');
                            $imageInsert->category_image = $homeimageName;
                            $imageInsert->details_image = $detailsImageOneName;
                            $imageInsert->home_image_one = $detailsThreeImageName;
                            $imageInsert->save();
                        } elseif ($request->file('imageOne') != null && $request->file('imageTwo') != null && $request->file('imageFour') != null) {
                            if (Input::hasFile('imageOne')) {
                                $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $imageOne = Input::file('imageOne');
                                    $homeimageName = $porductID . '_' . time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('touristImage/category'), $homeimageName);
                                }
                            }

                            if (Input::hasFile('imageTwo')) {
                                $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $imageOne = Input::file('imageTwo');
                                    $detailsImageOneName = $porductID . '_' . time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('touristImage/details'), $detailsImageOneName);
                                }
                            }
                            if (Input::hasFile('imageFour')) {
                                $extension3 = Input::file('imageFour')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsThree = $request->file('imageFour');
                                    $detailsThreeImageName = $porductID . '_' . time() . '_' . $detailsThree->getClientOriginalName();
                                    $detailsThree->move(public_path('touristImage/details'), $detailsThreeImageName);
                                }
                            }

                            $imageInsert = new PackageImageModel();
                            $imageInsert->package_id = $request->get('packageID');
                            $imageInsert->category_image = $homeimageName;
                            $imageInsert->details_image = $detailsImageOneName;
                            $imageInsert->home_image_two = $detailsThreeImageName;
                            $imageInsert->save();
                        } elseif ($request->file('imageOne') != null && $request->file('imageTwo') != null) {
                            if (Input::hasFile('imageOne')) {
                                $extension3 = Input::file('imageOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $imageOne = Input::file('imageOne');
                                    $homeimageName = $porductID . '_' . time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('touristImage/category'), $homeimageName);
                                }
                            }

                            if (Input::hasFile('imageTwo')) {
                                $extension3 = Input::file('imageTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $imageOne = Input::file('imageTwo');
                                    $detailsImageOneName = $porductID . '_' . time() . '_' . $imageOne->getClientOriginalName();
                                    $imageOne->move(public_path('touristImage/details'), $detailsImageOneName);
                                }
                            }

                            $imageInsert = new PackageImageModel();
                            $imageInsert->package_id = $request->get('packageID');
                            $imageInsert->category_image = $homeimageName;
                            $imageInsert->details_image = $detailsImageOneName;
                            $imageInsert->save();
                        }

                    }

                    Session::flash('success', 'Successfully Slider Image Uploaded.');
                    return redirect::to('managePackage');

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

    public function packageImageDelete(Request $request, $id){

        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $categoryImage = PackageImageModel::find($id);
                if ($request->get('ImageOne') != null) {
                    $file_path = 'Belogin/public/touristImage/category/' . $categoryImage->category_image;
                    unlink($file_path);
                    $categoryImage = PackageImageModel::where('id', $id)->update([
                        'category_image' => null]);
                } elseif ($request->get('imageTwo') != null) {
                    // return 1;
                    $filePathOne = 'Belogin/public/touristImage/details/' . $categoryImage->details_image;
                    unlink($filePathOne);
                    $detailsImageOne = PackageImageModel::where('id', $id)->update([
                        'details_image' => null]);
                } elseif ($request->get('imageThree') != null) {
                    $filePathTwo = 'Belogin/public/touristImage/details/' . $categoryImage->home_image_one;
                    unlink($filePathTwo);
                    $detailsImageTwo = PackageImageModel::where('id', $id)->update([
                        'home_image_one' => null]);
                } elseif ($request->get('imageFour') != null) {
                    $fileFour = 'Belogin/public/touristImage/details/' . $categoryImage->home_image_two;
                    unlink($fileFour);
                    $detailsImagethree = PackageImageModel::where('id', $id)->update([
                        'home_image_two' => null]);
                } else {
                    Session::flash('error', 'Sorry not delete!');
                    return redirect::to('home');
                }
                Session::flash('success', 'Successfully Delete.....');
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
