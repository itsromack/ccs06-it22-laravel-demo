<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\AdditionController;
use App\Http\Controllers\MyformController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greet/{name?}', [GreetingController::class, 'greet']);
Route::get('/add/{a}/{b}', [AdditionController::class, 'getSum']);
Route::get('/myform', [MyformController::class, 'showForm']);
Route::post('/submit-form', [MyformController::class, 'handleSubmit']);

// Route::get('/greet/{name?}', function($name = 'AUF') {
//     return view('greet', ['name' => $name]);
// });
// Route::get('/add/{a}/{b}', function($a, $b) {
//     $sum = $a + $b;
//     return $sum;
// });