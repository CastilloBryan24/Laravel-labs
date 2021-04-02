<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $testimonial = DB::table('testimonials')
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();

        return view('boTestimonial', compact('logo', 'testimonial'));
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
        $store = new Testimonial;
        $store->text = $request->text;
        Storage::put('public/img/avatar/', $request->file('src'));
        $store->src = $request->file('src')->hashName();
        $store->name = $request->name;
        $store->function = $request->function;
        $store->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Testimonial::find($id);
        return view('editTestimonial', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Testimonial::find($id);
        $update->text = $request->text;
        Storage::delete('public/img/avatar/'.$update->src);
        Storage::put('public/img/avatar/', $request->file('src'));
        $update->src = $request->file('src')->hashName();
        $update->name = $request->name;
        $update->function = $request->function;
        $update->save();
        return redirect('/boTestimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Testimonial::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
