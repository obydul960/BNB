<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\SliderModel;
use App\Model\MarchentRegModel;
use App\Model\AllUserModel;
use App\Model\district;
use App\Model\division;
use App\Model\ProductAddModel;
use App\Model\AddRomeModel;
use App\Model\MainManuModel;
use App\User;
use Hash;
use Session;
use Auth;
use Input;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class WebController extends Controller{
	// show normal user login form.
	public function login(){
		return view('front_web.login');
	}
    // home menu show
public function indexAjax(messageRequest $request){
    $id=$request->id;
    $category=MainManuModel::where('id',$id)->first();
    $data=array('data'=>$category);
    return $data;
}

	// normal user login system
	public function userLogin(Request $request){
		$validator = Validator::make($request->all(), [
                'email' => 'required',
                'password'=>'required'
            ]);
            if ($validator->fails()){
                Session::flash('error', 'Something !');
                return redirect::to("userLogin");
            } else {
		          if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'status' => 1,'user'=>0])){
                  if (Auth::check()){
                      Session::flash('success', 'Logged in successfully');
                       return redirect::to("/");
            }
            else{
            	return redirect::to("userLogin");
            }
        }else{
            Session::flash('error', 'Something went wrong try again 2.....!');
            return redirect::to("userLogin");
        }
    }


	}

    public function userProfileIndex(){
         if(Auth::check()){
            if(Auth::user()->user==0){
                // all division
                $division=division::lists('name', 'id');
                $urserInfo=AllUserModel::where('user_id',Auth::user()->user_id)->first();
             return view('front_web.userProfile',compact('urserInfo','division'));
     }
     else{
         Session::flash('error', 'Sorry access denied!');
         return redirect::to('/');
     }
    }
    else{
      Session::flash('error', 'Please try again later...');
      return redirect::to('/');
    }
}

// user registation
public function userReg(){
    return view('front_web.userRegistaiton');
}
// user registation store
public function userRegistation(Request $request){
    $validator = Validator::make($request->all(), [
                'fullName' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'password' => 'required'
            ]);
            if ($validator->fails()){
                Session::flash('error', 'Something want wrong !');
                return redirect::to("userReg");
            }
            else{
                $password = $request->get('password');
                $confirmPassword = $request->get('confirmPassword');
                if ($password == $confirmPassword) {
                $userInfo = new User();
                $userId = uniqid();
                //$password=$request->get('password');
                $userInfo->user_id = $userId;
                $userInfo->name =$request->get('fullName');
                $userInfo->email =$request->get('email');
                $userInfo->phone_number =$request->get('mobile');
                $userInfo->password =Hash::make($password);
                $userInfo->save();
                $allUserTb= new AllUserModel();
                $allUserTb->user_id=$userId;
                $allUserTb->email=$request->get('email');
                $allUserTb->password=Hash::make($password);
                $allUserTb->name=$request->get('fullName');
                $allUserTb->phone=$request->get('mobile');
                $allUserTb->save();
                Session::flash('success', 'Registation successfully completed');
                return redirect::to('userReg');
            }
            }

}


// user profile update
public function userProfielUpdate(Request $request,$user_id){
    if(Auth::check()){
        $emailCheack=$request->get('email');
        if($emailCheack!= null){
             $checkEmail = User::where('email', $emailCheack)->count();
             if($checkEmail>0){
                Session::flash('error', 'E-mail already exists..!');
                return redirect::to('userprofile');
             }
             else{
               $userTb =User::where('user_id',$user_id)->update([
                'email' => $request->get('email')]);
               $userTb =AllUserModel::where('user_id',$user_id)->update([
                'email' => $request->get('email')]);
             }

        }
        $profileUpdate = AllUserModel::where('user_id','=',$user_id)->update([
                'name' => $request->get('fullName'),
                'phone' => $request->get('mobile'),
                'gender' => $request->get('gender'),
                'city' => $request->get('city'),
                'district' => $request->get('district')
            ]);
            Session::flash('success', 'Successfully updated');
            return redirect::to("userprofile");


        }
        else{
            Session::flash('error', 'Please try again later...');
            return redirect::to('/');
        }
    }

// merchant reg form
public function merchantReg(){
<<<<<<< HEAD:BNB/Belogin/app/Http/Controllers/Web/WebController.php
    $district=district::get();
    //dd($division);
  return view('front_web.merchantReg',compact('district'));  
=======
  return view('front_web.merchantReg');
>>>>>>> 60f3091c3f618138a30b9a3f9f93b82d7666f5ac:Belogin/app/Http/Controllers/Web/WebController.php
}

// merchant registation system
public function merchantRegistation(Request $request){
    //dd($request->all());
    $validator = Validator::make($request->all(), [
                'companyName' => 'required',
                'cityName' => 'required',
                'address' => 'required',
                'categoryName' => 'required',
                'compContactNo' => 'required',
                'companyEmail' => 'required',
                'password' => 'required',
                'confirmPassword' => 'required',
                'compWebsite' => 'required',
                'mobileNo' => 'required',
            ]);
            if ($validator->fails()){
                Session::flash('error', 'Something want wrong !');
                return redirect::to("merchantReg");
            }
            else{
                $password = $request->get('password');
                $confirmPassword = $request->get('confirmPassword');
                if ($password == $confirmPassword) {
                $userInfo = new User();
                $marchentTable = new MarchentRegModel();
                $userId = uniqid();
                $password=$request->get('password');
                $userInfo->user_id = $userId;
                $userInfo->name =$request->get('companyName');
                $userInfo->email =$request->get('companyEmail');
                $userInfo->phone_number =$request->get('compContactNo');
                $userInfo->password =Hash::make($password);
                $userInfo->user =$request->get('categoryName');
                $userInfo->save();


                if (Input::hasFile('profilePhoto')) {
                        $extension3 = Input::file('profilePhoto')->getClientOriginalExtension();
                        if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||$extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                            $image =Input::file('profilePhoto');
                            $createFileName=time() . '_' . $image->getClientOriginalName();
                            $image->move(public_path('product_image/logo'), $createFileName);
                        }

                    }
                    else{
                        $createFileName="" ;

                    }

                $marchentTable->user_id=$userId;
                $marchentTable->email=$request->get('companyEmail');
                $marchentTable->password=Hash::make($password);
                $marchentTable->company_name=$request->get('companyName');
                $marchentTable->address=$request->get('address');
                $marchentTable->phone=$request->get('compContactNo');
                $marchentTable->contact_person_phone=$request->get('mobileNo');
                $marchentTable->city=$request->get('cityName');
                $marchentTable->website=$request->get('compWebsite');
                $marchentTable->user_type=$request->get('categoryName');
                $marchentTable->company_logo = $createFileName;
                $marchentTable->save();
                Session::flash('success', 'Registation successfully completed');
                return redirect::to('merchantReg');
            }
            }
}


    // End class

		///add to card manage
    public function addtocart($pid,$pname,$qty,$price)
    {
       //return $pid;
         $pc = ProductAddModel::where('product_id','=',$pid)->first()->quantity;
				     if($pc > 0){
            Cart::add($pid, $pname, $qty, $price);
            Session::flash('success','Product was Added To Cart Successfully.');
            return redirect()->back();
        }
        else{
            Session::flash('error','Sorry. Product is Currently Not Available.');
            return redirect()->back();
        }
    }

    public function getmycart(){

        return view('cart',['data'=>Cart::content()]);

    }
  public function deleteCart($rowId){
        Cart::remove($rowId);
        Session::flash('success','The Item was Removed from the Cart Successfully.');
        return redirect()->back();
    }
}
