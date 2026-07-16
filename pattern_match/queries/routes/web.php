<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\PatternController;

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


Route::get('customers',[QueryController::class,'index']);
Route::post('customers',[QueryController::class,'save']);



Route::get('insert',[QueryController::class,'insert']);  //insert

Route::get('update',[QueryController::class,'update']); //update

Route::get('delete',[QueryController::class,'delete']); //delete

Route::get('pluck',[QueryController::class,'pluck']);  //pluck (return data simply not in array with foreach in controller)


Route::get('aggregate',[QueryController::class,'aggregate']);  //aggregates




Route::get('exist',[QueryController::class,'exist']); //exist

Route::get('select',[QueryController::class,'select']);  //select()

Route::get('distinct',[QueryController::class,'distinct']); //distinct





Route::get('where',[QueryController::class,'where']);  // where()

Route::get('orwhere',[QueryController::class,'orwhere']); //orWhere()

Route::get('whereNot',[QueryController::class,'whereNot']); //orWhere()





Route::get('whereBetween',[QueryController::class,'whereBetween']); //whereBetween

Route::get('whereIn',[QueryController::class,'whereIn']);          // whereIn

Route::get('whereNull',[QueryController::class,'whereNull']);     // whereNull





Route::get('logical',[QueryController::class,'logical']);      // logical

Route::get('Ordering',[QueryController::class,'Ordering']);   // Ordering

Route::get('Limit_Offset',[QueryController::class,'Limit_Offset']); //Limit & Offset



Route::get('group_by',[QueryController::class,'group_by']);  //group_by





////////////////////////////////////   PATTERN MATCHING /////////////////////////////////////////




Route::get('start_tri',[PatternController::class,'start_tri']);
Route::get('numbers',[PatternController::class,'numbers']);
Route::get('d',[PatternController::class,'d']);
Route::get('x',[PatternController::class,'x']);
Route::get('y',[PatternController::class,'y']);
Route::get('z',[PatternController::class,'z']);
Route::get('s',[PatternController::class,'s']);
Route::get('q',[PatternController::class,'q']);


Route::get('t',[PatternController::class,'t']);
Route::get('f',[PatternController::class,'f']);
Route::get('g',[PatternController::class,'g']);

Route::get('heart',[PatternController::class,'heart']);
Route::get('myheart',[PatternController::class,'myheart']);
Route::get('myx',[PatternController::class,'myx']);
Route::get('tri',[PatternController::class,'tri']);
Route::get('myname',[PatternController::class,'myname']);
Route::get('myx',[PatternController::class,'myx']);
Route::get('myy',[PatternController::class,'myy']);

Route::get('myz',[PatternController::class,'myz']);
Route::get('myt',[PatternController::class,'myt']);
Route::get('myf',[PatternController::class,'myf']);         


Route::get('myo',[PatternController::class,'myo']);
Route::get('dummy',[PatternController::class,'dummy']);
Route::get('mydiamond',[PatternController::class,'mydiamond']);      