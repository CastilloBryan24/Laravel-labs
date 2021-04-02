<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Main;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
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

        $features = DB::table('services')
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();

        $page = DB::table('services')
        ->orderBy('id', 'desc')
        ->paginate(9);
        return view('services', compact('logo', 'contact', 'footer', 'page', 'title', 'features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backoffice()
    {
        $logo = Logo::all();
        $page = DB::table('services')
        ->orderBy('id', 'desc')
        ->paginate(9);

        return view('boService', compact('page', 'logo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Service;
        $store->icone = $request->icone;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->save();
        return redirect('/boService');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Service::find($id);
        return view('editService', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Service::find($id);
        $update->icone = $request->icone;
        $update->title = $request->title;
        $update->text = $request->text;
        $update->save();
        return redirect('/boService');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Service::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
