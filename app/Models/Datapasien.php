<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapasien extends Model
{
    use HasFactory;
    protected $fillable=[
        'namaclient','namahewan','jenishewan','jeniskelaminhewan','jenistindakan','alamat','nohp','waktu'
    ];

}
