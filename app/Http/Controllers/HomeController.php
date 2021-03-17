<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Home";
        $data['pasien']=array(
            'nama'=>'Made Anantha Yoga',
            'nhewan'=>'Blacky',
            'jhewan'=>'Anjing',
            'alamat'=>'Jalan Lingga No 2',
            'nohp'=>'082146855989'
        );
        return view('admin.beranda', compact('title','data'));
    }
    public function dashboard(){
        $title="Data Dashboard";

        return view('admin.dashboard', compact('title'));
    }
}
