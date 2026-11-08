<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        return view('dashboard', [
            'username' => $request->query('username'),
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $tugas = [
            ['judul' => 'UTS PWEB', 'matkul' => 'PWEB', 'deadline' => '10 Nov 2026', 'prioritas' => 'Tinggi', 'status' => 'Proses'],
            ['judul' => 'Proposal Projek PWEB', 'matkul' => 'PWEB', 'deadline' => '13 Nov 2026', 'prioritas' => 'Tinggi', 'status' => 'Belum'],
            ['judul' => 'Mini Project TKTI', 'matkul' => 'TKTI', 'deadline' => '24 Nov 2026', 'prioritas' => 'Tinggi', 'status' => 'Selesai'],
        ];

        return view('pengelolaan', [
            'username' => $request->query('username'),
            'tugas' => $tugas,
        ]);
    }

    public function profile(Request $request)
    {
        return view('profile', [
            'username' => $request->query('username'),
        ]);
    }
}