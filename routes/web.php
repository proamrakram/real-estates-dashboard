<?php

use App\Http\Controllers\AdminPanel\BranchController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\AdminPanel\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Branches;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(AdminPanelHomeController::class)->prefix('panel')->middleware(['auth', 'new'])->group(function () {

    Route::as('panel.')->group(function () {
        Route::get('/home', 'home')->name('home');
        Route::get('/users', 'users')->name('users');
        Route::get('/offers', 'offers')->name('offers');
        Route::get('/orders', 'orders')->name('orders');
        Route::get('/clients', 'clients')->name('clients');
        Route::get('/selles', 'selles')->name('selles');
        Route::get('/branchs', 'branchs')->name('branchs');
        Route::get('/mediators', 'mediators')->name('mediators');
        Route::get('/sendSMS', 'sendSMS')->name('sendSMS');
        Route::get('/reservations', 'reservations')->name('reservations');
        Route::get('/new-user', 'newUser')->withoutMiddleware('new')->name('new.user');

        #Creating Methods
        Route::get('/create-user-info', 'createUserInfo')->name('create.user.info');
        Route::get('/create-user-permissions/{email}', 'createUserPermissions')->name('create.user.permissions');

        Route::get('/create-sell', 'createSell')->name('create.sell');
        Route::get('/create-offer', 'createOffer')->name('create.offer');

        #Editing Methods
        Route::get('/edit-user', 'editUser')->name('edit.user');
        Route::get('/edit-sell', 'editSell')->name('edit.sell');
        Route::get('/edit-offer', 'editOffer')->name('edit.offer');
    });

    Route::as('admin.')->prefix('admin')->group(function () {

        Route::controller(UserController::class)->group(function () {
            #User
            Route::post('/store-user-info', 'storeInfo')->name('store.user.info');
            Route::post('/store-user-permissions', 'storeUserPermissions')->name('store.user.permissions');
            Route::post('/update-user', 'update')->name('update.user');
            Route::post('/delete-user', 'delete')->name('delete.user');
        });

        Route::controller(BranchController::class)->group(function () {
            #Branches
            Route::post('/store-branch', 'store')->name('store.branch');
            Route::post('/store-branch/{id}', 'edit')->name('edit.branch');
        });
    });

    Route::as('marketer.')->group(function () {
    });

    Route::as('office.')->group(function () {
    });
});
