<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return response()->json($pelanggan);
    }

    public function store(Request $request)
    {
        $request->validate(['nama_pelanggan' => 'required']);
        $pelanggan = Pelanggan::create($request->all());
        return response()->json($pelanggan, 201);
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return response()->json($pelanggan);
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nama_pelanggan' => 'required']);
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());
        return response()->json($pelanggan);
    }

    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return response()->json(null, 204);
    }
}
