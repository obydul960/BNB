<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Model\ProductAddModel;
use App\Model\CategoryModel;
use App\Model\SubCategoryModel;
use App\Model\ProductOrderManageModel;
use App\Model\MarchentRegModel;
use App\Model\ProductImage;
use Session;
use Auth;
use DB;
class BnbManageProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //manage product show table by obydul date : 20-10-16.
     public function menageProductTable()
     {
         if (Auth::check()) {
             if (Auth::user()->user == 1) {
                 $manageProductList = ProductAddModel::orderBy('id', 'DESC')->get();
                 $categoryList = CategoryModel::lists('category_name', 'id');
                 $merchantList = MarchentRegModel::orderBy('id', 'DESC')->get();
                 return view('backend.BNB.bnbManageProduct', compact('manageProductList', 'categoryList', 'subcategoryList', 'merchantList'));
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
     // Manage product edelete by obydul date:20-10-16.
    public  function mangeProductEdite($product_id)
    {
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
                $manageProductList = ProductAddModel::where('product_id', '=', $product_id)->first();
                $mainCategory = CategoryModel::get();
                return view('backend.BNB.bnbManageProductEdit', compact('manageProductList', 'mainCategory'));
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
    // Manage product Search by obydul date:20-10-16
    public function manageProductSearch(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
                $date = $request->get('date');
                $marchent = $request->get('marchent');
                $category = $request->get('categoryName');
                $subcategory = $request->get('subCategoryName');
                $categoryList = CategoryModel::lists('category_name', 'id');
                $marchentList = MarchentRegModel::get();
                if ($date != null && $marchent != null && $category != null && $subcategory != null) {
                    $serechManageProduct = ProductAddModel::where('date', '=', $date)->where('marchent_id', '=', $marchent)->where('main_category', '=', $category)->where('sub_category', '=', $subcategory)->get();
                } elseif ($date != null && $marchent != null && $category != null) {
                    $serechManageProduct = ProductAddModel::where('date', '=', $date)->where('marchent_id', '=', $marchent)->where('main_category', '=', $category)->get();
                } elseif ($date != null && $marchent != null && $subcategory != null) {
                    $serechManageProduct = ProductAddModel::where('date', '=', $date)->where('marchent_id', '=', $marchent)->where('sub_category', '=', $subcategory)->get();
                } elseif ($date != null && $category != null && $subcategory != null) {
                    $serechManageProduct = ProductAddModel::where('date', '=', $date)->where('main_category', '=', $category)->where('sub_category', '=', $subcategory)->get();
                } elseif ($marchent != null && $category != null && $subcategory != null) {
                    $serechManageProduct = ProductAddModel::where('marchent_id', '=', $marchent)->where('main_category', '=', $category)->where('sub_category', '=', $subcategory)->get();
                } elseif ($date != null && $marchent != null) {
                    $serechManageProduct = ProductAddModel::where('date', '=', $date)->where('marchent_id', '=', $marchent)->get();
                } elseif ($date != null && $category != null) {
                    $serechManageProduct = ProductAddModel::where('date', '=', $date)->where('main_category', '=', $category)->get();
                } elseif ($date != null && $subcategory != null) {
                    $serechManageProduct = ProductAddModel::where('date', '=', $date)->where('sub_category', '=', $subcategory)->get();
                } elseif ($marchent != null && $category != null) {
                    $serechManageProduct = ProductAddModel::where('marchent_id', '=', $marchent)->where('main_category', '=', $category)->get();
                } elseif ($marchent != null && $subcategory != null) {
                    $serechManageProduct = ProductAddModel::where('marchent_id', '=', $marchent)->where('sub_category', '=', $subcategory)->get();
                } elseif ($category != null && $subcategory != null) {
                    $serechManageProduct = ProductAddModel::where('main_category', '=', $category)->where('sub_category', '=', $subcategory)->get();
                } elseif ($date != null) {
                    $serechManageProduct = ProductAddModel::where('date', '=', $date)->get();
                } elseif ($marchent != null) {
                    $serechManageProduct = ProductAddModel::where('marchent_id', '=', $marchent)->get();
                } elseif ($category != null) {
                    $serechManageProduct = ProductAddModel::where('main_category', '=', $category)->get();
                } elseif ($subcategory != null) {
                    $serechManageProduct = ProductAddModel::where('sub_category', '=', $subcategory)->get();
                } else {
                    $serechManageProduct=ProductAddModel::orderBy('id','DESC')->get();
                }
                return view('backend.BNB.bnbManageProductSearchTable', compact('serechManageProduct', 'categoryList', 'marchentList'));
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

    //manage product update by obydul date:20-10-16
    public function manageProductUpdate(Request $request,$product_id){
        if(Auth::check()){
            if (Auth::user()->user == 1) {
                $productUpdate = ProductAddModel::find($product_id)->update([
                    'main_category' => $request->get('main_category'),
                    'sub_category' => $request->get('sub_category'),
                    'product_name' => $request->get('product_name'),
                    'code_no' => $request->get('code_no'),
                    'quantity' => $request->get('quantity'),
                    'buying_price' => $request->get('buying_price'),
                    'selling_price' => $request->get('selling_price'),
                    'commission' => $request->get('commission'),
                    'discount' => $request->get('discount'),
                    'supplier_name' => $request->get('supplier_name'),
                    'product_details' => $request->get('product_details')
                ]);
                Session::flash('success', 'Successfully  Update....');
                return redirect::to('BnbManageProduct');
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

     //manage product approval controll by obydul date: 20-10-16
     public function manageProductAcceptStatus(Request $request,$product_id){
        if(Auth::check()){
            if (Auth::user()->user == 1) {
                $productAvailable = ProductAddModel::where('product_id', $product_id)->update(['accept_status' => $request->get('acceptStatus')]);
                Session::flash('success', 'Successfully status updated.....');
                return redirect::to('BnbManageProduct');
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

     // Mange product home page show or hide by obydul date:26-10-16
    public function manageProductViewStatus(Request $request,$product_id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $productHomeView = ProductAddModel::where('product_id', $product_id)->update(['view_status' => $request->get('viewStatus')]);
                Session::flash('success', 'Successfully.....');
                return redirect::to('BnbManageProduct');
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
    //mange product delete by obydul date: 20-1016
     public function  manageProductDelete($product_id){
        if(Auth::check()){
            if (Auth::user()->user == 1) {
                $mangeProductDelete = ProductAddModel::where('product_id', '=', $product_id);
                $mangeProductDelete->delete();

                $imageDelete = ProductImage::where('product_id', '=', $product_id)->get();
                foreach ($imageDelete as $productImage) {
                    $file_path = 'Belogin/public/product_image/' . $productImage->product_image;
                    unlink($file_path);
                    $productImage->delete();
                }
                return redirect::to('BnbManageProduct');
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

     // Manage produt view status by obydul date:22-10-16
    public function viewProductStatus()
    {
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
                $productList = ProductOrderManageModel::orderBy('id','DESC')->get();
                $categoryList = CategoryModel::lists('category_name', 'id');
               // $subcategoryList = SubCategoryModel::get();
                $marchentList = MarchentRegModel::orderBy('id','DESC')->get();
                return view('backend.BNB.viewProductStatus', compact('productList', 'categoryList', 'subcategoryList', 'marchentList'));
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
    // Manage product Search table show by obydul date:20-10-16
    public function viewManageProductSearchTable(Request $request){
        if (Auth::check()) {

            if (Auth::user()->user == 1) {

                $date = $request->get('date');
                $marchent = $request->get('marchent');
                $category = $request->get('categoryName');
                $subcategory = $request->get('subCategoryName');
                $categoryList = CategoryModel::lists('category_name', 'id');
                $marchentList = MarchentRegModel::get();
                if ($date != null && $marchent != null && $category != null && $subcategory != null) {
                    $viewProductStatus = ProductOrderManageModel::where('date', '=', $date)->where('marchent_id', '=', $marchent)->where('category', '=', $category)->where('subcategory', '=', $subcategory)->get();
                } elseif ($date != null && $marchent != null && $category != null) {
                    $viewProductStatus = ProductOrderManageModel::where('date', '=', $date)->where('marchent_id', '=', $marchent)->where('category', '=', $category)->get();
                } elseif ($date != null && $marchent != null && $subcategory != null) {
                    $viewProductStatus = ProductOrderManageModel::where('date', '=', $date)->where('marchent_id', '=', $marchent)->where('subcategory', '=', $subcategory)->get();
                } elseif ($date != null && $category != null && $subcategory != null) {
                    $viewProductStatus = ProductOrderManageModel::where('date', '=', $date)->where('category', '=', $category)->where('subcategory', '=', $subcategory)->get();
                } elseif ($marchent != null && $category != null && $subcategory != null) {
                    $viewProductStatus = ProductOrderManageModel::where('marchent_id', '=', $marchent)->where('category', '=', $category)->where('subcategory', '=', $subcategory)->get();
                } elseif ($date != null && $marchent != null) {
                    $viewProductStatus = ProductOrderManageModel::where('date', '=', $date)->where('marchent_id', '=', $marchent)->get();
                } elseif ($date != null && $category != null) {
                    $viewProductStatus = ProductOrderManageModel::where('date', '=', $date)->where('category', '=', $category)->get();
                } elseif ($date != null && $subcategory != null) {
                    $viewProductStatus = ProductOrderManageModel::where('date', '=', $date)->where('subcategory', '=', $subcategory)->get();
                } elseif ($marchent != null && $category != null) {
                    $viewProductStatus = ProductOrderManageModel::where('marchent_id', '=', $marchent)->where('category', '=', $category)->get();
                } elseif ($marchent != null && $subcategory != null) {
                    $viewProductStatus = ProductOrderManageModel::where('marchent_id', '=', $marchent)->where('subcategory', '=', $subcategory)->get();
                } elseif ($category != null && $subcategory != null) {
                    $viewProductStatus = ProductOrderManageModel::where('category', '=', $category)->where('subcategory', '=', $subcategory)->get();
                } elseif ($date != null) {
                    $viewProductStatus = ProductOrderManageModel::where('date', '=', $date)->get();
                } elseif ($marchent != null) {
                    $viewProductStatus = ProductOrderManageModel::where('marchent_id', '=', $marchent)->get();
                } elseif ($category != null) {
                    $viewProductStatus = ProductOrderManageModel::where('category', '=', $category)->get();
                } elseif ($subcategory != null) {
                    $viewProductStatus = ProductOrderManageModel::where('subcategory', '=', $subcategory)->get();
                } else {
                    $viewProductStatus = ProductOrderManageModel::get();
                }
                return view('backend.BNB.viewProductStatusSearchTable', compact('viewProductStatus', 'categoryList', 'marchentList', 'productList'));
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
