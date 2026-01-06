<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';
    public $todos = [];

    public function addTodo()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
