<?php

namespace App\Http\Controllers;

use App\Models\TipeBuku;
use Illuminate\Http\Request;

class TipeBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TipeBuku::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = TipeBuku::create($request->all());
        return response()->json([
            'message' => 'Tags Berhasil Ditambahkan',
            'data' => $data
        ]);
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
    public function show(TipeBuku $TipeBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipeBuku  $TipeBuku
     * @return \Illuminate\Http\Response
     */
    public function edit(TipeBuku $TipeBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipeBuku  $TipeBuku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipeBuku $TipeBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipeBuku  $TipeBuku
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipeBuku $TipeBuku)
    {
        //
    }
}
