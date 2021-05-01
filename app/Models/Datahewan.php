<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datahewan extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama','jns_hewan','jns_kelamin','nama_pemilik'
    ];

}