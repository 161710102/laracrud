<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    protected $fillable = ['nama','model','spesifikasi','harga','engine'];
    public $timestamps = true;
}
