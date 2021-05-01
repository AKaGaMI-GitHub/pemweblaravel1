<?php

namespace App\Http\Controllers;

use App\Models\Datahewan;
use App\Models\Hewan;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $hewan=Datahewan::all();
        $title="Data Hewan";
        return view('admin.datahewan', compact('title'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Input Data Pasien";
        $hewan=Datahewan::all();
        return view('admin.inputdatahewan',compact('title','hewan'));
    }
}
