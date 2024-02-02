<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Merk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MerkController extends Controller
{
    public function index()
    {

        //Ambil data kategori dari database
        $merk = Merk::all();

        //menampilkan view
        return view('admin.merk.index', compact('merk'));
    }

    //function menampilkan view tambah data
    public function tambah()
    {
        return view('admin.merk.tambah');
    }

    public function store(Request $request)
    {
        //Simpan datab ke database
        Merk::updateOrCreate([
            'name' => $request->name
        ], []);

        //lalu reireact ke route admin.merk dengan mengirim flashdata(session) berhasil tambah data untuk manampilkan alert succes tambah data
        return redirect()->route('admin.merk')->with('status', 'Berhasil Menambah Kategori');
    }

    public function update(Merk $id, Request $request)
    {
        $id->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.merk')->with('status', 'Berhasil Mengubah Kategori');
    }

    //function menampilkan form edit
    public function edit(Merk $id)
    {
        return view('admin.merk.edit', [
            'merk' => $id
        ]);
    }

    public function delete($id)
    {
        //hapus data sesuai id dari parameter
        Merk::destroy($id);

        return redirect()->route('admin.merkw')->with('status', 'Berhasil Mengahapus Kategori');
    }
}
