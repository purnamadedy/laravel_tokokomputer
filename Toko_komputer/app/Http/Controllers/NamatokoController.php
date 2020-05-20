<?php

namespace App\Http\Controllers;

use App\Namatoko;
use Illuminate\Http\Request;

class NamatokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tampil', compact('namatoko'));
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
     * @param  \App\Namatoko  $namatoko
     * @return \Illuminate\Http\Response
     */
    public function show(Namatoko $namatoko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Namatoko  $namatoko
     * @return \Illuminate\Http\Response
     */
    public function edit(Namatoko $namatoko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Namatoko  $namatoko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Namatoko $namatoko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Namatoko  $namatoko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Namatoko $namatoko)
    {
        //
    }
}
