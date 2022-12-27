<?php
//ADMIN
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashbord;
use App\Http\Controllers\Adminlogin;
use App\Http\Controllers\Maincat;
use App\Http\Controllers\Subcat;
use App\Http\Controllers\Brand;
use App\Http\Controllers\Product;
use App\Http\Controllers\Order;
use App\Http\Controllers\State;
use App\Http\Controllers\City;
use App\Http\Controllers\Promo;
use App\Http\Controllers\Feedback;
use App\Http\Controllers\Webuser;
use App\Http\Controllers\WebAboutus;
//WEBSITE
use App\Http\Controllers\userpage;
use App\Http\Controllers\WebListing_grid;
use App\Http\Controllers\WebProductdetail;
use App\Http\Controllers\WebCart;
use App\Http\Controllers\WebCheckout;
use App\Http\Controllers\WebSignin;
use App\Http\Controllers\WebTrackorder;
use App\Http\Controllers\WebReview;
use App\Http\Controllers\WebContactus;
//LOGIN CHECK
use App\Http\Middleware\checkadminlogin;


//email

// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/login',[login::class,'loginpage']);

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/',[userpage::class,'index']);
// Route::get('/',[Adminlogin::class,'loginpage']);

Route::get('/Index',[userpage::class,'index']);
Route::get('/Listing_grid',[WebListing_grid::class,'Listing_grid']);
Route::get('/Productdetail',[WebProductdetail::class,'Productdetail']);
Route::get('/Cart',[WebCart::class,'Cart']);
Route::get('/Checkout',[WebCheckout::class,'Checkout']);
Route::get('/Confirmorder',[WebCheckout::class,'Confirmorder']);
Route::get('/Signin',[WebSignin::class,'Signin']);
Route::get('/Trackorder',[WebTrackorder::class,'Trackorder']);
Route::get('/Review',[WebReview::class,'Review']);
Route::get('/Contactus',[WebContactus::class,'Contactus']);
Route::get('/Aboutus',[WebAboutus::class,'Aboutus']);

Route::get('/Login',[Adminlogin::class,'loginpage']);
Route::get('/Forgetpassword',[Adminlogin::class,'Forgetpassword']);
Route::get('/Resetpassword/{id}',[Adminlogin::class,'Resetpassword']);
Route::post('/Checkpassword',[Adminlogin::class,'Checkpassword']);
Route::post('/Checkemail',[Adminlogin::class,'Checkemail']);
Route::post('/Checklogin',[Adminlogin::class,'checkloginpage']);





Route::middleware([checkadminlogin::class])->group(function(){

    Route::get('/Dashbord',[Dashbord::class,'dashbord']);

    

Route::get('/Logout',[Adminlogin::class,'Logout']);


Route::post('/updateadmin',[Adminlogin::class,'updateadmin']);
Route::get('/Adminprofile/{id}',[Adminlogin::class,'Adminprofilepage']);




Route::get('/Maincat',[Maincat::class,'maincatpage']);
Route::get('/Maincatadd',[Maincat::class,'maincataddpage']);
Route::post('/Deletemaincat',[Maincat::class,'Deletemaincat']);
Route::post('/Insertmaincat',[Maincat::class,'Insertmaincat']);
Route::post('/Updatemaincat',[Maincat::class,'Updatemaincat']);
Route::get('/Maincatedit/{maincatid}',[Maincat::class,'maincateditpage']);
// Route::get('/Maincatedit',[Maincat::class,'maincateditpage']);



Route::get('/Subcat',[Subcat::class,'subcatpage']);
Route::get('/Subcatadd',[Subcat::class,'subcataddpage']);
Route::post('/Insertsubcat',[Subcat::class,'Insertsubcat']);
Route::post('/Deletesubcat',[Subcat::class,'Deletesubcat']);
Route::post('/Updatesubcat',[Subcat::class,'Updatesubcat']);
Route::get('/Subcatedit/{id}',[Subcat::class,'subcateditpage']);



Route::get('/Brand',[Brand::class,'brandpage']);
Route::get('/Brandadd',[Brand::class,'brandaddpage']);
Route::get('/Brandedit/{id}',[Brand::class,'brandeditpage']);

Route::post('/brandupdate',[Brand::class,'brandupdate']);
Route::post('/Insertbrand',[Brand::class,'Insertbrand']);
Route::post('/Deletebrand',[Brand::class,'Deletebrand']);



Route::get('/Product',[Product::class,'productpage']);
Route::get('/Variation',[Product::class,'productveriationpage']);
Route::get('/Variationadd',[Product::class,'Variationaddpage']);
Route::post('/Insertveriation',[Product::class,'Insertveriation']);
Route::post('/Deletevariation',[Product::class,'Deletevariation']);
Route::post('/Insertproduct',[Product::class,'Insertproduct']);
Route::post('/Deleteproduct',[Product::class,'Deleteproduct']);
Route::post('/Updateproduct',[Product::class,'Updateproduct']);
Route::post('/Updateveriation',[Product::class,'Updateveriation']);
Route::get('/Productadd',[Product::class,'productaddpage']);
Route::get('/Productedit/{id}',[Product::class,'producteditpage']);
Route::get('/Productview/{id}',[Product::class,'productviewpage']);
Route::get('/Veriationedit/{id}',[Product::class,'veriationeditpage']);



Route::get('/Order',[Order::class,'orderpage']);
Route::get('/Pandingorder',[Order::class,'pandingorderpage']);
Route::get('/Processingorder',[Order::class,'processingorderpage']);
Route::get('/Completedorder',[Order::class,'completedorderpage']);
Route::get('/Orderview/{id}',[Product::class,'orderviewpage']);


Route::get('/pending_to_processing/{orderid}',[Order::class,'pending_to_processing']);
Route::get('/processing_to_complated/{orderid}',[Order::class,'processing_to_complated']);



Route::get('/State',[State::class,'statepage']);
Route::get('/Stateadd',[State::class,'stateaddpage']);
Route::get('/Stateedit/{id}',[State::class,'stateeditpage']);
Route::post('/Insertstate',[State::class,'Insertstate']);
Route::post('/Deletestate',[State::class,'Deletestate']);
Route::post('/Updatestate',[State::class,'Updatestate']);


Route::get('/City',[City::class,'citypage']);
Route::get('/Cityadd',[City::class,'cityaddpage']);
Route::get('/Cityedit/{id}',[City::class,'cityeditpage']);
Route::post('/Insertcity',[City::class,'Insertcity']);
Route::post('/Updatecity',[City::class,'Updatecity']);
Route::post('/Deletecity',[City::class,'Deletecity']);



Route::get('/Promocode',[Promo::class,'promopage']);
Route::get('/Promocodeadd',[Promo::class,'promoaddpage']);
Route::get('/Promocodeedit/{id}',[Promo::class,'promoeditpage']);
Route::post('/Promocodeinsert',[Promo::class,'Promocodeinsert']);
Route::post('/Promocodeupdate',[Promo::class,'Promocodeupdate']);
Route::post('/Deletepromocode',[Promo::class,'Deletepromocode']);



Route::get('/Feedback',[Feedback::class,'feedbackpage']);

Route::get('/Webuser',[Webuser::class,'webuserpage']);


});

