<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')]
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
    public function updated($property, $value) {
        $this->$property = strtoupper($value);
    }

    public function updatedToDo($value) {
        $this->todo = strtoupper($value);
    }
    public function mount() {

    }
    public function render()
    {
        return view('livewire.counter');
    }
}
