<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis'; 
    protected $fillable = array('jenis');

  	public function Jual()
    {
    	return $this->hasOne('App\Jual','jenis_id');
    }
}
