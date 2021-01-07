<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SecurityCategoryController;
use App\Http\Controllers\Admin\SecurityItemController;
use App\Http\Controllers\Admin\TrainerController;

use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\IndexController;
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

Route::get('/', IndexController::class);

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->name('admin.')->group(function() {

    Route::get('/', AdminController::class);

    Route::resource('trainers', TrainerController::class)->only(['store', 'update', 'destroy']);
    Route::resource('security/categories', SecurityCategoryController::class)->only('update');
    Route::resource('security/items', SecurityItemController::class)->only(['store', 'update', 'destroy']);
    Route::resource('videos', VideoController::class)->only(['destroy']);

    Route::put('edittext', [AdminController::class, 'editText'])->name('edittext');

});

Route::post('/sendmail', [IndexController::class, 'sendMail'])->name('sendmail');


Route::any('register', function(){
    abort('404');
});


