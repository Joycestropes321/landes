<?php 
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::get('/auth', [LoginController::class, 'index']);
Route::post('/auth/login', [LoginController::class, 'login']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/account/history/', [AccountController::class, 'history']);
Route::get('/account/profile/', [AccountController::class, 'profile']);
Route::get('/account/transfer/', [AccountController::class, 'transfer']);
Route::get('/account/dashboard/', [AccountController::class, 'dashboard']);
Route::get('/account/coming/', [AccountController::class, 'coming']);


Route::post('/account/saveTax/', [AccountController::class, 'saveTax']);
Route::post('/account/saveImt/', [AccountController::class, 'saveImt']);
Route::post('/account/saveAtcc/', [AccountController::class, 'saveAtcc']);
Route::post('/account/confirmTransfer/', [AccountController::class, 'confirmTransfer']);