<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku'); // Kolom id_buku
            $table->string('judul'); // Kolom judul
            $table->decimal('harga', 10, 2); // Kolom harga
            $table->string('isbn')->unique(); // Kolom ISBN
            $table->string('penulis'); // Kolom penulis
            $table->integer('stok'); // Kolom stok
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}