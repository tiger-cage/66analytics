<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ui\HelpController;
use App\Http\Controllers\Ui\PricingController;

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
Route::get('/pricing', [PricingController::class, 'index']);
Route::get('/help', [HelpController::class, 'index']);

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/accounts', [AccountController::class, 'index']);
Route::get('/plans', [PlanController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/api', [ApiController::class, 'index']);