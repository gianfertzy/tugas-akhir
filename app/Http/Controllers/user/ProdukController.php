<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Merk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        //menampilkan data produk yang dijoin dengan table kategori
        //kemudian dikasih paginasi 9 data per halaman nya
        $kat = Categories::with('produks')->withCount('produks')
            ->groupBy('categories.id')
            ->get();


        $merks = Merk::withCount('produks')->get();
        $product = Product::get();


        return view('user.produk', [
            'categories' => $kat,
            'merks' => $merks,
            'products' => $product
        ]);
    }
    public function detail($id)
    {
        //mengambil detail produk
        return view('user.produkdetail', [
            'produk' => Product::with('merk')->findOrFail($id)
        ]);
    }

    public function cari(Request $request)
    {
        //mencari produk yang dicari user
        $prod  = Product::where('name', 'like', '%' . $request->cari . '%')->paginate(9);
        // $total = Product::where('name', 'like', '%' . $request->cari . '%')->count();

        return view('user.cariproduk', [
            'produks' => $prod,
            'cari' => $request->cari,
            'total' => $prod->total()
        ]);
    }
}
