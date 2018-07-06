<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merk;
class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $merks = Merk::all();
        return view('merk.index',compact('merks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merk.create');
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
            'logo' => 'required',
            'merk' => 'required',
            'jenis_id' => 'required',
            'deskripsi' => 'required'
        ]);

        $merks = new Merk;
        $merks->logo = $request->logo;
        $merks->merk = $request->merk;
        $merks->jenis_id = $request->jenis_id;
        $merks->deskripsi = $request->deskripsi;
        $merks->save();
        return redirect()->route('merks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merks = Merk::findOrFail($id);
        return view('merk.show',compact('merks'));
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
        $merks = Merk::findOrFail($id);
        return view('merk.edit',compact('merks'));
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
            'logo' => 'required',
            'merk' => 'required',
            'jenis_id' => 'required',
            'deskripsi' => 'required'
        ]);

        // update data berdasarkan id
        $merks = Merk::findOrFail($id);
        $merks->logo = $request->logo;
        $merks->merk = $request->merk;
        $merks->jenis_id= $request->jenis_id;
        $merks->deskripsi = $request->deskripsi;
        $merks->save();
        return redirect()->route('merks.index');
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
        $merks = Merk::findOrFail($id);
        $merks->delete();
        return redirect()->route('merks.index');  
    }
}
