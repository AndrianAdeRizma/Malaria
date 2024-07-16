<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExampleController;
use App\Livewire\L_training;
use App\Livewire\L_pasien;
use App\Livewire\L_testing;
 

Route::get('/training', L_training::class);
Route::get('/testing', L_testing::class);
Route::get('/pasien', L_pasien::class);
// Route::controller(L_training::class)->group(function () {
//     Route::get('training', 'index');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('example', function () {
    return view('example');
});

Route::controller(ExampleController::class)->group(function () {
    Route::get('example', 'index');
});