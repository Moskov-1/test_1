<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homePage.landing_page');
});

Route::get('/dashboard', function () {
    $guards = User::where('type','guard')->get();
    return view('dashboard',compact('guards'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/shedule', function () {
 return view('admin.shedule.create');    
});
require __DIR__.'/auth.php';