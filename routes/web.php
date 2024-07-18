<?php

use auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_auth;
use App\Livewire\L_pasien;
use App\Livewire\L_landing;
use App\Livewire\L_testing;
use App\Livewire\L_training;
use App\Livewire\L_dashboard;
 
Route::controller(C_auth::class)->group(function () {
  Route::get('login', 'index')->name('login');
  Route::post('login', 'authenticate');
  // Route::get('form-register', 'form_registration')->name('form-resgister');
  // Route::post('register', 'registration')->name('resgister');
  Route::get('logout', 'logout')->name('logout')->middleware('auth');;
});

Route::get('/', L_landing::class);
Route::get('/dashboard', L_dashboard::class);
Route::get('/training', L_training::class);
Route::get('/testing', L_testing::class);
Route::get('/pasien', L_pasien::class);
// Route::controller(L_training::class)->group(function () {
//     Route::get('training', 'index');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('example', function () {
//     return view('example');
// });

// Route::controller(ExampleController::class)->group(function () {
//     Route::get('example', 'index');
// });