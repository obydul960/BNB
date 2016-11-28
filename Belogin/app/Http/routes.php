<?php
// dashboard route
Route::auth();
Route::get('/home', 'HomeController@index');



Route::get('userLogin','web\WebController@login');
Route::post('userLogin','web\WebController@userLogin');
Route::get('userprofile','web\WebController@userProfileIndex');
Route::post('userprofileUpdate/{user_id}','web\WebController@userProfielUpdate');
Route::get('userReg','web\WebController@userReg');
Route::post('userReg','web\WebController@userRegistation');
Route::get('merchantReg','web\WebController@merchantReg');
Route::post('merchantReg','web\WebController@merchantRegistation');

// ajax menu
Route::controller('frontweb', 'web\AjaxMenuController');
Route::get('aa', 'web\AjaxMenuController@categorydetails');




Route::get('mainCategory', function(){

  $cat_id = Input::get('cat_id');

  $states = App\Model\CategoryModel::where('manu_id', '=', $cat_id)->get();

  return Response::json($states);
});

Route::get('subcatergory', function(){

  $cat_id = Input::get('cat_id');

  $districts = App\Model\SubCategoryModel::where('main_category', '=', $cat_id)->get();

  return Response::json($districts);
});




Route::get('/dashBoard', 'HomeController@dashBord');
//webhome
Route::get('/','HomeController@homepage');
//Category Manage by coustomJavascript date:7-9-16 (cmplete)
Route::get('maninManu','CategoryController@mainManu');
Route::post('maninManuStore','CategoryController@mainManuStore');
Route::post('mainManuUpdate/{id}','CategoryController@mainManuUpdate');
Route::get('mainManuDelete/{id}','CategoryController@mainManuDelete');
Route::post('mainManuStatus/{id}','CategoryController@mainManuStatus');
Route::post('mainManuIndexing/{id}','CategoryController@manuIndexing');
Route::get('categoryManage','CategoryController@categoryAdd');
Route::post('categoryManage','CategoryController@mainCategoryStore');
Route::post('categoryUpdate/{id}','CategoryController@mainCategoryUpdate');
Route::get('categoryDelete/{id}','CategoryController@mainCategoryDelete');
//sub category manage by coustomJavascript date:25-9-16 (complete)
Route::get('subCategoryManage','CategoryController@subCategoryFrom');
Route::post('subCategoryManage','CategoryController@subCategoryStore');
Route::post('subCategoryUpdate/{id}','CategoryController@subcategoryUpdate');
Route::get('subCategoryDelete/{id}','CategoryController@subCategoryDelete');
//product add by coustomJavascript (incomple)
Route::get('productAdd','ProductAddConrtroller@productShowTable');
//Route::get('productAdd/{id?}','ProductAddConrtroller@productEdit');
Route::post('productAdd','ProductAddConrtroller@productStore');
Route::post('productUpdate/{id}','ProductAddConrtroller@productUpdate');
Route::get('productDelete/{product_id}','ProductAddConrtroller@productDelete');
// seperate image delete
Route::post('imageDelect/{id}','ProductAddConrtroller@imageDelete');

        //Route::post('subCategory','ProductAddConrtroller@subCategory');
// product add multiple imge inserted by coustomJavascript (complete)
Route::post('multipleImageStore','ProductAddConrtroller@multipleImageStore');
// product manage by coustomJavascript (complete)
Route::get('productManage','ProductManageController@productDetailsShow');
Route::post('productStatus/{product_id}','ProductManageController@productStatus');
Route::post('storageStatus/{product_id}','ProductManageController@storageStatus');
// product order manage by coustomJavascript (complete)
Route::get('productOrderManage','ProductOrderManageController@productOrderManageTable');
Route::post('productOrderStatus/{id}','ProductOrderManageController@productOrderStatus');
Route::post('productOrderConfirmStatus/{id}','ProductOrderManageController@productOrderConfirmStatus');
Route::post('productSerch','ProductOrderManageController@productSearch');
//product order manage search auto sugest by obydl
Route::get('areaSearchAutocomplete',array('as'=>'areaSearchAutocomplete','uses'=>'ProductOrderManageController@areaSearchSuggestionAutocomplete'));


