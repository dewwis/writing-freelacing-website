<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/about',[HomeController::class, 'about']);

Route::get('/services', [HomeController::class, 'services']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/teams', [HomeController::class, 'teams']);

Route::get('/features', [HomeController::class, 'features']);

Route::get('/projects', [HomeController::class, 'projects']);

Route::get('/reviews', [HomeController::class, 'reviews']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('redirect', [HomeController::class, 'redirect']);

Route::get('/home', [AdminController::class, 'home']);

Route::get('/available', [AdminController::class, 'available']);

Route::get('/pending', [AdminController::class, 'pending']);

Route::get('/completed', [AdminController::class, 'completed']);

Route::get('/paid', [AdminController::class, 'paid']);

Route::get('/progress', [AdminController::class, 'progress']);

Route::get('/orders', [UserController::class, 'orders']);

Route::post('/uploadorders', [UserController::class, 'uploadorders']);

Route::get('/download{file}', [AdminController::class, 'download']);

Route::get('/orderview', [AdminController::class, 'orderview']);

Route::get('/dashboard', [UserController::class, 'dashboard']);

