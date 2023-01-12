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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function () {
    return view('auth.login');
});


//profile-------------------------------------------
Route::get('/profile', function () {
    return view('profile.profile');
});
Route::get('/profile/editInfo', function () {
    return view('profile.editProfile');
});

//gestion motifs:
route::resource('/gestionMotifs','MotifController');
Route::get("/listMotifs",[App\Http\Controllers\MotifController::class,'index']);

//gestion des images:
    route::resource('/gestionImages','ImageController');
    Route::get("/listImages",[App\Http\Controllers\ImageController::class,'index']);
    
    


//---------------------
route::resource('profile/editProfile','UserController');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


