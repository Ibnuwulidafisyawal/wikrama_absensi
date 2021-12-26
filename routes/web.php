<?php

use App\Http\Controllers\LoginStudentController;
use App\Http\Controllers\RegisterStudentController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\StudentHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|;l
*/



// Route::get('/', function () {
//     return view('absensi.login.index');
// });

Route::get('/', function () {
    return view('absensi.login.index');
});


// Route::get('/', function () {
//     return view('auth.login');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
 

// Route::get('/', function () {
//     return view('absensi.student_home.index');
// });

//Route login student absensi
Route::get('absensi.login',[LoginStudentController::class, 'index']);
Route::post('absensi.login',[LoginStudentController::class, 'authanticate']); 

//Route resource dashboard admin
Route::resource('register-student', RegisterStudentController::class);
Route::resource('register-admin', RegisterAdminController::class);
Route::resource('rayons', RayonController::class);
Route::resource('rombels', RombelController::class);


//Route register admin & student in dashboard admin
Route::group(['middleware' => 'auth'], function () {
    Route::resource('register-admin', \App\Http\Controllers\RegisterAdminController::class);
    Route::resource('register-student', \App\Http\Controllers\RegisterStudentController::class);

    // Route::resource('absensi.student-home.index', \App\Http\Controllers\StudentHomeController::class);
});

//Route student absensi
Route::middleware(['auth:sanctum', 'verified'])->get('/absensi/student_home', function () {
    return view('absensi.student_home.index');  
})->name('absensi.student_home.index');