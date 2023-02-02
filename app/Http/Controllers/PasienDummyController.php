<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienDummyController extends Controller
{
    public function index()
    {
        $data = DB::table('pasien')->where('no_rkm_medis', '000001')->get();
        dd($data);
    }
}
