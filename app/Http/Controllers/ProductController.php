<?php

namespace App\Http\Controllers;
use App\Models\Products; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('home', compact('products'));
    }

    public function show($slug)
    {
        $product = Products::where('slug', $slug)->firstOrFail();
        return view('detailproduk', compact('product'));
    }

    public function beli(Request $request, $id)
    {
        return redirect()->back()->with('success', 'Terima kasih, produk berhasil dipesan!');
    }
}