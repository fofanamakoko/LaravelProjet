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
Route::get('/register', [IndexController::class, 'register'])->name('register');
Route::get('/Profile', [MasterController::class, 'Profile'])->name('Profile');;
Route::get('/receptionniste', [MasterController::class, 'receptionniste'])->name('receptionniste');
Route::post('/registerUser', [IndexController::class, 'registerUser'])->name('registeruser');
//Route::post('/registerAdmin', [Admincontroller::class, 'registerAdmin'])->name('registerAdmin');
Route::get('/registered', [Admincontroller::class, 'registered'])->name('registered');
Route::get('/dashbord1', [Admincontroller::class, 'dashbord1'])->name('dashbord1');

/*Route::get('/', function () {
    return view('Adminpage.Profile');
});*/








