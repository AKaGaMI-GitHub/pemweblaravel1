<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadokter extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama','jns_kelamin','tmpt_lhr','tgl_lhr','phone','agama','status'
    ];
}
