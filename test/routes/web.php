<?php

use App\Http\Controllers\CategryController;
use App\Http\Controllers\TestViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[TestViewController::class, 'test'])->name('test-view');
Route::get('/category',[CategryController::class, 'index'])->name('category.index');
Route::get('/category/create',[CategryController::class, 'create'])->name('category.create');
Route::post('/category/store',[CategryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}',[CategryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategryController::class, 'delete'])->name('category.delete');
Route::get('/category/status/{id}',[CategryController::class, 'status'])->name('category.status');


