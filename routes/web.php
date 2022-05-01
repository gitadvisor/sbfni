<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarkDestributionController;
use App\Http\Controllers\MarkInputController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YearController;
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
Route::get('/home/teacher_details/{teacher}', [HomeController::class, 'home_teacher_details'])->name('home_teacher_details');
Route::get('/admission_information', [HomeController::class, 'admission_information'])->name('admission_information');
Route::get('/admission_procedure', [HomeController::class, 'admission_procedure'])->name('admission_procedure');
Route::get('/download', function () {
    return Storage::download('public/files/admission_form.pdf');
})->name('admission_from');


Route::get('/home/notices', [HomeController::class, 'home_notices'])->name('home_notices');
Route::get('/home/contact', [HomeController::class, 'contact'])->name('contact');

//news
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news/{id}', [HomeController::class, 'news_details'])->name('news_details');

//events
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/home/events/{id}', [HomeController::class, 'event_details'])->name('event_details');




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

    // Route::resource('/admin/users', UserController::class);
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

    // Route::resource('/admin/events', EventController::class);
    Route::get('/admin/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/admin/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/admin/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/admin/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');


    //Profiles
    Route::get('/admin/profiles/trashed-profiles', [ProfileController::class, 'trash'])
        ->name('profiles.trashed');
    Route::get('/admin/profiles/trashed-profiles/{profile}/restore', [ProfileController::class, 'restore'])->name('profiles.restore');
    Route::delete('/admin/profiles/trashed-profiles/{profile}/delete', [ProfileController::class, 'delete'])->name('profiles.delete');

    // Route::resource('/admin/profiles', ProfileController::class);
    Route::get('/admin/profiles', [ProfileController::class, 'index'])->name('profiles.index');
    Route::get('/admin/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::post('/admin/profiles', [ProfileController::class, 'store'])->name('profiles.store');
    Route::get('/admin/profiles/{profile}', [ProfileController::class, 'show'])->name('profiles.show');
    Route::get('/admin/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::put('/admin/profiles/{profile}', [ProfileController::class, 'update'])->name('profiles.update');
    Route::delete('/admin/profiles/{profile}', [ProfileController::class, 'destroy'])->name('profiles.destroy');


    // Notice

    Route::get('/admin/notices/trashed-notices', [NoticeController::class, 'trash'])
        ->name('notices.trashed');
    Route::get('/admin/notices/trashed-notices/{notice}/restore', [NoticeController::class, 'restore'])->name('notices.restore');
    Route::delete('/admin/notices/trashed-notices/{notice}/delete', [NoticeController::class, 'delete'])->name('notices.delete');

    // Route::resource('/admin/notices', NoticeController::class);
    Route::get('/admin/notices', [NoticeController::class, 'index'])->name('notices.index');
    Route::get('/admin/notices/create', [NoticeController::class, 'create'])->name('notices.create');
    Route::post('/admin/notices', [NoticeController::class, 'store'])->name('notices.store');
    Route::get('/admin/notices/{notice}', [NoticeController::class, 'show'])->name('notices.show');
    Route::get('/admin/notices/{notice}/edit', [NoticeController::class, 'edit'])->name('notices.edit');
    Route::put('/admin/notices/{notice}', [NoticeController::class, 'update'])->name('notices.update');
    Route::delete('/admin/notices/{notice}', [NoticeController::class, 'destroy'])->name('notices.destroy');



    //News
    Route::get('/admin/news/trashed-news', [NewsController::class, 'trash'])
        ->name('news.trashed');
    Route::get('/admin/news/trashed-news/{news}/restore', [NewsController::class, 'restore'])->name('news.restore');
    Route::delete('/admin/news/trashed-news/{news}/delete', [NewsController::class, 'delete'])->name('news.delete');

    // Route::resource('/admin/news', NewsController::class);
    Route::get('/admin/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/admin/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/admin/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/admin/news/{news}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/admin/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/admin/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/admin/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');


    //Qutation
    Route::get('/admin/quotations/trashed-quotations', [QuotationController::class, 'trash'])
        ->name('quotations.trashed');
    Route::get('/admin/quotations/trashed-quotations/{quotation}/restore', [QuotationController::class, 'restore'])->name('quotations.restore');
    Route::delete('/admin/quotations/trashed-quotations/{quotation}/delete', [QuotationController::class, 'delete'])->name('quotations.delete');

    // Route::resource('/admin/quotations', QuotationController::class);
    Route::get('/admin/quotations', [QuotationController::class, 'index'])->name('quotations.index');
    Route::get('/admin/quotations/create', [QuotationController::class, 'create'])->name('quotations.create');
    Route::post('/admin/quotations', [QuotationController::class, 'store'])->name('quotations.store');
    Route::get('/admin/quotations/{quotation}', [QuotationController::class, 'show'])->name('quotations.show');
    Route::get('/admin/quotations/{quotation}/edit', [QuotationController::class, 'edit'])->name('quotations.edit');
    Route::put('/admin/quotations/{quotation}', [QuotationController::class, 'update'])->name('quotations.update');
    Route::delete('/admin/quotations/{quotation}', [QuotationController::class, 'destroy'])->name('quotations.destroy');
    

    //Teacher

    Route::get('/admin/teachers/trashed_teachers', [TeacherController::class, 'trash'])
        ->name('teachers.trashed');
    Route::get('/admin/teachers/trashed_teachers/{teacher}/restore', [TeacherController::class, 'restore'])->name('teachers.restore');
    Route::delete('/admin/teachers/trashed_teachers/{teacher}/delete', [TeacherController::class, 'delete'])->name('teachers.delete');

    Route::resource('/admin/teachers', TeacherController::class);

     //course

    Route::resource('/admin/course', CourseController::class);

    //Section

    Route::resource('/admin/section',SectionController::class);

    //markdestribution

    Route::resource('/admin/markdestribution', MarkDestributionController::class);

    //markinput

    Route::resource('/admin/markinput', MarkInputController::class);

    //Year

    Route::resource('/admin/year',YearController::class);


    // //student

    // Route::resource('/admin/students', StudentController::class);


});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
