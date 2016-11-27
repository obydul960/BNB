<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Approached\Support\Facades\ImageOptimizer;
use App\Http\Requests;
use App\Model\CategoryModel;
use App\Model\SubCategoryModel;
use App\Model\MainManuModel;
use App\User;
use Session;
use DB;
use Auth;



class CategoryController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  // Main manu form
  public function mainManu(){
    if(Auth::check()){
      if(Auth::user()->user==1){
    $mainManuList=MainManuModel::orderBy('id','ASC')->get();
    return view('backend.category.mainManu',compact('mainManuList'));
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
  // main manu store
  public function mainManuStore(Request $request){
        if(Auth::check()){
        if(Auth::user()->user==1){
            $validator = Validator::make($request->all(), [
                'mainManu' => 'required|min:2|max:100'
            ]);
            if ($validator->fails()) {
                Session::flash('error', 'Something went wrong..!');
                return redirect::to("maninManu");
            } else {
                $mainManuCheack = $request->get('mainManu');
                if ($mainManuCheack != null) {
                    $checkManu = MainManuModel::where('manu_name', $mainManuCheack)->count();
                    if ($checkManu > 0) {
                        Session::flash('error', 'Main manu name already exists..!');
                        return redirect::to('maninManu');
                    } else {
                        $mainManu = new MainManuModel();
                        $mainManu->manu_name=$request->get('mainManu');
                        $mainManu->save();
                        Session::flash('success', 'Main manu successfully  store....');
                        return redirect::to('maninManu');
                    }

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

    //Main manu update by obydul date:21-11-16
    public function mainManuUpdate(Request $request,$id){
      if(Auth::check()){
        if(Auth::user()->user==1) {
            $mainManuChack = $request->get('mainManu');
            if ($mainManuChack != null) {
                $checkManu = MainManuModel::where('manu_name', $mainManuChack)->count();
                if ($checkManu > 0) {
                    Session::flash('error', 'Main manu name already exists...');
                    return redirect::to('maninManu');
                } else {
                    $mainManu = MainManuModel::where('id', '=', $id)->update(['manu_name' => $request->get('mainManu')]);
                    Session::flash('success', 'Main manu successfully  update.');
                    return redirect::to('maninManu');
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
      //Main manu delete by obydul date: 21-11-16
    public function  mainManuDelete($id){
      if(Auth::check()){
          if(Auth::user()->user==1) {
              $mainCategory = MainManuModel::find($id)->delete();
              return redirect::to('maninManu');
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

    // main manu status 1=show and 0= hidden by obydul date:29-10-16
    public function mainManuStatus(Request $request,$id){
        if(Auth::check()) {
            if(Auth::user()->user==1) {
                $mainManuStatus = MainManuModel::where('id', $id)->update(['status' => $request->get('mainManuStatus')]);
                Session::flash('success', 'Successfully status updated.....');
                return redirect::to('maninManu');
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

    //main manu indexing number wish show by obydul date:21-11-16
    public function manuIndexing(Request $request,$id){
        if(Auth::check()) {
            if (Auth::user()->user == 1) {
                $manuIndex = $request->get('manuIndexing');
                if ($manuIndex != null) {
                    $manuCheck = MainManuModel::where('manu_indexing', $manuIndex)->count();
                    if ($manuCheck > 0) {
                        Session::flash('error', 'Main manu indexing number already exists...');
                        return redirect::to('maninManu');
                    } else {
                        $manuIndexing = MainManuModel::where('id', $id)->update(['manu_indexing' => $request->get('manuIndexing')]);
                        Session::flash('success', 'Successfully indexing updated.....');
                        return redirect::to('maninManu');
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

  // Main category from show by obydul
   public function categoryAdd(){
    if(Auth::check()){
        if(Auth::user()->user==1){
            $mainCategoryShow = CategoryModel::orderBy('id', 'DESC')->get();
            return view('backend.category.mainCategory',compact('mainCategoryShow'));
        }else{
            Session::flash('error', 'Sorry access denied!');
            return redirect::to('home');
        }
     }
     else{
         Session::flash('error', 'Please try again later...');
         return redirect::to('/');
     }
   }


 // main category store by obydul date:18/9/16
   public function mainCategoryStore(Request $request){
    if(Auth::check()){
        if(Auth::user()->user==1){
            $validator = Validator::make($request->all(), [
                'mainCategory' => 'required|min:2|max:100'
            ]);
            if ($validator->fails()) {
                Session::flash('error', 'Something went wrong..!');
                return redirect::to("categoryManage");
            } else {
                $mainCategoryCheack = $request->get('mainCategory');
                if ($mainCategoryCheack != null) {
                    $check = CategoryModel::where('category_name', $mainCategoryCheack)->count();
                    if ($check > 0) {
                        Session::flash('error', 'Main category name already exists..!');
                        return redirect::to('categoryManage');
                    } else {
                        $mainCategory = new CategoryModel();
                        $mainCategory->category_name = $request->get('mainCategory');
                        $mainCategory->save();
                        Session::flash('success', 'Main category successfully  store....');
                        return redirect::to('categoryManage');
                    }

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

  //Main category update by obydul date:19-9-16
    public function mainCategoryUpdate(Request $request,$id){
      if(Auth::check()){
        if(Auth::user()->user==1) {
            $mCategoryChack = $request->get('mainCategory');
            if ($mCategoryChack != null) {
                $check = CategoryModel::where('category_name', $mCategoryChack)->count();
                if ($check > 0) {
                    Session::flash('error', 'Main category name already exists...');
                    return redirect::to('categoryManage');
                } else {
                    $mainCategory = CategoryModel::where('id', '=', $id)->update(['category_name' => $request->get('mainCategory')]);
                    Session::flash('success', 'Main Category Successfully  Update.');
                    return redirect::to('categoryManage');
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
    //Main category delete by obydul date: 18-9-16
    public function  mainCategoryDelete($id){
      if(Auth::check()){
          if(Auth::user()->user==1) {
              $mainCategory = CategoryModel::find($id)->delete();
              return redirect::to('categoryManage');
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
    // Sub Category From by obydul date:16-10-16
    public function subCategoryFrom()
    {
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
            $mainCategoryShow = DB::table('category')->orderBy('id', 'ASC')->get();
            $subCategoryShow = DB::table('sub_category')
                ->join('category', 'sub_category.main_category', '=', 'category.id')
                ->select('category.category_name', 'sub_category.id', 'sub_category.main_category', 'sub_category.sub_category_name')
                ->orderBy('id', 'DESC')
                ->get();
            return view('backend.category.subCategory', compact('mainCategoryShow', 'subCategoryShow'));
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

    //Sub Category add by obydul date:19-9-16
    public function subCategoryStore(Request $request){
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
            $validator = validator::make($request->all(), [
                'mainCategoryId' => 'required',
                'SubCategory' => 'required|min:2|max:100'
            ]);
            if ($validator->fails()) {
                Session::flash('error', 'Something went wrong..!');
                return redirect::to("subCategoryManage");
            } else {
                $subCatCheack = $request->get('SubCategory');
                if ($subCatCheack != null) {
                    $check = SubCategoryModel::where('sub_category_name', $subCatCheack)->count();
                    if ($check > 0) {
                        Session::flash('error', 'sub category name already exists...');
                        return redirect::to('subCategoryManage');
                    } else {
                        $subCategory = new SubCategoryModel();
                        $subCategory->main_category = $request->get('mainCategoryId');
                        $subCategory->sub_category_name = $request->get('SubCategory');
                        $subCategory->save();
                        Session::flash('success', 'Sub Category Successfully  Inserted....');
                        return redirect::to("subCategoryManage");
                    }
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

    //sub category update by obydul date:19-9-16
    public function subcategoryUpdate(Request $request,$id)
    {
        if (Auth::check()) {
            if (Auth::user()->user == 1) {
            $subCatChack = $request->get('SubCategory');
            if ($subCatChack != null) {
                $check = SubCategoryModel::where('sub_category_name', $subCatChack)->count();
                if ($check > 0) {
                    Session::flash('error', 'Sub category  already exists...');
                    return redirect::to('subCategoryManage');
                } else {
                    $subCategory = SubCategoryModel::where('id', '=', $id)->update(['main_category' => $request->get('mainCategoryId'),
                        'sub_category_name' => $request->get('SubCategory')]);
                    Session::flash('success', 'Sub Category Successfully  Update...');
                    return redirect::to('subCategoryManage');
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

    //sub category delete by obydul date:19-9-16
    public function subCategoryDelete($id){
      if(Auth::check()){
          if (Auth::user()->user == 1) {
              $mainCategory = SubCategoryModel::find($id)->delete();
              return redirect::to('subCategoryManage');
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
