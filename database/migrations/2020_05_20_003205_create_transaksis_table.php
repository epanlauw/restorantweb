<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->integer('customer_id')->index()->unsigned();
            $table->bigInteger('makanan_id')->index()->unsigned();
            $table->bigInteger('minuman_id')->index()->unsigned();
            $table->bigInteger('rating_id')->index()->unsigned();
            $table->integer('jml_makanan');
            $table->integer('jml_minuman');
            $table->integer('total_harga');
            $table->date('tgl_pesan');
            $table->date('tgl_kirim');
            $table->string('alamat');
            $table->string('kota');
            $table->timestamps();
        });
        Schema::table('transaksis', function (Blueprint $table){
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('makanan_id')->references('id')->on('makanans')->onDelete('cascade');
            $table->foreign('minuman_id')->references('id')->on('minumans')->onDelete('cascade');
            $table->foreign('rating_id')->references('id')->on('ratings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
