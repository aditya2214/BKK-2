<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $content = "home";

    public function render()
    {
        $vacancy = \App\Vacancy::all();

        return view('livewire.welcome',compact('vacancy'));
    }

    public function job_details(){
        $this->content = "job_details";
    }
}
