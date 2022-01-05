<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
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

Route::get('/welcome/', function () { return view('welcome'); });

Route::get('/', function () {
	$context = [
		'name' => 'Maula',
		'title' => 'Home',
	];
    return view('home', $context);
});


Route::get('/auth/', function() {
	$context = [
		'title' => 'Login',
	];
	return view('auth', $context);
});

// TASKS
Route::get('/tasks/', [TaskController::class, 'show',]);
Route::post('/tasks/create/', [TaskController::class, 'create',]);
Route::get('/tasks/edit/{id}/', [TaskController::class, 'edit',]);
Route::put('/tasks/update/{id}/', [TaskController::class, 'update',]);
Route::delete('/tasks/delete/{id}/', [TaskController::class, 'delete',]);