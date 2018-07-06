<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table =  'mobils' ;
    protected $fillable = array('gambar','nama','merk_id','deskripsi');
    
    public function Merk()
    {
    	return $this->belongsTo('App\Merk','merk_id');
    }

    public function Jual()
    {
    	return $this->hasMany('App\Jual','mobil_id');
    }
}
