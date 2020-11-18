<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class authorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Author::get();
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
        return Author::create([
            "id" => $request->input('id'),
            "nama" => $request->input('nama'),
            "date_of_birth" => $request->input('date_of_birth'),
            "pleace_of_birth" => $request->input('pleace_of_birth'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "no_hp" => $request->input('no_hp'),
            ]);
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
        return Author::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return Author::find($id);
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
        //
        return Author::create([
            "id" => $request->input('id'),
            "nama" => $request->input('nama'),
            "date_of_birth" => $request->input('date_of_birth'),
            "pleace_of_birth" => $request->input('pleace_of_birth'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "no_hp" => $request->input('no_hp'),
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Author::destroy($id);
    }
}
