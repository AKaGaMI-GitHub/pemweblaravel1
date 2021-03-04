<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'1905021007',
            'nama'=>'Made Anantha Yoga',
            'alamat'=>'Jalan Lingga No 2',
            'nohp'=>'082146855989',
            'email'=>'anantha@undiksha.ac.id'
        );
        return view('admin.beranda', compact('title','data'));
    }
    public function dashboard(){
        $title="Data Dashboard";

        return view('admin.dashboard', compact('title'));
    }
}
