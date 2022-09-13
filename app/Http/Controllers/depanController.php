<?php

namespace App\Http\Controllers;

use App\Models\M_datasiswa;
use Illuminate\Http\Request;
use App\Models\M_pendaftaran;

class depanController extends Controller
{
    //
    public function halamanDepan()
    {
        $daftar = M_pendaftaran::getDaftar();
        $data = [
            "title" => 'Home',
            'tampil' => $daftar->tampil,
            "status" => $daftar->active
        ];
        return view('frontend.home', $data);
    }

    public function tentangSekolah()
    {
        $daftar = M_pendaftaran::getDaftar();
        $data = [
            "title" => 'Tentang Sekolah',
            'tampil' => $daftar->tampil,
            "status" => $daftar->active
        ];
        return view('frontend.about', $data);
    }

    public function kontak()
    {
        $daftar = M_pendaftaran::getDaftar();
        $data = [
            "title" => 'Cara Daftar',
            'tampil' => $daftar->tampil,
            "status" => $daftar->active
        ];
        return view('frontend.kontak', $data);
    }

    public function tutorial()
    {
        $daftar = M_pendaftaran::getDaftar();
        $data = [
            "title" => 'Cara Daftar',
            'tampil' => $daftar->tampil,
            "status" => $daftar->active
        ];
        return view('frontend.tutorial', $data);
    }

    public function sKeterima()
    {
        $daftar = M_pendaftaran::getDaftar();
        $all = M_datasiswa::allSiswa();
        $data = [
            "title" => 'Daftar PPDB',
            "status" => $daftar->active,
            'tampil' => $daftar->tampil,
            'all' => $all
        ];
        return view('frontend.sKeterima', $data);
        // dd($all);
    }
}
