<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jual;
class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $juals = Jual::all();
        return view('jual.index',compact('juals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jual.create');
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
            'nama' => 'required|',
            'no_telp' => 'required|',
            'email' => 'required',
            'nama_mobil' => 'required',
            'merk_id' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required|'
        ]);

        $juals = new Jual;
        $juals->nama = $request->nama;
        $juals->no_telp = $request->no_telp;
        $juals->email = $request->email;
        $juals->nama_mobil = $request->nama_mobil;
        $juals->jenis_id = $request->jenis_id;
        $juals->merk_id = $request->merk_id;
        $juals->tahun = $request->tahun;
        $juals->harga = $request->harga;
        $juals->foto = $request->foto;
        $juals->deskripsi = $request->deskripsi;
        $juals->save();
        return redirect()->route('juals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juals = Jual::findOrFail($id);
        return view('jual.show',compact('juals'));
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
        $juals =Jual::findOrFail($id);
        return view('jual.edit',compact('juals'));
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
            'nama' => 'required|',
            'no_telp' => 'required|',
            'email' => 'required',
            'nama_mobil' => 'required',
            'merk_id' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required|'
        ]);

        // update data berdasarkan id
       $juals = new Jual;
        $juals->nama = $request->nama;
        $juals->no_telp = $request->no_telp;
        $juals->email = $request->email;
        $juals->nama_mobil = $request->nama_mobil;
        $juals->jenis_id = $request->jenis_id;
        $juals->merk_id = $request->merk_id;
        $juals->tahun = $request->tahun;
        $juals->harga = $request->harga;
        $juals->foto = $request->foto;
        $juals->deskripsi = $request->deskripsi;
        $juals->save();
        return redirect()->route('juals.index');
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
        $juals = Jual::findOrFail($id);
        $juals->delete();
        return redirect()->route('juals.index');  
    }
}
