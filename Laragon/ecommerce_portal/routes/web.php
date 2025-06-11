<?php

    use Illuminate\Support\Facades\Route;
    
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\SubcategoryController;
    use App\Http\Controllers\ProductdetailController;
    use App\Http\Controllers\CartController;
    
        
    Route::get('/', function () {
        return view('welcome');
    });  
    
    
    Route::get('/home', [HomeController::class,'index']);

    Route::get('/category/{slug}', [CategoryController::class,'detail']);
    
    Route::get('/category/electronics/{slug}', [SubcategoryController::class, 'detail']);

    Route::get('/category/electronics/tv/{slug}', [ProductdetailController::class, 'detail']);

    Route::get('/cart-list/{slug}',[CartController::class,'list']);
    
    