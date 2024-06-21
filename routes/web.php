<?php

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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('dashboard');
})->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/orders', function () {
    return view('orders');
})->name('admin.orders');

Route::get('/supervisors', function () {
    return view('supervisors');
})->name('admin.supervisors');

Route::get('/branches', function () {
    return view('branches');
})->name('admin.branches');

Route::get('/logs', function () {
    return view('logs');
})->name('admin.logs');

Route::get('/logout', function () {
    // لوجيك تسجيل الخروج
    return redirect('/');
})->name('admin.logout'); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/overview/data', [App\Http\Controllers\AdminController::class, 'getOverviewData'])->name('admin.overview.data');