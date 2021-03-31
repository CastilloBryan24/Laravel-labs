<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Logo;
use App\Models\Main;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $title = Main::all();
        $contact = Contact::all();
        $footer = Footer::all();
        $team2 = Team::all();
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

                
        $team = DB::table('teams')
        ->where('function', '!=', 'CEO')
        ->inRandomOrder()
        ->limit(2)
        ->get();
        
        return view('welcome', compact('logo', 'title', 'contact', 'footer', 'team', 'testimonial', 'about', 'random', 'service', 'team2'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
