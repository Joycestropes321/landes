<?php 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use Yajra\Datatables\Datatables;
if (App::environment('production')) {
    URL::forceScheme('https');
}
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => ['web']], function () {
Route::get('/account/history/', [AccountController::class, 'history']);
Route::post('/account/mail', [AccountController::class, 'sendMail']);
Route::post('/account/saveTax', [AccountController::class, 'saveTax']);
Route::post('/account/saveImt', [AccountController::class, 'saveImt']);
Route::post('/account/saveAtcc', [AccountController::class, 'saveAtcc']);
Route::post('/account/confirmTransfer', [AccountController::class, 'confirmTransfer']);

Route::get('getUser', function (Request $request) {
    if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
})->name('user.index'); 

});