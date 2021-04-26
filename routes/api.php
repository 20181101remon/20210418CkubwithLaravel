<?php

use App\Http\Controllers\ClubinfoController;
use App\Http\Controllers\ClubofplanController;
use App\Http\Controllers\ClubofclassrecordController;
use App\Http\Controllers\FinancialtableController;
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
Route::get('/clubs/{id}', [ClubinfoController::class,'show']);
Route::post('/clubs',[ClubinfoController::class,'store']);
Route::put('/clubs/{id}',[ClubinfoController::class,'update']);
Route::delete('/clubs/{id}',[ClubinfoController::class,'destroy']);

// Route::get('/clubOfplan',[ClubofplanController::class,'index']);
Route::get('/clubOfplan/{id}',[ClubofplanController::class,'show']);
Route::post('/clubOfplan',[ClubofplanController::class,'store']);
Route::put('/clubOfplan/{id}',[ClubofplanController::class,'update']);
Route::delete('/clubOfplan/{id}',[ClubofplanController::class,'destroy']);


Route::get('/clubOfclassrecord',[ClubofclassrecordController::class,'index']);
Route::get('/clubOfclassrecord/{id}',[ClubofclassrecordController::class,'showALL']);
Route::get('/clubOfclassrecord/{id}/{date}',[ClubofclassrecordController::class,'show']);
Route::post('/clubOfclassrecord',[ClubofclassrecordController::class,'store']);
Route::put('/clubOfclassrecord/{id}',[ClubofclassrecordController::class,'update']);
Route::delete('/clubOfclassrecord/{id}',[ClubofclassrecordController::class,'destroy']);

Route::get('/financialtable/{id}',[FinancialtableController::class,'show']);
Route::post('/financialtable',[FinancialtableController::class,'store']);
Route::put('/financialtable/{id}',[FinancialtableController::class,'update']);
Route::delete('/financialtable/{id}',[FinancialtableController::class,'destroy']);

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
