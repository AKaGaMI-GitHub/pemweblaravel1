<?php

namespace App\Http\Controllers;

use App\Models\Datapasien;
use Illuminate\Http\Request;

class DatapasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapasien=Datapasien::all();
        $title="Data Pasien";
        return view('admin.datapasien',compact('title','datapasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Input Data Pasien";
        return view('admin.inputdatapasien',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=> 'Kolom :attribute harus lengkap',
            'date'=> 'Kolom :attribute harus tanggal',
            'numeric'=> 'Kolom :attribute harus angka'
        ];
        $validasi=$request->validate([
            'namaclient'=>'required|unique:datapasiens|max:255',
            'namahewan'=>'required|max:255',
            'jenishewan'=>'required|max:255',
            'jeniskelaminhewan'=>'required',
            'jenistindakan'=>'required',
            'alamat'=>'required|max:255',
            'nohp'=>'required|max:255',
            'waktu'=>'required',
        ],$message);
        Datapasien::create($validasi);
        return redirect('datapasien')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
