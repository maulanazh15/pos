<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $fillable = ['nama_pelanggan'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
