<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembina;

class PembinaController extends Controller
{
    public function show()
    {
        $list_pembina = Pembina::all();
        return view('pembina.show', ['list_pembina' => $list_pembina]);
    }
    
}