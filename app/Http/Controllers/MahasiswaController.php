<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function mahasiswa()
    {
        $mahasiswa = [
            ['nim' => '101', 'nama' => 'Yohanes Nevan'],
            ['nim' => '102', 'nama' => 'John Doe'],
            ['nim' => '103', 'nama' => 'Jane Smith'],
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }

    public function proses(Request $request)
    {
        $nim = $request->input('nim');
        $nama = $request->input('nama');

        return view('proses', compact('nim', 'nama'));



        

        return redirect()->back()->with('success', 'Data berhasil dikirim!');
    }
}
