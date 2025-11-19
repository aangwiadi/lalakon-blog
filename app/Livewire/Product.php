<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.landing-page.product')
                    ->layout('livewire.layouts.app');
    }
}
