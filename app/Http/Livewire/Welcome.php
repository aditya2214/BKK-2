<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        $vacancy = \App\Vacancy::all();

        return view('livewire.welcome',compact('vacancy'));
    }
}
