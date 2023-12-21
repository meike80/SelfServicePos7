<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Meike Nadya Chandra";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "8 Mei 2003";
        $data_array = array(
            "nama" => array(
                "Meike", "Ryan", "Risna",
            ),
        );

        return view('profil', compact('nama', 'alamat', 'tanggal_lahir', 'data_array'));
    }
}