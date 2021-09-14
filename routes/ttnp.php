<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Account\SecurityController;

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

Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::prefix('account')->name('account.')->middleware(['auth', 'verified'])->group(function() {
    Route::resource('profile', ProfileController::class);
    Route::resource('security', SecurityController::class);
});



Route::get('/account', function () {
    return view('pages.account.index');
})->middleware(['auth', 'verified'])->name('account.index');

Route::get('/admin', function () {
    return view('pages.admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');
/*
|--------------------------------------------------------------------------
| User Account
|--------------------------------------------------------------------------
|
| /user
| /user/account
| /user/payments
| /user/orders
| /user/orders/new
| /user/orders/{order}
| /
|
|--------------------------------------------------------------------------
| Admin Account
|--------------------------------------------------------------------------
|
| /admin
| /admin/about
| /admin/announcements
| /admin/contact
| /admin/hours
| /admin/menu
|
*/