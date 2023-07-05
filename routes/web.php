<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeyController;
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
    return view('welcome');
});
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('company', [CompanyController::class, 'index'])->name('company');
Route::get('create-company',[CompanyController::class,'create'])->name('create-company');
Route::post('new-comapny',[CompanyController::class,'add'])->name('new-comapny');
Route::get('company-delete/{id}',[CompanyController::class,'destroy']);
Route::get('company/{id}/edit',[CompanyController::class,'edit']);
Route::post('company-update',[CompanyController::class,'update'])->name('company-update');;

