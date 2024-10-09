<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pengguna');
            $table->string('nama_toko');
            $table->string('nomor_identitas');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->longText('foto_profile')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
