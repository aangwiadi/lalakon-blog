<?php

namespace App\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.landing-page.blog')
                    ->layout('livewire.layouts.app');   
    }
}
