<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $menu = 'home';

        return view('home', compact('menu'));
    }

    public function profile()
    {
        $menu = 'profile';

        return view('profile', compact('menu'));
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function mahasiswa()
    {
        $mahasiswa = [
            ['nim' => '101', 'nama' => 'Yohanes Nevan', 'jurusan' => 'Teknik Informatika'],
            ['nim' => '102', 'nama' => 'John Doe', 'jurusan' => 'Sistem Informasi'],
            ['nim' => '103', 'nama' => 'Jane Smith', 'jurusan' => 'Teknik Elektro'],
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        $gender = $request->input('gender');
        $prodi = $request->input('prodi');
        $bidang_pakar = $request->input('bidang_pakar');

        return view('proses', compact('nama', 'kota'));
    }
}
