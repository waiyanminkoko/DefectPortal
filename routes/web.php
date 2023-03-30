<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DefectFormUserController;
use App\Http\Controllers\DefectFormAdminController;


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
/*
Route::get('/defect_form_user', function ()
    return view('defect_form_user');
});*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::resource('defect_report', App\Http\Controllers\DefectReportController::class);

Route::get('/submit_form_admin', [App\Http\Controllers\DefectFormAdminController::class, 'submit_form_admin'])->name('submit_form_admin');

#Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/defect_report/{id}/{status}', [App\Http\Controllers\DefectReportController::class, 'status_update'])->name('status_update');

Route::get('/defect_form_user', [App\Http\Controllers\PagesController::class, 'defect_form_user'])->name('defect_form_user');

Route::get('/defect_form_user_laravel', [App\Http\Controllers\DefectFormUserController::class, 'index'])->name('defect_form_user_laravel');

#Route::get('/defect_form_user_laravel', [App\Http\Controllers\DefectFormUserController::class, 'store'])->name('defect_form_user_laravel');

Route::resource('defect_form_user_laravel', App\Http\Controllers\DefectFormUserController::class);

Route::get('/submit_form_user', [App\Http\Controllers\DefectFormUserController::class, 'submit_form_user'])->name('submit_form_user');

Route::get('/defect_form_admin', [App\Http\Controllers\PagesController::class, 'defect_form_admin'])->name('defect_form_admin');

Route::get('/defect_form_admin_laravel', [App\Http\Controllers\PagesController::class, 'defect_form_admin_laravel'])->name('defect_form_admin_laravel');

#Route::get('/defect_report', [App\Http\Controllers\PagesController::class, 'defect_report'])->name('defect_report');

Route::get('/logistics', [App\Http\Controllers\PagesController::class, 'logistics'])->name('logistics');

Route::resource('logistics', App\Http\Controllers\LogisticsController::class);

#Route::get('/logistics_edit', [App\Http\Controllers\LogisticsController::class, 'logistics_indv'])->name('logistics_indv');

#Route::get('/logistics_edit/{id}', ['uses'=> 'App\Http\Controllers\LogisticsController@show', 'as' => 'LogisticsController.show'])->name('LogisticsController.show');

Route::get('/logistics/{logistic}/edit', [App\Http\Controllers\LogisticsController::class, 'edit']);

Route::delete('/logistics/{logistic}', [App\Http\Controllers\LogisticsController::class, 'destroy']);

Route::put('/logistics/{logistic}', [App\Http\Controllers\LogisticsController::class, 'update']);

#Route::get('/logistics_edit/{id}', [App\Http\Controllers\LogisticsController::class, 'update']);

Route::get('/logistics_add', [App\Http\Controllers\PagesController::class, 'logistics_add'])->name('logistics_add');


