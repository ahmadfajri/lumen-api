<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return response()->json($produk);
    }

    public function show($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json(["message" => "Not Found"], 404);
        }
        return response()->json($produk);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string'
        ]);

        $data = $request->all();
        $produk = Produk::create($data);

        return response()->json(["message" => "Success, Produk Added"]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json(["message" => "Produk Not Found"], 404);
        }

        $this->validate($request, [
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string'
        ]);

        $data = $request->all();
        $produk->fill($data);

        $produk->save();

        return response()->json($produk);
    }
}
