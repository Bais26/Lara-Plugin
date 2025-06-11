<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    // Tampilkan semua produk
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Tampilkan form tambah produk
    public function create() {
        return view('products.create');
    }

    // Simpan produk baru
    public function store(Request $request) {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    // Tampilkan detail produk
    public function show(Product $product) {
        return view('products.show', compact('product'));
    }

    // Tampilkan form edit
    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    // Update produk
    public function update(Request $request, Product $product) {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    // Hapus produk
    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index');
    }
}