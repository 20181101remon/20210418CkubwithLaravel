<?php
use App\Http\Controllers\ClubinfoController;
use App\Models\ClubInfo;
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


// Route::get('/clubs',[ClubinfoController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
