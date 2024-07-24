<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $todo = '';
    public $toDos = [
        'take out trash',
        'do dishes'
    ];
    public function increment() {
        return $this->count++;
    }
    public function add() {
        $this->toDos[] = $this->todo;
        $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
