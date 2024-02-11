<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;

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

Route::get('/', function () { return view('welcome'); }); // home
Route::get('/docs', [DocController::class, 'index'])->name('docs.index'); // index
Route::get('/docs/new', function(){ return view('docs.create'); })->name('docs.create'); // create
Route::post('/docs/new', [DocController::class, 'store'])->name('docs.store'); // store
Route::get('/docs/{doc}', [DocController::class, 'show'])->name('docs.show'); // read
Route::patch('/docs/{doc}', [DocController::class, 'udate'])->name('docs.update'); // update
Route::delete('/docs/{doc}', [DocController::class, 'destroy'])->name('docs.delete'); // delete