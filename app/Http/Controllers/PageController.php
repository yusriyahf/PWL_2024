<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return 'Nama : Yusriyah Firjatullah, NIM : 2241720178';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
