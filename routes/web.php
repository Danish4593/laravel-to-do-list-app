<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::resource('task', TaskController::class);
Route::put('/task/update/{id}', [TaskController::class, 'update'])->name('task.update');

// Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');