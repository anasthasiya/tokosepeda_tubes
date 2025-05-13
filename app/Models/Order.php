<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'product_id',
    'username',
    'nomor_telepon',
    'nama_produk',
    'harga',
    'alamat',
    'metode_pembayaran',
];
    public function user()
{
    return $this->belongsTo(User::class);
}

public function product()
{
    return $this->belongsTo(Products::class);
}

}
