<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function home()
    {
        // $notices = Notice::get()->latest(3);
        // $events = Event::get()->latest(4);
        // $news = News::get()->latest(3);
        // $quotations = Quotation::get()->latest(3);
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function history()
    {
        return view('frontend.history');
    }

    public function courses()
    {
        return view('frontend.courses');
    }

    public function home_teachers()
    {
        return view('frontend.teachers');
    }

    public function course_details()
    {
        return view('frontend.course_details');
    }

    public function home_teacher_details($id)
    {
        return view('frontend.teacher_details');
    }

    public function admission_information()
    {
        return view('frontend.admission_information');
    }

    public function admission_procedure()
    {
        return view('frontend.admission_procedure');
    }


    public function home_notices()
    {
        return view('frontend.notices');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
