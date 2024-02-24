<?php

use App\Http\Controllers\admin\AdminLoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::group(['middleware'=>['auth','is_admin']],function(){
        Route::get('/dashboard',function(){
            return view('admin.dashboard');
        });
    });
    
    Route::get('/', function () {
        return view('welcome');
    });
    
});
    




// Route::group(['prefix' => 'admin'],function(){


//     Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
//     Route::get('/dashboard',[AdminLoginController::class,'dashboard'])->name('admin.dashboard');

// });
