<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Bahan;
use App\Models\Barang;
use App\Models\Potong;
use Illuminate\Http\Request;

class PotongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potong = Potong::all();
        $bahan = Bahan::all();
        $barang = Barang::all();
        confirmDelete('Hapus!', 'Anda Yakin Ingin Menghapusnya?');
        return view('admin.potong.index', compact('potong', 'bahan', 'barang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $potong = Potong::all();
        $bahan = Bahan::all();
        $barang = Barang::all();
        return view('admin.potong.create', compact('potong', 'bahan', 'barang'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nama_pemotong' => 'required',
        //     'id_bahan' => 'required',
        //     'size' => 'required',
        //     'tanggal_potong' => 'required',
        //     'id_barang' => 'required',

        // ]);

        $potong = new Potong();
        $potong->nama_pemotong = $request->nama_pemotong;
        $potong->id_bahan = $request->id_bahan;
        $potong->size = $request->size;
        $potong->tanggal_potong = $request->tanggal_potong;
        $potong->id_barang = $request->id_barang;
        $potong->save();
        Alert::success('Success', 'Data Berhasil Membuat')->autoClose(1500);

        return redirect()->route('potong.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Potong  $potong
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Potong  $potong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $potong = Potong::findOrFail($id);
        $bahan = Bahan::all();
        $barang = Barang::all();
        return view('admin.potong.edit', compact('potong', 'bahan', 'barang'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Potong  $potong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama_pemotong' => 'required',
        //     'id_bahan' => 'required',
        //     'size' => 'required',
        //     'tanggal_potong' => 'required',
        //     'id_barang' => 'required',

        // ]);

        $potong = Potong::findOrFail($id);
        $potong->nama_pemotong = $request->nama_pemotong;
        $potong->nama_bahan = $request->nama_bahan;
        $potong->size = $request->size;
        $potong->tanggal_potong = $request->tanggal_potong;
        $potong->nama_barang = $request->nama_barang;
        $potong->save();
        Alert::success('Success', 'Data Berhasil Membuat')->autoClose(1500);

        return redirect()->route('potong.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Potong  $potong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $potong = Potong::findOrFail($id);
        $potong->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoClose(1500);
        return redirect()->route('potong.index');

    }
}
