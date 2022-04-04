<?php
        use Illuminate\Support\Facades\Route;
        
// Beginning Of NoticeApiController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\NoticeApiController;

Route::prefix('api')->group(function () {
    Route::prefix('notices')->group(function () {
        Route::get('/', [NoticeApiController::class, 'index']);
        Route::get('/show/{id}', [NoticeApiController::class, 'show']);
        Route::get('/edit/{id}', [NoticeApiController::class, 'edit']);
        Route::post('/store', [NoticeApiController::class, 'store']);
        Route::post('/update/{id}', [NoticeApiController::class, 'update']);
        Route::post('/delete/{id}', [NoticeApiController::class, 'destroy']);
    });
});

// End Of NoticeApiController Routes

// Beginning Of NewsApiController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\NewsApiController;

Route::prefix('api')->group(function () {
    Route::prefix('news')->group(function () {
        Route::get('/', [NewsApiController::class, 'index']);
        Route::get('/show/{id}', [NewsApiController::class, 'show']);
        Route::get('/edit/{id}', [NewsApiController::class, 'edit']);
        Route::post('/store', [NewsApiController::class, 'store']);
        Route::post('/update/{id}', [NewsApiController::class, 'update']);
        Route::post('/delete/{id}', [NewsApiController::class, 'destroy']);
    });
});

// End Of NewsApiController Routes

// Beginning Of EventApiController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\EventApiController;

Route::prefix('api')->group(function () {
    Route::prefix('events')->group(function () {
        Route::get('/', [EventApiController::class, 'index']);
        Route::get('/show/{id}', [EventApiController::class, 'show']);
        Route::get('/edit/{id}', [EventApiController::class, 'edit']);
        Route::post('/store', [EventApiController::class, 'store']);
        Route::post('/update/{id}', [EventApiController::class, 'update']);
        Route::post('/delete/{id}', [EventApiController::class, 'destroy']);
    });
});

// End Of EventApiController Routes

// Beginning Of QuotationApiController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\QuotationApiController;

Route::prefix('api')->group(function () {
    Route::prefix('quotations')->group(function () {
        Route::get('/', [QuotationApiController::class, 'index']);
        Route::get('/show/{id}', [QuotationApiController::class, 'show']);
        Route::get('/edit/{id}', [QuotationApiController::class, 'edit']);
        Route::post('/store', [QuotationApiController::class, 'store']);
        Route::post('/update/{id}', [QuotationApiController::class, 'update']);
        Route::post('/delete/{id}', [QuotationApiController::class, 'destroy']);
    });
});

// End Of QuotationApiController Routes


// Beginning Of TeacherApiController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\TeacherApiController;

Route::prefix('api')->group(function () {
    Route::prefix('teachers')->group(function () {
        Route::get('/', [TeacherApiController::class, 'index']);
        Route::get('/show/{id}', [TeacherApiController::class, 'show']);
        Route::get('/edit/{id}', [TeacherApiController::class, 'edit']);
        Route::post('/store', [TeacherApiController::class, 'store']);
        Route::post('/update/{id}', [TeacherApiController::class, 'update']);
        Route::post('/delete/{id}', [TeacherApiController::class, 'destroy']);
    });
});

// End Of TeacherApiController Routes


