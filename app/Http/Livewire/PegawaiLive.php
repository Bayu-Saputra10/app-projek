<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pegawai;


class PegawaiLive extends Component
{
    public $nama;

    public function detailPegawai()
    {
        $detailPegawai = pegawai::where('nama', $this->nama)->first();
        return $detailPegawai;
    }

    public function render()
    {
        return view('livewire.pegawai-live', ['detailPegawai' => $this->detailPegawai()]);
    }
}