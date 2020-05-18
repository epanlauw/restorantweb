<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = [
        'nama', 'stock', 'supplier_id', 'category_id', 'harga', 'image', 'deskripsi'
    ];

    public function category(){
      return $this->belongsTo(\App\Category::class, 'category_id');
    }

    public function supplier(){
      return $this->belongsTo(\App\Supplier::class, 'supplier_id');
    }
}
