<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_auth;
use App\Livewire\{
Pasien,Landing,Testing,Training,Dashboard
};
 
Route::controller(C_auth::class)->group(function () {
  Route::get('login', 'index')->name('login')->middleware('guest');
  Route::post('login', 'authenticate')->middleware('guest');
  // Route::get('form-register', 'form_registration')->name('form-resgister');
  // Route::post('register', 'registration')->name('resgister');
  Route::get('logout', 'logout')->name('logout')->middleware('auth');
});

Route::get('/', Landing::class)->name('landing');

Route::middleware(['AdminMiddleware'])->group(function () {
  Route::get('/dashboard', Dashboard::class);
  Route::get('/training', Training::class);
  Route::get('/testing', Testing::class);
  Route::get('/pasien', Pasien::class);
});


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