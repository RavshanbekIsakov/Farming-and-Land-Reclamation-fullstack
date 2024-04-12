<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/contacts', [UserController::class, 'contacts'])->name('user.contacts');
Route::get('/references', [UserController::class, 'references'])->name('user.references');


Route::prefix('admin')->group(callback: function () {
    Route::view('/', 'admin.login')->name("admin.login");
    Route::post('/auth', [AdminController::class,'auth'])->name('admin.auth');

    Route::middleware(['adminAuth'])->group(function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::view('profile','admin.profile')->name('admin.profile');
        Route::post('profile',[AdminController::class, 'update_password'])->name('admin.password.update');
        Route::post('/admin/update-photo', 'AdminController@updatePhoto')->name('admin.update.photo');
    });
});


