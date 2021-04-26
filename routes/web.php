<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admincontroller;

use App\Http\Controllers\VisitController;
use App\Http\Controllers\DynamicPDFController;

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

//Route::get('/', [MasterController::class,'Profile']);


/*Route::get('/Adminpage', function () {
    return view('Adminpage.dashbord');
});*/


Route::get('/', [IndexController::class, 'login'])->name('login');
Route::get('/Adminlogin', [IndexController::class, 'Adminlogin'])->name('Adminlogin');

Route::get('/home', [MasterController::class, 'home'])->name('home');
Route::get('/dynamic_pdf', [DynamicPDFController::class, 'index'])->name('index');
Route::get('/dynamic_pdf/pdf', [DynamicPDFController::class, 'pdf'])->name('pdf');

Route::get('/receptionniste', [MasterController::class, 'receptionniste'])->name('receptionniste');
Route::post('/registerUser', [IndexController::class, 'registerUser'])->name('registeruser');
Route::post('/checklogin', [IndexController::class, 'checklogin'])->name('checklogin');
Route::get('/registered', [Admincontroller::class, 'registered'])->name('registered');
Route::get('/dashbord1', [Admincontroller::class, 'dashbord1'])->name('dashbord1');
Route::get('/Adminvisite', [Admincontroller::class, 'Adminvisite'])->name('Adminvisite');
Route::get('/role-edit/{id}', [Admincontroller::class, 'registeredit'])->name('registeredit');
Route::post('/homevisit', [VisitController::class, 'homeVisit'])->name('homevisit');
Route::post('/Admindata', [VisitController::class, 'Admindata'])->name('Admindata');
Route::put('/role-update/{id}', [Admincontroller::class, 'registerupdate'])->name('registerupdate');
Route::delete('/role_delete/{id}', [Admincontroller::class, 'registerdelete'])->name('registerdelete');
Route::delete('/data_delete/{id}', [Admincontroller::class, 'datadelete'])->name('datadelete');

route::get('/about-us/{id}',[Admincontroller::class,'dataedit'])->name('dataedit');
/*Route::get('/', function () {
    return view('Adminpage.Profile');Adminvisite
});*/







