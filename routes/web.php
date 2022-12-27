<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todolist500Controller;
// use App\Http\Controllers\todomodel;
use App\Models\todolist500;

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
//     return view('todolist500');
// });
//Route::get('/',''todmodel@login')
Route::get('/',[Todolist500Controller::class, 'login']);
Route::get('/Create',[Todolist500Controller::class, 'new']); 
Route::get('/edit/{id}',[Todolist500Controller::class, 'edit']); 

Route::get('/save',[Todolist500Controller::class, 'store']); 
Route::get('/delete/{id}',[Todolist500Controller::class, 'destroy']); 





