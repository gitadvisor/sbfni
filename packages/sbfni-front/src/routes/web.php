<?php
        use Illuminate\Support\Facades\Route;
        
// Beginning Of NoticeController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\NoticeController;

Route::group(['middleware' => ['web'], 'prefix' => 'notices', 'as' => 'notices.'], function () 
{
    Route::get('/', [NoticeController::class, 'index'])->name('index');
    Route::get('/create', [NoticeController::class, 'create'])->name('create');
    Route::get('/show/{id}', [NoticeController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [NoticeController::class, 'edit'])->name('edit');
    Route::post('/store', [NoticeController::class, 'store'])->name('store');
    Route::post('/update/{id}', [NoticeController::class, 'update'])->name('update');
    Route::post('/delete/{id}', [NoticeController::class, 'destroy'])->name('delete');

});

// End Of NoticeController Routes

// Beginning Of NewsController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\NewsController;

Route::group(['middleware' => ['web'], 'prefix' => 'news', 'as' => 'news.'], function () 
{
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/create', [NewsController::class, 'create'])->name('create');
    Route::get('/show/{id}', [NewsController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit');
    Route::post('/store', [NewsController::class, 'store'])->name('store');
    Route::post('/update/{id}', [NewsController::class, 'update'])->name('update');
    Route::post('/delete/{id}', [NewsController::class, 'destroy'])->name('delete');

});

// End Of NewsController Routes

// Beginning Of EventController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\EventController;

Route::group(['middleware' => ['web'], 'prefix' => 'events', 'as' => 'events.'], function () 
{
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('/create', [EventController::class, 'create'])->name('create');
    Route::get('/show/{id}', [EventController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit');
    Route::post('/store', [EventController::class, 'store'])->name('store');
    Route::post('/update/{id}', [EventController::class, 'update'])->name('update');
    Route::post('/delete/{id}', [EventController::class, 'destroy'])->name('delete');

});

// End Of EventController Routes

// Beginning Of QuotationController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\QuotationController;

Route::group(['middleware' => ['web'], 'prefix' => 'quotations', 'as' => 'quotations.'], function () 
{
    Route::get('/', [QuotationController::class, 'index'])->name('index');
    Route::get('/create', [QuotationController::class, 'create'])->name('create');
    Route::get('/show/{id}', [QuotationController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [QuotationController::class, 'edit'])->name('edit');
    Route::post('/store', [QuotationController::class, 'store'])->name('store');
    Route::post('/update/{id}', [QuotationController::class, 'update'])->name('update');
    Route::post('/delete/{id}', [QuotationController::class, 'destroy'])->name('delete');

});

// End Of QuotationController Routes


// Beginning Of TeacherController Routes

use Breakit\Sbfni\Sbfnifront\Http\Controllers\TeacherController;

Route::group(['middleware' => ['web'], 'prefix' => 'teachers', 'as' => 'teachers.'], function () 
{
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::get('/show/{id}', [TeacherController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
    Route::post('/store', [TeacherController::class, 'store'])->name('store');
    Route::post('/update/{id}', [TeacherController::class, 'update'])->name('update');
    Route::post('/delete/{id}', [TeacherController::class, 'destroy'])->name('delete');

});

// End Of TeacherController Routes


