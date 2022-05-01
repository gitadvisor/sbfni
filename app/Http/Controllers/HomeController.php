<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use App\Models\Notice;
use App\Models\Teacher;
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
        return view('frontend.homenew');
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
        $teacher = Teacher::find($id);
        return view('frontend.teacher_details', ['teacher' => $teacher]);
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
        $notices = Notice::all();
        return view('frontend.notices', ['notices'=>$notices]);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function events()
    {
        $events = Event::all();
        return view('frontend.events', ['events'=>$events]);
    }

    public function event_details($id)
    {
       
        $newevent = Event::where('id', $id)->firstOrFail();
       
        $otherEvents = Event::where('id', '!=',$id)->limit(4)->get();
       
       
        return view('frontend.event_details', ['newevent' => $newevent, 'otherEvents' => $otherEvents]);

    }
    public function news()
    {
        $newses = News::all();
        // dd($newses);
        return view('frontend.news', ['newses'=>$newses]);
    }

    public function news_details($id)
    {
        $newnews = News::where('id', $id)->first();
        // dd($news);
        return view('frontend.news_details', ['newnews'=>$newnews]);
    }

    
}
