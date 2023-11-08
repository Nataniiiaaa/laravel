<?php
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homepage');
});


Route::get('/biodata', function() {
    return view('biodata');
});

Route::get('/formnew', function () {
    return view('formnew');
});

Route::get('/formedit', function () {
    return view('formedit');
});

Route::get('/formlist', function () {
    return view('formlist');
});
Route::resource('/form',FormController::class);