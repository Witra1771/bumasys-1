<?php

use Illuminate\Support\Facades\Route;
use Modules\Crm\Http\Controllers\CompanyController;
use Modules\Crm\Http\Controllers\CrmController;

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

Route::prefix('crm')->group(function() {
    Route::prefix('company')->group(function() {
        Route::get('/', [CompanyController::class, 'index']);
    });

    Route::get('/', [CrmController::class, 'index']);
});
