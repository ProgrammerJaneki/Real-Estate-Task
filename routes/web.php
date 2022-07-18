<?php

use App\Http\Controllers\Controller;
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

// Route::get('/dashboard', 'Controller@welcome')->name('welcome');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Controller::class, 'welcome'])->name('welcome');
// Route::get('/sample', [Controller::class, 'about'])->name('about');

Route::get('/sample', [PagesController::class, 'about'])->name('about');

// Route::get('/sample', [PagesController::class, 'index']);

// Route::get('/', 'PagesController@index');

// Route::get('/frame5', Frame5::class);

// Route::get('/frame5', function () {
//     return view('livewire.home.frame5');
// });