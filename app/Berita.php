<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas'; 
    protected $fillable = array('gambar','tgl_rilis','judul','isi');
}
