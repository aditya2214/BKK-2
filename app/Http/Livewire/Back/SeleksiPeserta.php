<?php

namespace App\Http\Livewire\Back;

use Livewire\Component;

class SeleksiPeserta extends Component
{
    public function render()
    {
        $vacancy = \App\Vacancy::all();
        
        return view('livewire.back.seleksi-peserta',compact('vacancy'));
    }
}