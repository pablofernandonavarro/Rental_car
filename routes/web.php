<?php

use Illuminate\Support\Facades\Route;

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
/*Rutas de autenticación */
Auth::routes();
Route::get('/register', function(){return redirect('/');});

/*Ruta de migración y seeder*/
Route::get('/migration-seed', function(){
    $exitCode = Artisan::call('migrate:refresh',['--seed'=>true]);
    return redirect('/');
});

/*storage*/
Route::get('/storage-link', function(){
    $exitCode = Artisan::call('storage:link');
    return redirect('/');
});

/*Language */
Route::get('lang/{locale}', 'HomeController@lang');

/**Prubas de administrador */
Route::get('/sge.backoffice','AdminController@index')->middleware('auth');
Route::get('/profile','AdminController@show')->middleware('auth');
Route::put('/ownerdata', 'AdminController@ownerupdate')->middleware('auth');
Route::put('/password-reset', 'AdminController@passwordupdate')->middleware('auth');

Route::resource('/car', 'CarController')->middleware('auth');
Route::resource('/brand', 'BrandController')->middleware('auth');
Route::resource('/pattern', 'PatternController')->middleware('auth');
Route::resource('/additional', 'AdditionalController')->middleware('auth');
Route::resource('/requirement', 'RequirementController')->middleware('auth');
Route::resource('/status', 'StatusController')->middleware('auth');
Route::resource('/transmission', 'TransmissionController')->middleware('auth');
Route::resource('/category-cars', 'CategoryCarController')->middleware('auth');
Route::resource('/category-hotels', 'CategoryHotelController')->middleware('auth');
Route::resource('/category-faqs', 'CategoryFaqController')->middleware('auth');
Route::resource('/hotel', 'HotelController')->middleware('auth');
Route::resource('/client', 'ClientController')->middleware('auth');
Route::resource('/quotation', 'QuotationController')->middleware('auth');
Route::resource('/owner_data', 'OwnerDataController')->middleware('auth');
Route::resource('/faq', 'FaqController')->middleware('auth');


/**Rutas normales**/
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/car-listing/{filter?}', 'HomeController@listing');
Route::get('/portfolio-alt/{filter?}', 'HomeController@portfolio')->name('listado-de-autos');
Route::get('/additionals', 'HomeController@additionals');
Route::get('/requirements', 'HomeController@requirements');
Route::get('/hotels/{category?}', 'HomeController@hotels');
Route::get('/faqs/{categoty_faq?}', 'HomeController@faqs');
Route::get('/contact', 'HomeController@contact');
Route::get("/portfolio-single/{car}",'HomeController@carShow')->name('portfolio-single');
Route::post('/savequotation', 'HomeController@saveQuotation');
Route::post('/savecontact', 'HomeController@saveContact');

/*Rutas api*/
Route::get('/api-brands/{id}', 'ApiController@brand');

/***************************************************************************************************/
Route::get('/blog', function(){
    return view('blog');
});
Route::get('/booking', function(){
    return view('booking');
});
Route::get('/coming-soon', function(){
    return view('coming-soon');
});
Route::get('/index-ajax', function(){
  return view('index-ajax');
});
Route::get('/portfolio-4col', function(){
  return view('portfolio-4col');
});
Route::get('/index-ajax', function(){
  return view('index-ajax');
});
Route::get('/shortcodes',function(){
  return view('shortcodes', ['owner_datas'=>App\OwnerData::first()]);
});
Route::get('/typography',function(){
  return view('typography');
});



Route::get('storage/{filename}', function() {
    return Image::make(storage_path('public/' . $filename))->response();
});
