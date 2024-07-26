<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    public $name = '', $description = '';

    public function save() {
        CategoryModel::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        return $this->redirect('/categories');
    }
    public function render()
    {
        return view('livewire.category')->layout('layouts.app');
    }
}
