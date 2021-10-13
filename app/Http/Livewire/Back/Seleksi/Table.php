<?php

namespace App\Http\Livewire\Back\Seleksi;

use Livewire\Component;

class Table extends Component
{
    protected $pilih_loker;

    protected $listeners = [
        'show_peserta' => 'handle_show_peserta'
    ];

    public function render()
    {
        $get_attendances = \App\Attendance::where('id_vacancy',$this->pilih_loker)->get();

        return view('livewire.back.seleksi.table');
    }

    public function handle_show_peserta($peserts_table){
        $this->pilih_loker = $peserts_table;
    }
}
