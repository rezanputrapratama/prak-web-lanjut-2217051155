<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller{
    public function profile($nama = "", $kelas = "", $npm = ""){
        $data = [
            'nama' => 'Rezan Putra Pratama',
            'kelas' => 'A',
            'npm' => '2217051155'
        ];
        return view('profile', $data);
    }
}