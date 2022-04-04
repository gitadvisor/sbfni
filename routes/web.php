<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

Route::get('/backend', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/history', [HomeController::class, 'history'])->name('history');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/home/teachers', [HomeController::class, 'home_teachers'])->name('home_teachers');
Route::get('/course_details', [HomeController::class, 'course_details'])->name('course_details');
Route::get('/home/teacher_details/{id}', [HomeController::class, 'home_teacher_details'])->name('home_teacher_details');
Route::get('/admission_information', [HomeController::class, 'admission_information'])->name('admission_information');
Route::get('/admission_procedure', [HomeController::class, 'admission_procedure'])->name('admission_procedure');
Route::get('/download', function () {
    return Storage::download('public/files/admission_form.pdf');
})->name('admission_from');


Route::get('/home/notices', [HomeController::class, 'home_notices'])->name('home_notices');
Route::get('/home/contact', [HomeController::class, 'contact'])->name('contact');




Route::middleware('auth')->group(function () {
    Route::get('/admin/home', function () {
        return view('backend.home');
    })->name('admin.home');

    //Role
    Route::get('/admin/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/admin/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/admin/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/admin/roles/{role}', [RoleController::class, 'show'])->name('roles.show');
    Route::get('/admin/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/admin/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/admin/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');


    // User

    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Event
    Route::get('/admin/events/trashed-news', [EventController::class, 'trash'])
    ->name('events.trashed');
    Route::get('/admin/events/trashed-events/{events}/restore', [EventController::class, 'restore'])->name('events.restore');
    Route::delete('/admin/events/trashed-events/{events}/delete', [EventController::class, 'delete'])->name('events.delete');

    Route::resource('/admin/events', EventController::class);


    // Notice

    Route::get('/admin/notices/trashed-notices', [NoticeController::class, 'trash'])
        ->name('notices.trashed');
    Route::get('/admin/notices/trashed-notices/{notice}/restore', [NoticeController::class, 'restore'])->name('notices.restore');
    Route::delete('/admin/notices/trashed-notices/{notice}/delete', [NoticeController::class, 'delete'])->name('notices.delete');

    Route::resource('/admin/notices', NoticeController::class);


    //News
    Route::get('/admin/news/trashed-news', [NewsController::class, 'trash'])
    ->name('news.trashed');
    Route::get('/admin/news/trashed-news/{news}/restore', [NewsController::class, 'restore'])->name('news.restore');
    Route::delete('/admin/news/trashed-news/{news}/delete', [NewsController::class, 'delete'])->name('news.delete');

    Route::resource('/admin/news', NewsController::class);

    //Qutation
    Route::get('/admin/quotations/trashed-quotations', [QuotationController::class, 'trash'])
    ->name('quotations.trashed');
    Route::get('/admin/quotations/trashed-quotations/{quotation}/restore', [QuotationController::class, 'restore'])->name('quotations.restore');
    Route::delete('/admin/quotations/trashed-quotations/{quotation}/delete', [QuotationController::class, 'delete'])->name('quotations.delete');

    Route::resource('/admin/quotations', QuotationController::class);

    //Teacher

    Route::get('/admin/teachers/trashed-teachers', [TeacherController::class, 'trash'])
        ->name('teachers.trashed');
    Route::get('/admin/teachers/trashed-teachers/{teacher}/restore', [TeacherController::class, 'restore'])->name('teachers.restore');
    Route::delete('/admin/teachers/trashed-teachers/{teacher}/delete', [TeacherController::class, 'delete'])->name('teachers.delete');

    Route::resource('/admin/teachers', TeacherController::class);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
