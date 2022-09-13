<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_pendaftaran;

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
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $daftar = M_pendaftaran::getDaftar();
        $count = M_pendaftaran::hitungPendaftar();
        // dd($daftar->tampil);
        $data = [
            "title" => "Informasi Pendaftaran",
            "status" => $daftar->active,
            'nama' => $daftar->nama,
            "id" => $daftar->id_daftar,
            'tampil' => $daftar->tampil,
            'ket' => $daftar->ket,
            'jml' => $count
        ];
        return view('adminHome', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
