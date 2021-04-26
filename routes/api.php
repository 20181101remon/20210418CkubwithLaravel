<?php

use App\Http\Controllers\ClubinfoController;
use App\Http\Controllers\ClubofplanController;
use App\Http\Controllers\ClubofclassrecordController;
use App\Http\Controllers\FinancialtableController;
use App\Http\Controllers\CluboffeedbackController;
use App\Http\Controllers\ClubactivityapplyController;
use App\Http\Controllers\ClubactivityresultsController;
use App\Http\Controllers\ClubofnewsController;
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

Route::get('/clubOfFeedback',[CluboffeedbackController::class,'index']);
Route::get('/clubOfFeedback/{id}',[CluboffeedbackController::class,'show']);
Route::post('/clubOfFeedback',[CluboffeedbackController::class,'store']);
Route::put('/clubOfFeedback/{id}',[CluboffeedbackController::class,'update']);
Route::delete('/clubOfFeedback/{id}',[CluboffeedbackController::class,'destroy']);

Route::get('/activityapply',[ClubactivityapplyController::class,'index']);
Route::get('/activityapply/{id}',[ClubactivityapplyController::class,'show']);
Route::post('/activityapply',[ClubactivityapplyController::class,'store']);
Route::put('/activityapply/{id}',[ClubactivityapplyController::class,'update']);
Route::delete('/activityapply/{id}',[ClubactivityapplyController::class,'destroy']);

Route::get('/activityresults',[ClubactivityresultsController::class,'index']);
Route::get('/activityresults/{id}',[ClubactivityresultsController::class,'showALL']);
Route::get('/activityresults/{id}/{date}',[ClubactivityresultsController::class,'show']);
Route::post('/activityresults',[ClubactivityresultsController::class,'store']);
Route::put('/activityresults/{id}',[ClubactivityresultsController::class,'update']);
Route::delete('/activityresults/{id}',[ClubactivityresultsController::class,'destroy']);

Route::get('/clubOfnews',[ClubofnewsController::class,'index']);
Route::get('/clubOfnews/{id}',[ClubofnewsController::class,'showALL']);
Route::get('/clubOfnews/{id}/{date}',[ClubofnewsController::class,'show']);
Route::post('/clubOfnews',[ClubofnewsController::class,'store']);
Route::put('/clubOfnews/{id}',[ClubofnewsController::class,'update']);
Route::delete('/clubOfnews/{id}',[ClubofnewsController::class,'destroy']);

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
