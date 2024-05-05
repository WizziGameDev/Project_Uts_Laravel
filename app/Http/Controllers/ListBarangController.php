<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListBarangController extends Controller
{
    function index()
    {
        $barangs = Barang::with('satuan')->get(); // Mengambil semua data barang dengan relasi satuan
        return view('barang.listbarang', ['barangs' => $barangs]);
    }

    function create()
    {
        $pageTitle = 'Input Barang';
        $satuans = Satuan::all();
        return view('barang.inputbarang', ['pageTitle' => $pageTitle, 'satuans'=> $satuans]);
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'attribute harus diisi.',
            'email' => 'attribute dengan format yang benar',
            'numeric' => 'attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'description' => 'required',
            'satuan' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data barang baru ke dalam database
        $barang = new Barang();
        $barang->kode_barang = $request->kodeBarang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_barang = $request->hargaBarang;
        $barang->description_barang = $request->description;
        $barang->kode_satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('list-barang.index')->with('success', 'Barang berhasil disimpan.');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);

        if(!$barang) {
            return redirect()->route('list-barang.index')->with('error', 'Barang tidak ditemukan.');
        }

        $barang->delete();
        return redirect()->route('list-barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
