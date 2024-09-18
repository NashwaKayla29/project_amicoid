<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahan = Bahan::all();
        confirmDelete('Hapus!', 'Anda Yakin Ingin Menghapusnya?');
        return view('admin.bahan.index', compact('bahan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bahan' => 'required',
            'ukuran_bahan' => 'required',
            'tanggal_masuk' => 'required',
        ]);

        $bahan = new Bahan();
        $bahan->nama_bahan = $request->nama_bahan;
        $bahan->ukuran_bahan = $request->ukuran_bahan;
        $bahan->tanggal_masuk = $request->tanggal_masuk;
        $bahan->save();
        Alert::success('Success', 'Data Berhasil Membuat')->autoClose(1500);

        return redirect()->route('bahan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bahan = Bahan::findOrFail($id);
        return view('admin.bahan.edit', compact('bahan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $validated = $request->validate([
            'nama_bahan' => 'required',
            'ukuran_bahan' => 'required',
            'tanggal_masuk' => 'required',
        ]);

        $bahan = Bahan::findOrFail($id);
        $bahan->nama_bahan = $request->nama_bahan;
        $bahan->ukuran_bahan = $request->ukuran_bahan;
        $bahan->tanggal_masuk = $request->tanggal_masuk;
        $bahan->save();
        Alert::success('Success', 'Data Berhasil Membuat')->autoClose(1500);

        return redirect()->route('bahan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahan = Bahan::findOrFail($id);
        $bahan->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoClose(1500);
        return redirect()->route('bahan.index');

    }
}
