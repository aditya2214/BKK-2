<?php

namespace App\Http\Livewire\Back;

use Livewire\Component;

class SeleksiPeserta extends Component
{
    public $pilih_loker;

    public function render()
    {
        // dd($this->pilih_loker);
        $vacancy = \App\Vacancy::all();
        return view('livewire.back.seleksi-peserta',compact('vacancy'));
    }

    public function show_peserta(){

        $peserts_table = $this->pilih_loker;
        $this->emit('show_peserta',$peserts_table);
    }
}