// product report by coustomJavascript
Route::get('productReport','ProductReportController@reportTable');
Route::post('productReport','ProductReportController@reportController');



// change password
Route::get('passwordChange','ChangePasswordController@index');
Route::post('passwordChange','ChangePasswordController@changePassword');




// Super Admin Panel controlling route

// product order
Route::get('BnbProductOrder','BnbProductOrderController@productOrderTable');
Route::post('BnbProductOrder/{product_code_no}','BnbProductOrderController@productOrderStatus');
// mange product
Route::get('BnbManageProduct','BnbManageProductController@menageProductTable');
Route::get('BnbManageEdit/{product_id}','BnbManageProductController@mangeProductEdite');
Route::post('BnbManageProductAcceptStatus/{product_id}','BnbManageProductController@manageProductAcceptStatus');
Route::get('BnbManageProductDelete/{product_id}','BnbManageProductController@manageProductDelete');
Route::post('BnbManageProductSubCategory','BnbManageProductController@manageProductSubCategoryShow');
Route::post('BnbManageProductUpdate/{product_id}','BnbManageProductController@manageProductUpdate');
///Route::post('BnbSubCategory','BnbManageProductController@subCategory');
Route::post('BnbManageProductViewStatus/{product_id}','BnbManageProductController@manageProductViewStatus');
//search manage product
Route::post('BnbManageProductSearch','BnbManageProductController@manageProductSearch');
//view product status
Route::get('viewProductStatus','BnbManageProductController@viewProductStatus');
Route::post('viewManageProductStatus','BnbManageProductController@viewManageProductSearchTable');
        //Route::post('viewProductSubCategory','BnbManageProductController@bnbManageProducSubCategoryId');
// vew manage profit Report
Route::get('BnbManageProfit','BnbLiveReportController@manageProfitList');
Route::post('BnbManageProfitReport','BnbLiveReportController@manageProfileReportShow');
// Manage Marchent by coustomJavascript : 25-10-16
Route::get('marchentManage','BnbMarchentManageController@merchantTable');
Route::post('marchentStatusManage/{user_id}','BnbMarchentManageController@merchantStatus');
Route::post('popularBrand/{user_id}','BnbMarchentManageController@popularBrandShow');
//slider Manage by coustomJavascript date:7-9-16
Route::get('sliderAdd','SliderController@sliderAdd');
Route::post('sliderStore','SliderController@sliderStore');
Route::get('SliderContrll','SliderController@sliderControll');
Route::post('SliderStatus/{id}','SliderController@sliderStatus');
Route::get('sliderDelete/{id}','SliderController@sliderDelete');
Route::post('sliderIndexing/{id}','SliderController@sliderIndexing');
Route::get('sliderEdit/{id}','SliderController@sliderEdit');
Route::post('sliderUpdate/{id}','SliderController@sliderUpdate');





// Mearchent Registaiton by coustomJavascript date : 7-9-16
Route::get('marchentRegistration','MarchentController@marchentReg');
Route::post('marchentRegistration','MarchentController@marchentStore');
// logo indexing numbering
Route::post('logoIndexing/{id}','BnbMarchentManageController@popularBrandIndexing');

// company profile show
Route::get('companyProfile/{id}','Web\WebController@companyProfile');


// Hotel marchent controll
Route::get('hotelManage','Hotel\HotelApproveController@hotelApproveTable');
Route::post('hotelMarchentStatus/{marchent_id}','Hotel\HotelApproveController@hotelMarchentStatus');
Route::get('hotelMarchentDelete/{id}','Hotel\HotelApproveController@hotelMarchentDelete');

