<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with(['pelanggan', 'menu'])->get();
        return response()->json($transaksi);
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'menu_id' => 'required|exists:menu,id',
            'kuantitas' => 'required|integer',
            'total' => 'required|numeric',
            'status' => 'required|in:pending,completed,canceled'
        ]);
        $transaksi = Transaksi::create($request->all());
        return response()->json($transaksi, 201);
    }

    public function show($id)
    {
        $transaksi = Transaksi::with(['pelanggan', 'menu'])->findOrFail($id);
        return response()->json($transaksi);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,completed,canceled'
        ]);
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());
        return response()->json($transaksi);
    }

    public function destroy($id)
    {
        Transaksi::destroy($id);
        return response()->json(null, 204);
    }
}
