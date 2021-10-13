<?php

namespace App\Http\Livewire\Back;

use Livewire\Component;

class SeleksiPeserta extends Component
{
    public $pilih_loker;

    public $id_loker;

    public function render()
    {
        // dd($this->pilih_loker);
        $vacancy = \App\Vacancy::all();
        $get_attendances = \App\Attendance::where('id_vacancy',$this->id_loker)->get();
        return view('livewire.back.seleksi-peserta',compact('vacancy','get_attendances'));
    }

    public function storePilihan(){
        $this->id_loker = $this->pilih_loker;
    }
}
