<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'produk' => 'required|string',
            'harga' => 'required|numeric'
        ]);

        $data = $request->all();
        $produk = Produk::create($data);

        return response()->json(["message" => "Success, Produk Added"]);
    }
}
