<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\hasil_potong;
use App\Models\potong;
use Illuminate\Http\Request;

class HasilPotongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasil_potong = Hasil_potong::all();
        $potong = Potong::all();
        confirmDelete('Hapus!', 'Anda Yakin Ingin Menghapusnya?');
        return view('admin.hasil_potong.index', compact('hasil_potong', 'potong'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $potong = Potong::all();
        $hasil_potong = Hasil_potong::all();
        return view('admin.hasil_potong.create', compact('hasil_potong', 'potong'));
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
            'id_potong' => 'required',
            'jumlah_dihasilkan' => 'required',
            'jumlah_lolos' => 'required',
            'jumlah_cacat' => 'required',
        ]);

        $hasil_potong = new Hasil_potong();
        $hasil_potong->id_potong = $request->id_potong;
        $hasil_potong->jumlah_dihasilkan = $request->jumlah_dihasilkan;
        $hasil_potong->jumlah_lolos = $request->jumlah_lolos;
        $hasil_potong->jumlah_cacat = $request->jumlah_cacat;
        $hasil_potong->save();
        Alert::success('Success', 'Data Berhasil Membuat')->autoClose(1500);

        return redirect()->route('HasilPotong.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hasil_potong  $hasil_potong
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hasil_potong  $hasil_potong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hasil_potong = Hasil_potong::findOrFail($id);
        $potong = Potong::all();
        return view('admin.hasil_potong.edit', compact('hasil_potong', 'potong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hasil_potong  $hasil_potong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'id_potong' => 'required',
        //     'jumlah_dihasilkan' => 'required',
        //     'jumlah_lolos' => 'required',
        //     'jumlah_cacat' => 'required',
        // ]);

        $hasil_potong = hasil_potong::findOrFail($id);
        $hasil_potong->id_potong = $request->id_potong;
        $hasil_potong->jumlah_dihasilkan = $request->jumlah_dihasilkan;
        $hasil_potong->jumlah_lolos = $request->jumlah_lolos;
        $hasil_potong->jumlah_cacat = $request->jumlah_cacat;
        $hasil_potong->save();
        Alert::success('Success', 'Data Berhasil Membuat')->autoClose(1500);

        return redirect()->route('HasilPotong.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hasil_potong  $hasil_potong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hasil_potong = Hasil_potong::findOrFail($id);
        $hasil_potong->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoClose(1500);
        return redirect()->route('HasilPotong.index');

    }
}
