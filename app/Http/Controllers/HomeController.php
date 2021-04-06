<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Main;
use App\Models\Subject;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function accueil()
    {
        $logo = Logo::all();
        $title = Main::all();
        $contact = Contact::all();
        $footer = Footer::all();
        $sujet = Subject::all();
        // $user = User::all();
        $about = About::all();

        $service = DB::table('services')
        ->inRandomOrder()
        ->limit(9)
        ->get();

        $random = DB::table('services')
        ->inRandomOrder()
        ->limit(3)
        ->get();

        $testimonial = DB::table('testimonials')
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();

                
        // $user2 = DB::table('users')
        // ->where('fonction_id', '!=', 1)
        // ->inRandomOrder()
        // ->limit(2)
        // ->get();

        
        return view('welcome', compact('logo', 'title', 'sujet', 'contact', 'footer', 'testimonial', 'about', 'random', 'service'));
    }
}
