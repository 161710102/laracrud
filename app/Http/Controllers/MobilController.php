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
        //menampilkan semua data post melalui model 'post'
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
            'gambar' => 'required',
            'nama' => 'required',
            'merk_id' => 'required',
            'deskripsi' => 'required'
        ]);

        $mobils = new Mobil;
        $mobils->gambar = $request->gambar;
        $mobils->nama = $request->nama;
        $mobils->merk_id = $request->merk_id;
        $mobils->deskripsi = $request->deskripsi;
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
        // memanggil data pos berdasrkan id di halaman pos edit
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
         // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'gambar' => 'required',
            'nama' => 'required',
            'merk_id' => 'required',
            'deskripsi' => 'required'
        ]);

        // update data berdasarkan id
        $mobils = Mobil::findOrFail($id);
        $mobils->gambar = $request->gambar;
        $mobils->nama = $request->nama;
        $mobils->merk_id= $request->merk_id;
        $mobils->deskripsi = $request->deskripsi;
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
        // delete data beradasarkan id
        $mobils = Mobil::findOrFail($id);
        $mobils->delete();
        return redirect()->route('mobils.index');  
    }
}
