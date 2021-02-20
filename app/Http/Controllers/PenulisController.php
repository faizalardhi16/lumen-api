<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penulis::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Penulis::create($request->all());
        return response()->json($request);
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
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Penulis::with(['books'])->where('id', $id)->get();
        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function edit(Penulis $penulis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penulis $penulis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penulis $penulis)
    {
        //
    }
}
