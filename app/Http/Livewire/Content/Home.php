<?php

namespace App\Http\Livewire\Content;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {

        $vacancy = \App\Vacancy::all();

        return view('livewire.content.home',compact('vacancy'));
    }

    public function job_details(){
        $content = "job_details";

        $this->emit('job_details',$content);
    }
}
