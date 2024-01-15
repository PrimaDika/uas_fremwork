<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

// Route::get('/', function () {
//     return view('home');
// })->name('home');
// Route::get('create', function () {
//     return view('create');
// })->name('create');
// Route::get('update', function () {
//     return view('update');
// });

// Route::get('create', [BarangController::class], 'index'); 
Route::post('create-add',[BarangController::class,'store']);


// barang : CRUD

// read
Route::get('/',[BarangController::class, 'index'])->name('home');

// create
Route::get('/create',[BarangController::class, 'create'])->name('create');
Route::post('/create/save',[BarangController::class, 'createsave'])->name('createsave');

// update
Route::get('/update/{id}',[BarangController::class, 'update'])->name('update');
Route::post('/update/save',[BarangController::class, 'updatesave'])->name('updatesave');
// delete
Route::get('/delete/{id}',[BarangController::class, 'delete'])->name('delete');
