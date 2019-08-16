<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dress', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang', 100);
            $table->string('jenis_produk', 1);
            $table->string('color', 50);
            $table->string('ukuran_produk', 5);
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dress');
    }
}
