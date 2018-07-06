<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    protected $table =  'juals' ;
    protected $fillable = array('nama','no_telp','email','nama_mobil','jenis_id','merk_id','tahun','harga','foto','deskripsi');
    
    public function Merk()
    {
    	return $this->belongsTo('App\Merk','merk_id');
    }

    public function Jenis()
    {
    	return $this->belongsTo('App\Jenis','jenis_id');
    }
}
