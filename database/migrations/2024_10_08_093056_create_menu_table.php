<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama_menu');
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('kategori_id');
            $table->decimal('harga', 10, 2);
            $table->unsignedInteger('kuantitas')->default(0);
            $table->longText('gambar')->nullable();
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
