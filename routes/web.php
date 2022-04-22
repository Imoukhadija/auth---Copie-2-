<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\paiementController;
use App\Http\Controllers\CategoriesController;

use App\Http\Controllers\TableauBordreController;
 
 use App\Http\Controllers\VehiculesController;
 use App\Http\Controllers\GarantieController;
 use App\Http\Controllers\ClientsController;
 use App\Http\Controllers\VentesController;
 use App\Http\Controllers\home;
 use App\Http\Controllers\AnnoncesController;
 use App\Http\Controllers\ReportController;
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
 

Route::get('/', function () {
    return view('home.index' );
 })->name("homeassurance");

//Auth::routes(["register" => false, "reset" => false]);
 Route::get('home', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm']);
Route::post('admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login');

Route::get('costumer/login', [App\Http\Controllers\Auth\CostumerLoginController::class, 'showLoginForm']);
Route::post('costumer/login', [App\Http\Controllers\Auth\CostumerLoginController::class, 'login'])->name('costumer.login');
Route::group(["prefix"=>"admin","middleware"=>"assign.guard:admin,admin/login"],function(){
    Route::get("dashboard",function(){
        return view ("admin.dashboard");
    });
    Route::get('paiements', [paiementController::class, 'index'])->name('paiements.index'); 
 Route::resource('categories', CategoriesController::class);
 Route::resource('vehicules', VehiculesController::class);
 Route::resource('garanties', GarantieController::class);
 Route::resource('annonces', AnnoncesController::class);
 Route::resource('clients', ClientsController::class);
 Route::resource('ventes', VentesController::class);
 Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
Route::get('/blog',[home::class,'index'])->name("home");
Route::get('/TableauBordre',[TableauBordreController::class,'index'])->name("indextab");
Route::get('rapport',[ReportController::class,'index'])->name("rapport.index");
Route::post('rapport/genere', [ReportController::class,'genere'])->name("rapport.genere");
});
Route::group(["prefix"=>"costumer","middleware"=>"assign.guard:costumer,costumer/login"],function(){
    Route::get("dashboard",function(){
        return view ("costumer.dashboard");
    });
});
//Route::get('/home', 'HomeController@index')->name('home');
 /*Route::get('home', [TableauBordreController::class, 'index'])->name('home');
 //Route::resource('categories', 'CategoriesController');
 Route::get('paiements', [paiementController::class, 'index'])->name('paiements.index'); 
 Route::resource('categories', CategoriesController::class);
 Route::resource('vehicules', VehiculesController::class);
 Route::resource('garanties', GarantieController::class);
 Route::resource('annonces', AnnoncesController::class);
 Route::resource('clients', ClientsController::class);
 Route::resource('ventes', VentesController::class);
 Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
Route::get('/blog',[home::class,'index'])->name("home");



Route::get('/TableauBordre',[TableauBordreController::class,'index'])->name("indextab");
Route::get('rapport',[ReportController::class,'index'])->name("rapport.index");
Route::post('rapport/genere', [ReportController::class,'genere'])->name("rapport.genere");
*/
