<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table =  'merks' ;
    protected $fillable = array('logo','merk','jenis_id','deskripsi');

    public function Jual()
    {
        return $this->hasMany('App\Jual','merk_id');
    }
}
