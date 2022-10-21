<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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
Route::get('/people',[PeopleController::class,'get_all_people'])->name('people');
Route::get('/people/edit/{id}',[PeopleController::class,'get_people_by_id']);
Route::post('/people/update/{id}',[PeopleController::class,'edit']);
Route::get('/people/create',[PeopleController::class,'create_people']);
Route::post('/people/addpeople',[PeopleController::class,'add_people']);
Route::get('/people/delete/{id}',[PeopleController::class,'delete_people']);
