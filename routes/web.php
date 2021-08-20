<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ui\HelpController;
// use App\Http\Controllers\Ui\PricingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\User\ApiController as UserApiController;
use App\Http\Controllers\User\PlanController as UserPlanController;
use App\Http\Controllers\User\TeamController as TeamAccountController;
use App\Http\Controllers\User\AccountController as UserAccountController;
use App\Http\Controllers\User\PaymentController as UserPaymentController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Route::get('/pricing', [PricingController::class, 'index']);
Route::get('/help', [HelpController::class, 'index']);

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/accounts', [AccountController::class, 'index']);
Route::get('/plans', [PlanController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/api', [ApiController::class, 'index']);

Route::prefix('users')->group(function () {
    Route::get('/teams', [TeamAccountController::class, 'index']);
    Route::get('/accounts', [UserAccountController::class, 'index']);
    Route::get('/plans', [UserPlanController::class, 'index']);
    Route::get('/payments', [UserPaymentController::class, 'index']);
    Route::get('/api', [UserApiController::class, 'index']);
});
Route::prefix('owner')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
});
Route::prefix('admin')->group(function () {
    Route::resource('/user', AdminUserController::class);
});
