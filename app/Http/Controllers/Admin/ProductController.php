<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)

    {
        // Validasi dan simpan produk baru
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Update produk
    }

    public function destroy(Product $product)
    {
        // Hapus produk
    }

    public function tampil_product()
    {
        $product = Product::all();

        return view('admin.products', compact('product'));
    }
}

