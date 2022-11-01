<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SheduleController;

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

Route::get('/hudai', function () {
    return view('form.guard_pass.guard_pass_index');
});

Route::get('/', function () {
    return view('homePage.landing_page');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::get('/admin', function () {
        return view('admin.index');
    });    
});


Route::resource('shedule', SheduleController::class);
require __DIR__.'/auth.php';
