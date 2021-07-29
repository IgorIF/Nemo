<?php

use App\Http\Controllers\Admin\CalculatorDescriptionController;
use App\Http\Controllers\Admin\FilialBranchController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MedicalCertificateController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Site\FilialController;
use App\Http\Controllers\Site\IndexController as SiteController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\RuleItemController;
use App\Http\Controllers\Admin\SecurityCategoryController;
use App\Http\Controllers\Admin\SecurityItemController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Site\LCController;
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

Route::get( '/', SiteController::class)->name('site');
Route::any('/lc/{alias}', [LCController::class, 'index'])->name('lc');
Route::view('/schedule', 'site.main.schedule.index')->name('schedule');
//Route::get('/filial/{alias}', [FilialController::class, 'index']);


/*Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->name('admin.')->group(function() {

    Route::get('/', AdminController::class)->name('index');

    Route::get('/filial/{alias}', [\App\Http\Controllers\Admin\Filial\FilialController::class, 'index'])->name('filial');

    Route::put('edittext', [AdminController::class, 'editText'])->name('edittext');
    Route::put('calculatorDescriptions/{formName}/{fieldName}', [CalculatorDescriptionController::class, 'update']);

    Route::resource('trainers', TrainerController::class)->only(['store', 'update', 'destroy']);
    Route::resource('security/categories', SecurityCategoryController::class)->only('update');
    Route::resource('security/items', SecurityItemController::class)->only(['store', 'update', 'destroy']);
    Route::resource('videos', VideoController::class)->only(['store', 'update', 'destroy']);
    Route::resource('rules', RuleItemController::class)->only(['store', 'update', 'destroy']);
    Route::resource('medicalCertificates', MedicalCertificateController::class)->only(['store', 'update', 'destroy']);
    Route::resource('vacancies', VacancyController::class)->only(['store', 'update', 'destroy']);
    Route::resource('images', ImageController::class)->only('update');
    Route::resource('filialBranches', FilialBranchController::class)->only('update');
    Route::resource('promotions', PromotionController::class)->only(['store', 'update', 'destroy']);
});*/

Route::post('/sendmail', [SiteController::class, 'sendMail'])->name('sendmail');


Route::any('register', function(){
    abort('404');
});


