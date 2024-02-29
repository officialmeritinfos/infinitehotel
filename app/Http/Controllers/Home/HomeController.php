<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::find(1);

        return view('home.home')->with([
            'siteName'=>$web->name,
            'pageName'=>'Welcome to '.$web->name,
            'web'=>$web,
            'photos'=>Gallery::get()
        ]);
    }
    //about page
    public function about()
    {
        $web = GeneralSetting::find(1);

        return view('home.about')->with([
            'siteName'=>$web->name,
            'pageName'=>'About '.$web->name,
            'web'=>$web
        ]);
    }
    //rooms
    public function rooms()
    {
        $web = GeneralSetting::find(1);

        return view('home.rooms')->with([
            'siteName'=>$web->name,
            'pageName'=>'Our Gallery ',
            'web'=>$web,
            'photos'=>Gallery::get()
        ]);
    }
    //contact
    public function contact()
    {
        $web = GeneralSetting::find(1);

        return view('home.contact')->with([
            'siteName'=>$web->name,
            'pageName'=>'Contact us ',
            'web'=>$web,
            'photos'=>Gallery::get()
        ]);
    }
}
