<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $content = "home";

    protected $listeners = [
        'job_details' => 'handle_job_details'
    ];

    public function render()
    {
        return view('livewire.welcome');
    }

    public function handle_job_details($content){
        $this->content = $content;
    }

    
}
