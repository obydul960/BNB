<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator; 
use App\Http\Requests;
use App\Model\ProductAddModel;
use App\Model\CategoryModel;
use App\Model\ProductImage;
use App\Model\obydulhaque;
use App\Http\Controllers\ImageOptimizer;
use App\Model\MainManuModel;
use Session;
use DB;
use Input;
use Auth;

class ProductAddConrtroller extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

     // Product Data Show Data Table by obydul
    public function productShowTable(){
        if(Auth::check()){
            if(Auth::user()->user==1 || Auth::user()->user==2) {
                $products = ProductAddModel::where('marchent_id', '=', Auth::user()->user_id)->get();
                $bnbproducts = ProductAddModel::orderBy('id','DESC')->get();
                $mainCategoryShow = CategoryModel::lists('category_name', 'id');
                $aa=MainManuModel::get();
                //$aa2=CategoryModel::where('manu_id')->get();
                $mainManu=MainManuModel::lists('manu_name', 'id');
                return view('backend.product.productTable', compact('products', 'bnbproducts', 'mainCategoryShow','mainManu','aa'));
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
     // Product insert/store by obydul
    public function productStore(Request $request){
        if(Auth::check()){
            if(Auth::user()->user==1 || Auth::user()->user==2) {
                $validator = Validator::make($request->all(), [
                    //'main_category' => 'required',
                    //'sub_category' => 'required',
                    'productName' => 'required',
                    'codeNumber' => 'required',
                    'productQuentity' => 'required|Integer',
                    'buying_price' => 'required|Integer',
                    'commission' => 'required|Integer',
                    'product_details' => 'required'
                ]);
                if ($validator->fails()) {
                    Session::flash('error', 'Something went wrong..!');
                    return redirect::to("productAdd");
                } else {
                    $createProduct = new ProductAddModel();
                    $p_id = uniqid();
                    $userId = Auth::user()->user_id;
                    $createProduct->marchent_id = $userId;
                    $createProduct->product_id = $p_id;
                    $createProduct->main_manu = $request->get('mainManu');
                    $createProduct->main_category = $request->get('main_category');
                    $createProduct->sub_category = $request->get('sub_category');
                    $createProduct->product_name = $request->get('productName');
                    $createProduct->code_no = $request->get('codeNumber');
                    $createProduct->quantity = $request->get('productQuentity');
                    $createProduct->buying_price = $request->get('buying_price');
                    $createProduct->discount = $request->get('discount');
                    $createProduct->selling_price = $request->get('selling_price');
                    $createProduct->commission = $request->get('commission');
                    $createProduct->bnb_commission = $request->get('bnbCommission');
                    $createProduct->supplier_name = $request->get('supplier_name');
                    $createProduct->product_details = $request->get('product_details');
                    $createProduct->date = date("d-m-Y");
                    $createProduct->save();
                    Session::flash('success', 'Successfully product store');
                    return redirect::to("productAdd");
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

    // Product update by obydul
    public function productUpdate(Request $request,$id){
    if(Auth::check()){
        if(Auth::user()->user==1) {
            $productUpdate = ProductAddModel::find($id)->update([
                'main_category' => $request->get('main_category'),
                'sub_category' => $request->get('sub_category'),
                'product_name' => $request->get('productName'),
                'code_no' => $request->get('codeNumber'),
                'quantity' => $request->get('productQuentity'),
                'buying_price' => $request->get('buying_price'),
                'selling_price' => $request->get('selling_price'),
                'commission' => $request->get('commission'),
                'bnb_commission' => $request->get('bnbCommission'),
                'discount' => $request->get('discount'),
                'supplier_name' => $request->get('supplier_name'),
                'product_details' => $request->get('product_details')
            ]);
            Session::flash('success', 'Successfully product store');
            return redirect::to("productAdd");
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

    // product delete by obydul
    public function productDelete($product_id){
        if(Auth::check()){
            if(Auth::user()->user==1) {
                $product = ProductAddModel::find($product_id)->delete();
                return redirect::to('productAdd');
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
    // indevisual image delete by obydul

    public function imageDelete(Request $request,$id){
        if(Auth::check()){
            if(Auth::user()->user==1) {
                $categoryImage = ProductImage::find($id);
                //return $categoryImage->details_image_one;

                if ($request->get('ImageOne') != null) {
                    $file_path = 'Belogin/public/product_image/category_image/' . $categoryImage->home_Cat_image;
                    unlink($file_path);
                    $categoryImage = ProductImage::where('id', $id)->update([
                        'home_Cat_image' => null]);
                } elseif ($request->get('imageTwo') != null) {
                    $filePathOne = 'Belogin/public/product_image/details_image/' . $categoryImage->details_image_one;
                    unlink($filePathOne);
                    $detailsImageOne = ProductImage::where('id', $id)->update([
                        'details_image_one' => null]);
                } elseif ($request->get('imageThree') != null) {
                    $filePathTwo = 'Belogin/public/product_image/details_image/' . $categoryImage->details_image_two;
                    unlink($filePathTwo);
                    $detailsImageTwo = ProductImage::where('id', $id)->update([
                        'details_image_two' => null]);
                } elseif ($request->get('imageFour') != null) {
                    $fileFour = 'Belogin/public/product_image/details_image/' . $categoryImage->details_image_three;
                    unlink($fileFour);
                    $detailsImagethree = ProductImage::where('id', $id)->update([
                        'details_image_three' => null]);
                } else {
                    return "Not found";
                }
                Session::flash('success', 'Successfully Delete.....');
                return redirect::to('productAdd');
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
    // Multiple Image Store by obydul
    public function multipleImageStore(Request $request){
        if(Auth::check()){
            if(Auth::user()->user==1 || Auth::user()->user==2) {
                $validator = Validator::make($request->all(), [
                    'homeImage' => 'mimes:jpeg,jpg,bmp,png,gif',
                    'detailsOne' => 'mimes:jpeg,jpg,bmp,png,gif',
                    'detailsTwo' => 'mimes:jpeg,jpg,bmp,png,gif',
                    'detailsThree' => 'mimes:jpeg,jpg,bmp,png,gif'
                ]);
                if ($validator->fails()) {
                    Session::flash('error', 'something wrong image upload...!');
                    return redirect::to("productAdd");
                } else {
                    $porductID = $request->get('productIdImage');
                    $cheackProductId = ProductImage::where('product_id', $porductID)->count();
                    if ($cheackProductId > 0) {
                        if (Input::hasFile('homeImage')) {
                            $porductID = $request->get('productIdImage');
                            $extension3 = Input::file('homeImage')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('homeImage');
                                $createFileName = $porductID . '_' . time() . '_' . $image->getClientOriginalExtension();
                                $image->move(public_path('product_image/category_image'), $createFileName);
                                $slider_update = ProductImage::where('product_id', '=', $porductID)->update(['home_Cat_image' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('productAdd');
                            }

                        }

                        if (Input::hasFile('detailsOne')) {
                            $porductID = $request->get('productIdImage');
                            $extension3 = Input::file('detailsOne')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('detailsOne');
                                $createFileName = $porductID . '_' . time() . '_' . $image->getClientOriginalExtension();
                                $image->move(public_path('product_image/details_image'), $createFileName);
                                $slider_update = ProductImage::where('product_id', '=', $porductID)->update(['details_image_one' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('productAdd');
                            }

                        }

                        if (Input::hasFile('detailsTwo')) {
                            $porductID = $request->get('productIdImage');
                            $extension3 = Input::file('detailsTwo')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('detailsTwo');
                                $createFileName = $porductID . '_' . time() . '_' . $image->getClientOriginalExtension();
                                $image->move(public_path('product_image/details_image'), $createFileName);
                                $slider_update = ProductImage::where('product_id', '=', $porductID)->update(['details_image_two' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('productAdd');
                            }

                        }

                        if (Input::hasFile('detailsThree')) {
                            $porductID = $request->get('productIdImage');
                            $extension3 = Input::file('detailsThree')->getClientOriginalExtension();
                            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                            ) {
                                $image = Input::file('detailsThree');
                                $createFileName = $porductID . '_' . time() . '_' . $image->getClientOriginalExtension();
                                $image->move(public_path('product_image/details_image'), $createFileName);
                                $slider_update = ProductImage::where('product_id', '=', $porductID)->update(['details_image_three' => $createFileName]);
                                Session::flash('success', 'Successfully.....');
                                return redirect::to('productAdd');
                            }

                        }

                    } else {
                        $porductID = $request->get('productIdImage');
                        if ($request->file('homeImage') != null && $request->file('detailsOne') && $request->file('detailsTwo') && $request->file('detailsThree')) {

                            if (Input::hasFile('homeImage')) {
                                $extension3 = Input::file('homeImage')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $homeImage = $request->file('homeImage');
                                    $homeimageName = $porductID . '_' . time() . '_' . $homeImage->getClientOriginalName();
                                    $homeImage->move(public_path('product_image/category_image'), $homeimageName);
                                }
                            }
                            if (Input::hasFile('detailsOne')) {
                                $extension3 = Input::file('detailsOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsOne = $request->file('detailsOne');
                                    $detailsImageOneName = $porductID . '_' . time() . '_' . $detailsOne->getClientOriginalName();
                                    $detailsOne->move(public_path('product_image/details_image'), $detailsImageOneName);
                                }
                            }

                            if (Input::hasFile('detailsTwo')) {
                                $extension3 = Input::file('detailsTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsTwo = $request->file('detailsTwo');
                                    $detailsTowImageName = $porductID . '_' . time() . '_' . $detailsTwo->getClientOriginalName();
                                    $detailsTwo->move(public_path('product_image/details_image'), $detailsTowImageName);
                                }
                            }

                            if (Input::hasFile('detailsThree')) {
                                $extension3 = Input::file('detailsThree')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsThree = $request->file('detailsThree');
                                    $detailsThreeImageName = $porductID . '_' . time() . '_' . $detailsThree->getClientOriginalName();
                                    $detailsThree->move(public_path('product_image/details_image'), $detailsThreeImageName);
                                }
                            }


                            $imageInsert = new ProductImage();
                            $imageInsert->product_id = $porductID;
                            $imageInsert->home_Cat_image = $homeimageName;
                            $imageInsert->details_image_one = $detailsImageOneName;
                            $imageInsert->details_image_two = $detailsTowImageName;
                            $imageInsert->details_image_three = $detailsThreeImageName;
                            $imageInsert->save();
                        } elseif ($request->file('homeImage') != null && $request->file('detailsOne') && $request->file('detailsTwo')) {
                            if (Input::hasFile('homeImage')) {
                                $extension3 = Input::file('homeImage')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $homeImage = $request->file('homeImage');
                                    $homeimageName = $porductID . '_' . time() . '_' . $homeImage->getClientOriginalName();
                                    $homeImage->move(public_path('product_image/category_image'), $homeimageName);
                                }
                            }
                            if (Input::hasFile('detailsOne')) {
                                $extension3 = Input::file('detailsOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsOne = $request->file('detailsOne');
                                    $detailsImageOneName = $porductID . '_' . time() . '_' . $detailsOne->getClientOriginalName();
                                    $detailsOne->move(public_path('product_image/details_image'), $detailsImageOneName);
                                }
                            }

                            if (Input::hasFile('detailsTwo')) {
                                $extension3 = Input::file('detailsTwo')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsTwo = $request->file('detailsTwo');
                                    $detailsTowImageName = $porductID . '_' . time() . '_' . $detailsTwo->getClientOriginalName();
                                    $detailsTwo->move(public_path('product_image/details_image'), $detailsTowImageName);
                                }
                            }


                            $imageInsert = new ProductImage();
                            $imageInsert->product_id = $porductID;
                            $imageInsert->home_Cat_image = $homeimageName;
                            $imageInsert->details_image_one = $detailsImageOneName;
                            $imageInsert->details_image_two = $detailsTowImageName;
                            $imageInsert->save();
                        } elseif ($request->file('homeImage') != null && $request->file('detailsOne') != null && $request->file('detailsThree') != null) {
                            if (Input::hasFile('homeImage')) {
                                $extension3 = Input::file('homeImage')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $homeImage = $request->file('homeImage');
                                    $homeimageName = $porductID . '_' . time() . '_' . $homeImage->getClientOriginalName();
                                    $homeImage->move(public_path('product_image/category_image'), $homeimageName);
                                }
                            }
                            if (Input::hasFile('detailsOne')) {
                                $extension3 = Input::file('detailsOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsOne = $request->file('detailsOne');
                                    $detailsImageOneName = $porductID . '_' . time() . '_' . $detailsOne->getClientOriginalName();
                                    $detailsOne->move(public_path('product_image/details_image'), $detailsImageOneName);
                                }
                            }

                            if (Input::hasFile('detailsThree')) {
                                $extension3 = Input::file('detailsThree')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsThree = $request->file('detailsThree');
                                    $detailsThreeImageName = $porductID . '_' . time() . '_' . $detailsThree->getClientOriginalName();
                                    $detailsThree->move(public_path('product_image/details_image'), $detailsThreeImageName);
                                }
                            }

                            $imageInsert = new ProductImage();
                            $imageInsert->product_id = $porductID;
                            $imageInsert->home_Cat_image = $homeimageName;
                            $imageInsert->details_image_one = $detailsImageOneName;
                            $imageInsert->details_image_three = $detailsThreeImageName;
                            $imageInsert->save();
                        } elseif ($request->file('homeImage') != null && $request->file('detailsOne') != null) {
                            if (Input::hasFile('homeImage')) {
                                $extension3 = Input::file('homeImage')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $homeImage = $request->file('homeImage');
                                    $homeimageName = $porductID . '_' . time() . '_' . $homeImage->getClientOriginalName();
                                    $homeImage->move(public_path('product_image/category_image'), $homeimageName);
                                }
                            }
                            if (Input::hasFile('detailsOne')) {
                                $extension3 = Input::file('detailsOne')->getClientOriginalExtension();
                                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP'
                                ) {
                                    $detailsOne = $request->file('detailsOne');
                                    $detailsImageOneName = $porductID . '_' . time() . '_' . $detailsOne->getClientOriginalName();
                                    $detailsOne->move(public_path('product_image/details_image'), $detailsImageOneName);
                                }
                            }

                            $imageInsert = new ProductImage();
                            $imageInsert->product_id = $porductID;
                            $imageInsert->home_Cat_image = $homeimageName;
                            $imageInsert->details_image_one = $detailsImageOneName;
                            $imageInsert->save();
                        }

                    }


                    Session::flash('success', 'Successfully Slider Image Uploaded.');
                    return redirect::to('productAdd');
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

    //end classs
}
