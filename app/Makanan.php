<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = [
        'nama', 'stock', 'supplier_id', 'category_id', 'harga', 'image', 'deskripsi'
    ];
}
