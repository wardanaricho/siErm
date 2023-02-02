<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienDummy extends Model
{
    use HasFactory;
    protected $table = 'pasiens_dummy';

    //     protected $table = 'pasien';
    //     protected $primaryKey = 'no_rkm_medis';
}
