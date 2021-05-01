<?php

namespace App\Http\Livewire;

use App\Models\Datadokter;
use Livewire\Component;
use Symfony\Component\VarDumper\Cloner\Data;

class Crud extends Component
{
    public $datadokters, $nama, $jns_kelamin, $tmpt_lhr, $tgl_lhr, $phone, $agama, $status, $dokter_id;
    public $isModalOpen = 0;
    
    public function render()
    {
        $this->datadokters = Datadokter::all();
        return view('livewire.crud');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->nama = '';
        $this->jns_kelamin = '';
        $this->tmpt_lhr = '';
        $this->tgl_lhr = '';
        $this->phone = '';
        $this->agama = '';
        $this->status = '';
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'tmpt_lhr' => 'required',
            'tgl_lhr' => 'required',
            'phone' => 'required',
            'agama' => 'required',
            'status' => 'required',
        ]);

        Datadokter::updateOrCreate(['id' => $this->dokter_id], [
            'nama' => $this->nama,
            'jns_kelamin' => $this->jns_kelamin,
            'tmpt_lhr' => $this->tmpt_lhr,
            'tgl_lhr' => $this->tgl_lhr,
            'phone' => $this->phone,
            'agama' => $this->agama,
            'status' => $this->status,
        ]);
        session()->flash('message', $this->dokter_id ? 'Data Dokter diupdate' : 'Data Dokter dibuat');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $datadokter = Datadokter::findOrFail($id);
        $this->id = $id;
        $this->nama = $datadokter->nama;
        $this->email = $datadokter->email;
        $this->jns_kelamin = $datadokter->jns_kelamin;
        $this->tmpt_lhr = $datadokter->tmpt_lhr;
        $this->tgl_lhr = $datadokter->tgl_lhr;
        $this->agama = $datadokter->agama;
        $this->status = $datadokter->status;
    
        $this->openModalPopover();
    }

    public function delete($id)
    {
        Datadokter::find($id)->delete();
        session()->flash('message', 'Data dihapus');
    }
}
