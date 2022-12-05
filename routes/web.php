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
 
// Route::get('/', [LoginController::class, 'index']);
Route::get('/', function() {
     return view('landing');
});
Route::get('/auth', [LoginController::class, 'index']);
Route::post('/auth/login', [LoginController::class, 'login']);
// Route::get('/home', [AccountController::class, 'index'])->middleware('authority');

Route::group(['middleware' => ['web']], function () {
    // My Routes
Route::get('/account/profile/', [AccountController::class, 'profile'])->middleware('authority');
Route::get('/account/transfer/', [AccountController::class, 'transfer'])->middleware('authority');
Route::get('/account/dashboard/', [AccountController::class, 'dashboard'])->middleware('authority');
Route::get('/account/coming/', [AccountController::class, 'coming'])->middleware('authority');

Route::get('other', function () {
    dd(Session::get('email'));
}); 
Route::get('/home', [AccountController::class, 'index'])->name('account.index');

});