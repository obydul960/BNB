<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Model\MarchentRegModel;
use App\Model\UserModel;
use Hash;
use Image;
use Session;
use Auth;
use Input;

class MarchentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function marchentReg(){
        return view('backend.marchent.marchentReg');
    }

    public function marchentStore(Request $Request){
            $validator = validator::make($Request->all(), [
                'CompanyName' => 'required',
                'userType'=>'required',
                'companyLogo' => 'required',
                'shoppingMohol' => 'required',
                'phoneNumber' => 'required',
                'contactPersonNumber' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confirm_password' => 'required',
                'cityName' => 'required',
                'pickUpAddress' => 'required',
                'address' => 'required'
            ]);
            if ($validator->fails()) {
                Session::flash('error', 'something wrong..!');
                return redirect::to("marchentRegistration")->withErrors($validator);
            } else {
                $password = $Request->get('password');
                $confirmPassword = $Request->get('confirm_password');
                if ($password == $confirmPassword) {
                    $userTable = new UserModel();
                    $marchentTable = new MarchentRegModel();
                    $userId = uniqid();
                    $userTable->user_id = $userId;
                    $userTable->user = $Request->get('userType');
                    $userTable->name = $Request->get('CompanyName');
                    $userTable->email = $Request->get('email');
                    $userTable->password = Hash::make($password);
                    $userTable->phone_number = $Request->get('phoneNumber');
                    $userTable->save();
                    $companyName = $Request->get('CompanyName');

                    if (Input::hasFile('companyLogo')) {
                        $extension3 = Input::file('companyLogo')->getClientOriginalExtension();
                        if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||$extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                            $image =Input::file('companyLogo');
                            $createFileName=$companyName.'_'.time() . '_' . $image->getClientOriginalName();
                            $image->move(public_path('product_image/logo'), $createFileName);
                        }

                    }
                    else{
                        $createFileName="" ;

                    }
                    $marchentTable->user_id = $userId;
                    $marchentTable->user_type = $Request->get('userType');
                    $marchentTable->company_name = $companyName;
                    $marchentTable->company_logo = $createFileName;
                    $marchentTable->shopping_mohol = $Request->get('shoppingMohol');
                    $marchentTable->email = $Request->get('email');
                    $marchentTable->password = Hash::make($password);;
                    $marchentTable->phone = $Request->get('phoneNumber');
                    $marchentTable->contact_person_phone = $Request->get('contactPersonNumber');
                    $marchentTable->address = $Request->get('address');
                    $marchentTable->good_pick_up_address = $Request->get('pickUpAddress');
                    $marchentTable->city = $Request->get('cityName');
                    $marchentTable->save();
                } else {
                    Session::flash('error', 'Your password and confirm password do not match..!');
                    return redirect::to("marchentRegistration")->withErrors($validator);
                }
            }
            Session::flash('success', 'Your registration has been successfully completed...');
            return redirect::to('marchentRegistration');

    }

    //end class
}
