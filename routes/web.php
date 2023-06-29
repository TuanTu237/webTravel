<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Route;
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
Route::get('thankyou',function (){
    return view('Page_views.BookingPage');
});

/*Admin*/
/*Destination*/
Route::get('/add-destination','App\Http\Controllers\DestinationController@index');
Route::post('/save-destination','App\Http\Controllers\DestinationController@add');
Route::get('/list-destination','App\Http\Controllers\DestinationController@show_list');
Route::get('/edit-destination/{destination_id}','App\Http\Controllers\DestinationController@edit');
Route::post('/update-destination/{destination_id}','App\Http\Controllers\DestinationController@update');
Route::get('/delete-destination/{destination_id}','App\Http\Controllers\DestinationController@delete');
Route::get('/enable-destination/{destination_id}','App\Http\Controllers\DestinationController@enable');
Route::get('/disable-destination/{destination_id}','App\Http\Controllers\DestinationController@disable');
/*.........................................................................................................................*/
/*Type tour*/
Route::get('/add-type-tour','App\Http\Controllers\TypetourController@index');
Route::post('/save-type-tour','App\Http\Controllers\TypetourController@add');
Route::get('/list-type-tour','App\Http\Controllers\TypetourController@show_list');
Route::get('/edit-type-tour/{destination_id}','App\Http\Controllers\TypetourController@edit');
Route::post('/update-type-tour/{destination_id}','App\Http\Controllers\TypetourController@update');
Route::get('/delete-type-tour/{destination_id}','App\Http\Controllers\TypetourController@delete');
Route::get('/enable-type-tour/{destination_id}','App\Http\Controllers\TypetourController@enable');
Route::get('/disable-type-tour/{destination_id}','App\Http\Controllers\TypetourController@disable');
/*.........................................................................................................................*/
/*Post*/
Route::get('/add-post','App\Http\Controllers\PostController@index');
Route::post('/save-post','App\Http\Controllers\PostController@add');
Route::get('/list-post','App\Http\Controllers\PostController@show_list');
Route::get('/edit-post/{post_id}','App\Http\Controllers\PostController@edit');
Route::post('/update-post/{post_id}','App\Http\Controllers\PostController@update');
Route::get('/delete-post/{post_id}','App\Http\Controllers\PostController@delete');
Route::get('/enable-post/{post_id}','App\Http\Controllers\PostController@enable');
Route::get('/disable-post/{post_id}','App\Http\Controllers\PostController@disable');
/*.........................................................................................................................*/
/*Tour*/
Route::get('/add-tour','App\Http\Controllers\TourController@index');
Route::post('/save-tour','App\Http\Controllers\TourController@add');
Route::get('/list-tour','App\Http\Controllers\TourController@show_list');
Route::get('delete-tour/{id_tour}','App\Http\Controllers\TourController@delete');
Route::get('edit-tour/{tour_id}','App\Http\Controllers\TourController@edit');
Route::post('update-tour/{tour_id}','App\Http\Controllers\TourController@update');
/*.........................................................................................................................*/
/*Booking*/
Route::get('/list-booking/{status}','App\Http\Controllers\BookingController@show_list');
Route::get('/details-booking/{booking_id}','App\Http\Controllers\BookingController@detail');
Route::post('/update-booking','App\Http\Controllers\BookingController@update');
/*.........................................................................................................................*/
/*Custom*/
Route::get('/list-custom/{status}','App\Http\Controllers\CustomController@show_list');
Route::get('/details-custom/{custom_id}','App\Http\Controllers\CustomController@detail');
Route::get('edit-custom/{custom_id}','App\Http\Controllers\CustomController@edit');
Route::post('/update-custom','App\Http\Controllers\CustomController@update');
/*Custom Contracts*/
Route::get('/new-custom-contract','App\Http\Controllers\CustomContract@new_contract');
Route::post('/add-custom-contract','App\Http\Controllers\CustomContract@add_contract');
Route::post('/save-custom-contract','App\Http\Controllers\CustomContract@save_contract');
Route::get('/list-custom-contract/{custom_contract_status}','App\Http\Controllers\CustomContract@list_contract');
Route::get('/detail-custom-contract/{custom_contract_id}','App\Http\Controllers\CustomContract@detail_contract');
Route::post('/update-custom-contract/{custom_contract_id}','App\Http\Controllers\CustomContract@update');
/*.........................................................................................................................*/
/*Customer post*/
Route::get('/them-bai-viet','App\Http\Controllers\CustomerController@index');
Route::post('/luu','App\Http\Controllers\CustomerController@add');
/*.........................................................................................................................*/
/*Staff*/
Route::get('/add-staff','App\Http\Controllers\StaffController@add_staff');
Route::post('/save-staff','App\Http\Controllers\StaffController@save_staff');
Route::get('/list-staff/{position_id}','App\Http\Controllers\StaffController@show_list');
Route::get('/edit-staff/{staff_id}','App\Http\Controllers\StaffController@edit_staff');
Route::post('/update-staff/{staff_id}','App\Http\Controllers\StaffController@update_staff');
Route::get('delete-staff/{staff_id}','App\Http\Controllers\StaffController@delete_staff');
/*.........................................................................................................................*/
/*Contracts*/
Route::get('/new-contract','App\Http\Controllers\ContractController@new_contract');
Route::post('/add-contract','App\Http\Controllers\ContractController@add_contract');
Route::post('/save-contract','App\Http\Controllers\ContractController@save_contract');
Route::get('/list-contract/{contract_status}','App\Http\Controllers\ContractController@list_contract');
Route::get('/detail-contract/{contract_id}','App\Http\Controllers\ContractController@detail_contract');
Route::post('/update-contract','App\Http\Controllers\ContractController@update');
/*.........................................................................................................................*/
/*Dashboard*/
Route::get('dashboard','App\Http\Controllers\HomeController@dashboard');
Route::get('dashboardkd','App\Http\Controllers\HomeController@dashboardkd');
Route::get('dashboardhd','App\Http\Controllers\HomeController@dashboardhd');
Route::get('select-year','App\Http\Controllers\HomeController@select_year')->name('select_year');
/*.........................................................................................................................*/
/*Page views*/
Route::get('','App\Http\Controllers\HomeController@index');
Route::get('/destination/{destination_name_EN}','App\Http\Controllers\DestinationController@show_dest_detail');
Route::get('destination','App\Http\Controllers\DestinationController@show_page');
Route::get('post','App\Http\Controllers\PostController@show_page');
Route::get('/post/{post_title}','App\Http\Controllers\PostController@show_post_detail');
Route::get('/type-of-tour/{typetour_name_EN}','App\Http\Controllers\TypetourController@show_type_detail');
Route::get('/type-of-tour','App\Http\Controllers\TypetourController@show_page');
Route::get('tour/{tour_name_EN}','App\Http\Controllers\TourController@show_tour_detail');
Route::get('book-form/{tour_name_VI}','App\Http\Controllers\TourController@book_form');
Route::post('booking','App\Http\Controllers\BookingController@booking');
Route::get('wishlist','App\Http\Controllers\CustomController@wishlist');
Route::post('custom','App\Http\Controllers\CustomController@custom');
Route::get('search-1','App\Http\Controllers\HomeController@Search_1');
Route::get('search-2','App\Http\Controllers\HomeController@Search_2');
Route::get('customer-review/{booking_code}','App\Http\Controllers\BookingController@customer_review');
Route::post('save-customer-review','App\Http\Controllers\BookingController@save_customer_review');
Route::get('tra-cuu/{booking_code}','App\Http\Controllers\BookingController@tra_cuu');
/*.........................................................................................................................*/
/*Login customer*/
Route::get('/login-index','App\Http\Controllers\CustomerController@login_index');
Route::post('/login-customer','App\Http\Controllers\CustomerController@login_customer');
Route::get('register-index','App\Http\Controllers\CustomerController@register_index');
Route::post('add-customer','App\Http\Controllers\CustomerController@add_customer');
Route::get('profile','App\Http\Controllers\CustomerController@profile')->name('profile');
Route::post('/update-profile/{customer_id}','App\Http\Controllers\CustomerController@update_profile');
Route::get('order/{customer_id}','App\Http\Controllers\CustomerController@order');
Route::get('logout-customer','App\Http\Controllers\CustomerController@logout');
/*Login admin*/
Route::post('login-admin','App\Http\Controllers\LoginController@login');
Route::get('admin','App\Http\Controllers\LoginController@index');
Route::get('logout','App\Http\Controllers\LoginController@logout');

/* Route::get('/contact',function (){
    return view('Page_Views.ContactPage');
}); */
Route::get('/contact','App\Http\Controllers\HomeController@contact');

Route::group(['middleware'=>['web']],function (){
    Route::get('language/{language}','App\Http\Controllers\LanguageController@index')->name('language');});



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
