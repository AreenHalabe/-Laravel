<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/print', function () {
    $obj = new ComputerControler();
    
     $obj.index();

   
});*/

Route::get('/', function () {
    return "Welecome Laravel";
});
Route::get('/update', function () {
    return View('update');
});
/*Route::get('/addcomputers', function () {
    return View('addcomputer');
});
*/

Route::get('/addcomputer','App\Http\Controllers\ComputerControler@insertform');
Route::post('/create','App\Http\Controllers\ComputerControler@insert');



Route::get('/allcomputers','App\Http\Controllers\ComputerControler@index');