<?php

namespace App\Http\Controllers;

use App\Models\Elaun;
use Illuminate\Http\Request;

class ElaunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $elaun = Elaun::create([
            'nama_elaun1' => $request->nama_elaun1,
            'nama_elaun2' => $request->nama_elaun2,
            'nama_elaun3' => $request->nama_elaun3,
            'nama_elaun4' => $request->nama_elaun4,
            'nama_elaun5' => $request->nama_elaun5,
            'nama_elaun6' => $request->nama_elaun6,
            'nama_elaun7' => $request->nama_elaun7,
            'nama_elaun8' => $request->nama_elaun8,
            'nama_elaun9' => $request->nama_elaun9,
            'nama_elaun10' => $request->nama_elaun10,
        ]);

        return back()->with('success', 'text');
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
        //
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
    }
}
