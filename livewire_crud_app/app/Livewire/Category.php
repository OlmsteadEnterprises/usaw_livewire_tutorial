<?php

namespace App\Livewire;

use Livewire\Component;

class Category extends Component
{
    #[layout('layouts.app')]
    public function render()
    {
        return view('livewire.category');
    }
}
