<?php

namespace App\Http\Controllers;

use App\Models\peramalan;
use Illuminate\Http\Request;

class PeramalanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = peramalan::paginate(10);
        return view('admin.penjualan.home', compact('data'));
        //
    }
    public function trands()
    {
        $data = peramalan::paginate(10);
        return view('admin.trands.home', compact('data'));
        //
    }
    public function inflasi()
    {
        $data = peramalan::paginate(10);
        return view('admin.inflasi.home', compact('data'));
        //
    }
    public function minat()
    {
        $data = peramalan::paginate(10);
        return view('admin.minat.home', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penjualan.create');
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
        peramalan::create($request->all());
        return redirect('/penjualan')->with('sukses', 'data berhasil di tambahkan');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function show(peramalan $peramalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function edit(peramalan $peramalan)
    {
        return view('admin.penjualan.update', compact('peramalan'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peramalan $peramalan)
    {
        $peramalan->update($request->all());
        return redirect('/penjualan')->with('sukses', 'data berhasil ditambah');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(peramalan $peramalan)
    {
        $peramalan->delete();
        return redirect('/penjualan')->with('sukses', 'data berhasil ditambah');
        //
    }
}
