<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\ProductOrderManageModel;
use App\Model\ProductModel;
use App\Model\Hotel\AddRomeModel;
use App\Model\Hotel\BookingOrderModel;
use App\Model\Tourist\TouristOrderModel;
use App\Model\Tourist\TouristManageModel;
use App\Model\SliderModel;
use App\Model\MarchentRegModel;
use App\Model\MainManuModel;
use App\Model\ProductAddModel;
use App\User;
use DB;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if (Auth::check()) {
            $todayOrder = ProductOrderManageModel::Where('marchent_id', '=', Auth::user()->user_id)->count();
            $bnbTodayOrder = ProductOrderManageModel::count();
            $totalProduct = ProductModel::Where('marchent_id', '=', Auth::user()->user_id)->count();
            $bnbTotalProduct = ProductModel::count();
            $totalFashionProfit = ProductOrderManageModel::Where('marchent_id', '=', Auth::user()->user_id)->sum('merchant_profit');
            $bnbTotalFashionProfit = ProductOrderManageModel::sum('merchant_profit');
            $totalFashionCommission = ProductOrderManageModel::Where('marchent_id', '=', Auth::user()->user_id)->sum('bnb_commission');
            $bnbTotalFashionCommission = ProductOrderManageModel::sum('bnb_commission');
            $totalHotelRoom = AddRomeModel::Where('marchent_id', '=', Auth::user()->user_id)->count();
            $bnbTotalHotelRoom = AddRomeModel::count();
            $totalHotelProfit = BookingOrderModel::Where('marchent_id', '=', Auth::user()->user_id)->sum('merchant_profit');
            $bnbTotalHotelProfit = BookingOrderModel::sum('merchant_profit');
            $totalHotelCommission = BookingOrderModel::Where('marchent_id', '=', Auth::user()->user_id)->sum('bnb_commission');
            $bnbTotalHotelCommission = BookingOrderModel::sum('bnb_commission');
            $totalpackageNumber = TouristManageModel::Where('marchent_id', '=', Auth::user()->user_id)->count();
            $bnbTotalpackageNumber = TouristManageModel::count();
            $totalTourProfit = TouristOrderModel::Where('marchent_id', '=', Auth::user()->user_id)->sum('merchant_profit');
            $bnbTotalTourProfit = TouristOrderModel::sum('merchant_profit');
            $totalTourCommission = TouristOrderModel::Where('marchent_id', '=', Auth::user()->user_id)->sum('bnb_commission');
            $bnbTotalTourCommission = TouristOrderModel::sum('bnb_commission');
            $totalMerchantFashion = User::where('user', '=', 2)->count();
            $totalMerchantHotel = User::where('user', '=', 3)->count();
            $totalMerchantTour = User::where('user', '=', 4)->count();
            $totalOrder = ProductOrderManageModel::count();
            $totalRefund = ProductOrderManageModel::where('status', '=', 4)->count();
            $totalCommission = DB::table('product_add')->sum('bnb_commission');
            $productOrderList = ProductOrderManageModel::Where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->take(10)->get();
            $bnbproductOrderList = ProductOrderManageModel::orderBy('id', 'DESC')->take(10)->get();
            $roomOrderList = BookingOrderModel::Where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->take(10)->get();
            $bnbRoomOrderList = BookingOrderModel::orderBy('id', 'DESC')->take(10)->get();
            $touristOderList = TouristOrderModel::Where('marchent_id', '=', Auth::user()->user_id)->orderBy('id', 'DESC')->take(10)->get();
            $bnbTouristOderList = TouristOrderModel::orderBy('id', 'DESC')->take(10)->get();
            $totalDelivered = ProductOrderManageModel::where('status', '=', 1)->count();
            $totalPending = ProductOrderManageModel::where('status', '=', 0)->count();
            $totalConfirmed = ProductOrderManageModel::where('status', '=', 3)->count();
            $totalCancelled = ProductOrderManageModel::where('status', '=', 2)->count();

            //$totalProfit=DB::table('product_add')->Where('marchent_id','=',Auth::user()->user_id)->sum('id');
            return view('welcome', compact('bnbTodayOrder', 'bnbproductOrderList', 'bnbTouristOderList', 'bnbRoomOrderList',
             'bnbTotalProduct', 'bnbTotalTourCommission', 'bnbTotalTourProfit', 'bnbTotalpackageNumber',
             'bnbTotalHotelCommission', 'bnbTotalHotelRoom', 'bnbTotalHotelProfit', 'bnbTotalFashionProfit',
             'bnbTotalFashionCommission', 'totalMerchantFashion', 'totalTourProfit', 'totalTourCommission',
             'totalHotelProfit', 'totalHotelCommission', 'totalpackageNumber', 'totalFashionCommission',
              'totalFashionProfit', 'totalHotelRoom', 'touristOderList', 'roomOrderList', 'totalMerchantHotel',
              'totalMerchantTour', 'totalProduct', 'totalOrder', 'totalDelivered', 'totalPending', 'todayOrder',
              'totalConfirmed', 'totalCancelled', 'totalRefund', 'totalCommission', 'productOrderList'));
        }
        else{
            Session::flash('error', 'Sorry access denied!');
            return redirect::to('home');
        }
    }

    public function homepage(){
        //$slider = SliderModel::orderBy('id','DESC')->take(5)->get();
        $popularBrandsOne=MarchentRegModel::where('logo_indexing','=',1)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsTwo=MarchentRegModel::where('logo_indexing','=',2)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsThree=MarchentRegModel::where('logo_indexing','=',3)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsFour=MarchentRegModel::where('logo_indexing','=',4)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsFive=MarchentRegModel::where('logo_indexing','=',5)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsSix=MarchentRegModel::where('logo_indexing','=',6)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsSeven=MarchentRegModel::where('logo_indexing','=',7)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsEight=MarchentRegModel::where('logo_indexing','=',8)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsNine=MarchentRegModel::where('logo_indexing','=',9)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();
        $popularBrandsTen=MarchentRegModel::where('logo_indexing','=',10)
        ->where('status','=',1)
        ->where('popular_brand','=',1)
        ->first();

        $fashion=DB::table('product_add')
            ->join('product_image', 'product_add.product_id', '=', 'product_image.product_id')
            ->where('product_add.main_manu',2)
            ->select('product_add.*', 'product_image.*')
            ->get();
        $household=DB::table('product_add')
            ->join('product_image', 'product_add.product_id', '=', 'product_image.product_id')
            ->where('product_add.main_manu',6)
            ->select('product_add.*', 'product_image.*')
            ->get();
        $decorateor=DB::table('product_add')
            ->join('product_image', 'product_add.product_id', '=', 'product_image.product_id')
            ->where('product_add.main_manu',5)
            ->select('product_add.*', 'product_image.*')
            ->get();
        $hotel=DB::table('hotel_manage')
            ->join('hotel_image', 'hotel_manage.room_id', '=', 'hotel_image.room_id')
            ->select('hotel_manage.*', 'hotel_image.*')

            ->get(); 
        $tourist=DB::table('turiest_manage')
            ->join('package_image', 'turiest_manage.package_id', '=', 'package_image.package_id')
            ->select('turiest_manage.*', 'package_image.*')
            ->get();               
        return view('webhome',compact('slider','popularBrandsOne','popularBrandsTwo','popularBrandsThree','popularBrandsFour','popularBrandsFive','popularBrandsSix','popularBrandsSeven','popularBrandsEight','popularBrandsNine','popularBrandsTen','fashion','household','decorateor','hotel','tourist'));
    }




public function login(){
   return view('front_web.login');
}




}
