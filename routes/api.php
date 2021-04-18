<?php

use App\Http\Controllers\ClubinfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/clubs',[ClubinfoController::class,'index']);


Route::post('/clubs',[ClubinfoController::class,'store']);

    // return ClubInfo::create([
    //     'club_name'=>'測試開發',
    //     'club_type'=>'測試性',
    //     'club_website'=>'',
    //     'club_purpose'=>'方便測試與開發CLUB SHOW網頁而建立',
    //     'club_icon'=>'',
    //     'club_introduce'=>'為了三學分出賣靈魂的瘋子們',
    //     'club_cover'=>'',
    //     'club_place'=>'無所不在',
    //     'club_time'=>'無時不有',
    //     'source_of_funding'=>'無',
    // ]);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
