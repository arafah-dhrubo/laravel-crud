<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', [CrudController::class, 'showData']);
Route::get('/add',[CrudController::class, 'addData']);
Route::post('/store',[CrudController::class, 'storeData']);
Route::get('/edit-data/{id}', [CrudController::class, 'editData']);
Route::post('/update-data/{id}', [CrudController::class, 'updateData']);
Route::get('/delete-data/{id}', [CrudController::class, 'deleteData']);
