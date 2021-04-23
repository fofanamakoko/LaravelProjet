<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;


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


Route::get('/', [MasterController::class, 'Profile']);
Route::get('/dashbord', [MasterController::class, 'dashbord']);
Route::get('/receptionniste', [MasterController::class, 'receptionniste']);

/*Route::get('/', function () {
    return view('Adminpage.Profile');
});*/

