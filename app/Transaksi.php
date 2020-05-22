<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  protected $fillable = [
      'customer_id', 'makanan_id', 'minuman_id', 'jml_makanan', 'jml_minuman', 'total_harga', 'tgl_pesan' , 'alamat', 'kota'
  ];
}
