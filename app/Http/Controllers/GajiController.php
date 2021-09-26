<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Elaun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GajiController extends Controller
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
        $ic = Auth::user()->ic;
        $data = DB::table('profiles')->where('user_ic', $ic)->first();

        return view('gaji.create', compact('data'));
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
            'elaun1' => $request->elaun1,
            'elaun2' => $request->elaun2,
            'jumlah_elaun' => $request->jumlah_elaun,
        ]);

        $gaji = Gaji::create([
            'tarikh' => $request->tarikh,
            'user_ic' => $request->user_ic,
            'gaji_pokok' => $request->gaji_pokok,
            'gaji_bersih' => $request->gaji_bersih,
            'bank' => $request->bank,
            'elaun_id' => $elaun->id,
            'caruman_majikan' => $request->caruman_majikan,
            'caruman_pekerja' => $request->caruman_pekerja,
        ]);

        return back()->with('success', 'text');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit(Gaji $gaji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gaji $gaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaji $gaji)
    {
        //
    }
}