// booking order
Route::get('bookingOrderManage','Hotel\BookingOrderController@bookingOrderTable');
Route::post('bookingOrderStatus/{id}','Hotel\BookingOrderController@bookingOrderStatus');
Route::get('bookingOrderDelete/{id}','Hotel\BookingOrderController@bookingOrderDelete');
// add rome
Route::get('addRome','Hotel\AddRomeController@addRomeFrom');
Route::post('addRomeStore','Hotel\AddRomeController@addRomeStore');
// room iamge add
Route::post('addRomeImageStore','Hotel\AddRomeController@hotelImageStore');
Route::post('addRomeImageDelete/{id}','Hotel\AddRomeController@hotelImageDelete');

Route::get('marchentRoomAdd','Hotel\AddRomeController@marchentRoomAdd');
Route::post('marchentRoomStore','Hotel\AddRomeController@merchantRoomStore');
//manage room (complete )
Route::get('manageRoom','Hotel\ManageRoomController@manageRoomShowTable');
Route::post('manageRoomStatus/{id}','Hotel\ManageRoomController@manageRoomStatus');
Route::post('manageRoomAvailability/{id}','Hotel\ManageRoomController@manageRoomAvailability');
Route::get('manageRoomDelete/{id}','Hotel\ManageRoomController@manageRoomDelete');
Route::get('manageRoomEdit/{id}','Hotel\ManageRoomController@manageRoomEdit');
Route::get('merchantManageRoomEdit/{id}','Hotel\ManageRoomController@merchantManageRoomEdit');
Route::post('manageRoomUpdate/{id}','Hotel\ManageRoomController@manageRoomUpdate');
Route::post('manageRoomSearch','Hotel\ManageRoomController@manageRoomSearch');
// manage profit report
Route::get('manageRoomProfit','Hotel\ManageReportProfitController@manageProfitFrom');
Route::post('manageRoomProfitLiveReport','Hotel\ManageReportProfitController@manageProfitReport');






// Tourist manage
Route::get('touristManage','Tourist\TouristApproveController@touristTable');
Route::post('touristApproveStatus/{id}','Tourist\TouristApproveController@touristStatus');
Route::get('touristDelete/{id}','Tourist\TouristApproveController@touristDelete');
// add package (complete)
Route::get('addPackage','Tourist\AddPackageController@addPackageFrom');
Route::post('addPackageStore','Tourist\AddPackageController@packageStore');
Route::post('addPackageImageStore','Tourist\AddPackageController@packageImageStore');
//manage package (complete)
Route::get('managePackage','Tourist\ManagePackageController@managePackage');
Route::post('packageStatus/{id}','Tourist\ManagePackageController@managePackageStatus');
Route::post('packageStorageStatus/{id}','Tourist\ManagePackageController@packageStorageStatus');
Route::get('packageEdit/{id}','Tourist\ManagePackageController@packageEdit');
Route::post('packageUpdate/{id}','Tourist\ManagePackageController@packageUpdate');
Route::post('packageSearch','Tourist\ManagePackageController@packageSearch');
Route::get('packageDelete/{id}','Tourist\ManagePackageController@packageDelete');
Route::post('packageImageDelete/{id}','Tourist\AddPackageController@packageImageDelete');

// manage package profit(complete)
Route::get('packageProfitFrom','Tourist\PackageProfitController@packageProfitFrom');
Route::post('packageProfitReport','Tourist\PackageProfitController@packageProfitReport');

// turist mange packge order
Route::get('touristBooking','Tourist\BookingOrderController@bookingOrderTable');
Route::post('touristBookingStatus/{id}','Tourist\BookingOrderController@bookingOrderStatus');
Route::get('touristBookingDelete/{id}','Tourist\BookingOrderController@bookingOrderDelete');





// category add
Route::get('api/dropdown/mainCategory', function(){
    $users=Input::get('option');
//Belogin
    $items = App\Model\CategoryModel::where('manu_id','=',$users)->lists('category_name','id');
    //  dd($items);
    return Response::make($items);
});
//sub category add
Route::get('api/dropdown/subcategory', function(){
    $users=Input::get('option');
//Belogin
    $items2 = App\Model\SubCategoryModel::where('main_category','=',$users)->lists('sub_category_name','id');
    //  dd($items);
    return Response::make($items2);
});
