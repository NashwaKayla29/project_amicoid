<?php

namespace App\Http\Controllers;
use App\Models\Bahan;
use App\Models\Barang;
use App\Models\Potong;
use App\Models\hasil_potong;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bahan = Bahan::count();
        $barang = Barang::count();
        $potong = Potong::count();
        $hasil_potong = Hasil_Potong::count();


        return view('home', compact('bahan', 'barang', 'potong','hasil_potong'));
    }
}
