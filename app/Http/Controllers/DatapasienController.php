<?php

namespace App\Http\Controllers;

use App\Models\Datapasien;
use App\Models\Hewan;
use App\Models\Tindakan;
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
        $rekamedis=Datapasien::all();
        $title="Rekam Medis";
        return view('admin.rekamedis',compact('title','rekamedis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Input Data Pasien";
        $hewan=Hewan::all();
        $tindakan=Tindakan::all();
        return view('admin.inputrekamedis',compact('title','hewan','tindakan'));
        
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
            'jenishewan'=>'required',
            'jeniskelaminhewan'=>'required',
            'jenistindakan'=>'required',
            'alamat'=>'required|max:255',
            'nohp'=>'required|max:255',
            'waktu'=>'required',
        ],$message);
        Datapasien::create($validasi);
        return redirect('rekamedis')->with('success','Data berhasil ditambahkan');
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
        $pasien=Datapasien::find($id);
        $hewan=Hewan::all();
        $tindakan=Tindakan::all();
        $title="Edit Data Pasien";
        return view('admin.inputrekamedis',compact('title','pasien','hewan','tindakan'));
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
        Datapasien::where('id',$id)->update($validasi);
        return redirect('rekamedis')->with('success','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Datapasien::where('id',$id)->delete();        
        return redirect('rekamedis')->with('success','Data berhasil dihapus');
    }
}
