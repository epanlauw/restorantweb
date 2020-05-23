<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  protected $fillable = [
      'customer_id', 'makanan_id', 'minuman_id', 'rating_id','jml_makanan', 'jml_minuman', 'total_harga', 'tgl_pesan' , 'alamat', 'kota'
  ];

  public function makanan(){
    return $this->belongsTo(\App\Makanan::class, 'makanan_id');
  }

  public function minuman(){
    return $this->belongsTo(\App\Minuman::class, 'minuman_id');
  }

  public function rating(){
    return $this->belongsTo(\App\Rating::class, 'rating_id');
  }

  public function customer(){
    return $this->belongsTo(\App\User::class, 'customer_id');
  }
}
