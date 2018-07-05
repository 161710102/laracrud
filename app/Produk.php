<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
     protected $table = 'produks';
    protected $fillable = ['logo','merk','deskripsi','harga'];
    public $timestamps = true;
}
