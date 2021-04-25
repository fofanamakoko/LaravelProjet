<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admincontroller;


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
Route::get('/Profile', [MasterController::class, 'Profile'])->name('Profile');;
Route::get('/receptionniste', [MasterController::class, 'receptionniste'])->name('receptionniste');
Route::post('/registerUser', [IndexController::class, 'registerUser'])->name('registeruser');
Route::post('/checklogin', [IndexController::class, 'checklogin'])->name('checklogin');
Route::get('/registered', [Admincontroller::class, 'registered'])->name('registered');
Route::get('/dashbord1', [Admincontroller::class, 'dashbord1'])->name('dashbord1');
Route::get('/Adminvisite', [Admincontroller::class, 'Adminvisite'])->name('Adminvisite');
Route::get('/role-edit/{id}', [Admincontroller::class, 'registeredit'])->name('registeredit');

Route::put('/role-update/{id}', [Admincontroller::class, 'registerupdate'])->name('registerupdate');
Route::delete('/role_delete/{id}', [Admincontroller::class, 'registerdelete'])->name('registerdelete');


/*Route::get('/', function () {
    return view('Adminpage.Profile');Adminvisite
});*/







