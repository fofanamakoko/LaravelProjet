<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\IndexController;


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
Route::get('/home', [MasterController::class, 'home'])->name('home');
Route::get('/register', [IndexController::class, 'register'])->name('register');
Route::get('/Profile', [MasterController::class, 'Profile'])->name('Profile');;
Route::get('/dashbord', [MasterController::class, 'dashbord'])->name('dashbord');;
Route::get('/receptionniste', [MasterController::class, 'receptionniste'])->name('receptionniste');
Route::post('/registerUser', [IndexController::class, 'registerUser'])->name('registeruser');

/*Route::get('/', function () {
    return view('Adminpage.Profile');
});*/








