<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use App\Models\Logo;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $user = User::where('approved', true)->get();
        $userValidate = User::where('approved', false)->get();
        return view('boTeam', compact('logo', 'user', 'userValidate'));
    }

    public function userValidate($id)
    {
        $update = User::find($id);
        $update->approved = 1;
        $update->save();
        return redirect()->back();
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
        // $store = new User;
        // Storage::put('public/img/users/', $request->file('src'));
        // $store->src = $request->file('src')->hashName();
        // $store->name = $request->name;
        // $store->email = $request->email;
        // $store->name = $request->name;
        // $store->name = $request->name;
        // $store->function = $request->function;
        // $store->save();
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = User::find($id);
        return view('show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = User::find($id);
        $fonction = Fonction::all();
        return view('editTeam', compact('edit', 'fonction'));
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
        $update = User::find($id);
        Storage::delete('public/img/users/'.$update->src);
        Storage::put('public/img/users/', $request->file('src'));
        $update->src = $request->file('src')->hashName();
        $update->name = $request->name;
        $update->email = $request->email;
        $update->number = $request->number;
        $update->description = $request->description;
        $update->fonction_id = $request->fonction_id;
        $update->save();
        return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = User::find($id);
        Storage::delete('public/img/users/'.$destroy->src);
        $destroy->delete();
        return redirect()->back();
    }
}
