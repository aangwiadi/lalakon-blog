<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.landing-page.contact')
                    ->layout('livewire.layouts.app');
    }
}
