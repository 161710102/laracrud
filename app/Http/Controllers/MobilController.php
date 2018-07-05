<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobil.index',compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|max:255',
            'model' => 'required|min:6',
            'spesifikasi' => 'required|max:50',
            'engine' => 'required|max:50',
            'harga' => 'required'
        ]);

        $mobils = new Mobil;
        $mobils->nama = $request->nama;
        $mobils->model = $request->model;
        $mobils->spesifikasi = $request->spesifikasil;
        $mobils->engine = $request->engine;
        $mobils->harga = $request->harga;
        $mobils->save();
        return redirect()->route('mobils.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobils = Mobil::findOrFail($id);
        return view('mobil.show',compact('mobils'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobils = Mobil::findOrFail($id);
        return view('mobil.edit',compact('mobils'));
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
        $this->validate($request,[
            'nama' => 'required|max:255',
            'model' => 'required|min:6',
            'spesifikasi' => 'required|max:50',
            'engine' => 'required|max:50',
            'harga' => 'required'
        ]);

        $mobils = Mobil::findOrFail($id);
        $mobils->nama = $request->nama;
        $mobils->model = $request->model;
        $mobils->spesifikasi = $request->spesifikasil;
        $mobils->engine = $request->engine;
        $mobils->harga = $request->harga;
        $mobils->save();
        return redirect()->route('mobils.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobils = Mobil::findOrFail($id);
        $mobils->delete();
        return redirect()->route('mobils.index');  
    }
}
     