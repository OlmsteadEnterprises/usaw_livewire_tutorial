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
        $this->reset();
    }
    public function delete(CategoryModel $category) {
        $category->delete();
    }
    public function render()
    {
        return view('livewire.category', [
            'categories' => CategoryModel::all(),
        ])->layout('layouts.app');
    }
}
