<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class AdminController extends Controller
{
    //
    public function index()
    {
        // Cara 1 - Kirimnya Melalui Controller (untuk BlankPage & Card_Title):
        $data_layout = [ //menggunakan data array
            'title' => 'Halaman Admin',
            'card_title' => 'Selamat Datang di Halaman Admin',
            'card_footer' => '@sttnf',
        ];
        View::share($data_layout); //untuk mengirim (view) ke halaman dashboard admin

        // return view('admin.index',['title' => 'Halaman Admin']);
        return view('admin.index',['username' => 'Dono Warkop']);
    }
}
