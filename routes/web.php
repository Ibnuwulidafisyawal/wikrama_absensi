<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatangController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
 
// Route::get('/', function () {
//     return view('absensi.student_home.index');
// });

//Route login student absensi
Route::get('absensi.login',[LoginStudentController::class, 'index']);
Route::post('absensi.login',[LoginStudentController::class, 'authanticate']); 

//Route resource dashboard admin
Route::get('admin.dashboard',[DashboardController::class, 'index']);
Route::resource('admin.dashboard', DashboardController::class);
Route::resource('register-student', RegisterStudentController::class);
Route::resource('register-admin', RegisterAdminController::class);
Route::resource('rayons', RayonController::class);
Route::resource('rombels', RombelController::class);

Route::resource('students',StudentHomeController::class); 

// Route::post('absensi.student_home.datang',[StudentHomeController::class, 'store'])->name('absensi/student_home/datang/store'); 

Route::resource('/absensi/student_home/tidak_masuk',StudentHomeController::class); 


//Route register admin & student in dashboard admin
Route::group(['middleware' => 'auth'], function () {
    Route::resource('register-admin', \App\Http\Controllers\RegisterAdminController::class);
    Route::resource('register-student', \App\Http\Controllers\RegisterStudentController::class);
});


//Route student absensi
Route::middleware(['auth:sanctum', 'verified'])->get('/absensi/student_home', function () {
    return view('absensi.student_home.index');  
})->name('absensi.student_home.index');

Route::group(['middleware' => 'student'], function () {

    //Route Datang dan pulang Present Today
    Route::get('/absensi/student_home/pulang', [StudentHomeController::class, 'datang'])->name('absensi.student_home.pulang.index');

    //Route Post Present Today
    Route::post('/absensi/student_home/pulang/keterangan', [StudentHomeController::class, 'pulang'])->name('absensi.student_home.pulang.keterangan');


    //Route Keterangan Present Today
    Route::get('/absensi/student_home/pulang/keterangan', [StudentHomeController::class, 'keterangan'])->name('absensi.student_home.pulang.keterangan');
 

    //Route Tampilan present today pulang   
    Route::post('/absensi/student_home/pulang', function () {
        return view('absensi.student_home.pulang.index');  
    })->name('absensi.student_home.pulang.index');


    //Route Tidak masuk Present Today
    Route::post('/absensi/student_home/tidak_masuk/', function () {
        return view('absensi.student_home.tidak_masuk.index');  
    })->name('absensi.student_home.tidak_masuk.index');

    Route::post('/absensi/student_home/tidak_masuk/', function () {
        return view('absensi.student_home.tidak_masuk.index');  
    })->name('absensi.student_home.tidak_masuk.index');
});
