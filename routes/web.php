<?php

use App\Http\Controllers\Admin\EditSite;
use App\Http\Controllers\Admin\TrainerController;

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

    Route::redirect('/', 'admin/trainers');
    Route::resource('trainers', TrainerController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    Route::get('editsite', EditSite::class)->name('editsite');

});

Route::post('/sendmail', [IndexController::class, 'sendMail'])->name('sendmail');


Route::any('register', function(){
    abort('404');
});
