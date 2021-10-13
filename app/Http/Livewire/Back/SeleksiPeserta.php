<?php

namespace App\Http\Livewire\Back;

use Livewire\Component;

class SeleksiPeserta extends Component
{
    public $pilih_loker;

    public function render()
    {
        $vacancy = \App\Vacancy::all();
        $get_attendances = \App\Attendance::where('id_vacancy',$this->pilih_loker)->get();
        
        return view('livewire.back.seleksi-peserta',compact('vacancy','get_attendances'));
    }
}
