<?php

namespace App\Http\Controllers;

use App\Models\DummyPasien;
use Illuminate\Http\Request;

class DummyPasienController extends Controller
{
    public function index()
    {
        $data = [
            'pasiens' => DummyPasien::all()
        ];

        dd($data);
    }
}
