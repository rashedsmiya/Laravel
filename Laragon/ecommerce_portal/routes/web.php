<?php

    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\SubcategoryController;


    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', [HomeController::class,'index']);

    Route::get('/category/{slug}', [CategoryController::class,'detail']);
    
    Route::get('/category/electronics/{slug}',[SubcategoryController::class, 'detail']);
    