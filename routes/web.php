<?php

  use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskShow;
 use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 

Route::get('/', TaskIndex::class)->name('index');
Route::get('/tasks/{task}', TaskShow::class)->name('show');

 