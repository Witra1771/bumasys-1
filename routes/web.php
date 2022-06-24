<?php

use App\Http\Controllers\Web\Common\ComponentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use UniSharp\LaravelFilemanager\Lfm;

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
Route::group(['middleware' => 'language'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes(['verify' => true]);

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});

Route::prefix('component')->group(callback: function(){
    Route::get('province', [ComponentController::class, 'provinces'])->name('component.provinces');
    Route::get('province/{provinceId}/city/', [ComponentController::class, 'cities'])->name('component.cities');
    Route::get('province/{provinceId}/city/{cityId}/district/', [ComponentController::class, 'districts'])->name('component.districts');
    Route::get('province/{provinceId}/city/{cityId}/district/{districtName}', [ComponentController::class, 'subDistricts'])->name('component.subDistricts');
});
