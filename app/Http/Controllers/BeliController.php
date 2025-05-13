<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class BeliController extends Controller
{
    public function beli(Request $request, $id)
{
    $request->validate([
        'username' => 'required|string',
        'nomor_telepon' => 'required|string',
        'nama' => 'required|string',
        'harga' => 'required|numeric',
        'alamat' => 'required|string',
        'pembayaran' => 'required|string',
        'product_id' => 'required|exists:products,id',
        'user_id' => 'required|exists:users,id',
    ]);

    Order::create([
        'user_id' => $request->user_id,
        'product_id' => $request->product_id,
        'username' => $request->username,
        'nomor_telepon' => $request->nomor_telepon,
        'nama_produk' => $request->nama,
        'harga' => $request->harga,
        'alamat' => $request->alamat,
        'metode_pembayaran' => $request->pembayaran,
    ]);

    return redirect('/home')->with('success', 'Pemesanan berhasil!');
}
}
