<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function incrementBy($by)
    {
        $this->count = $this->count + $by;
    }

    public function hoverIncrement()
    {
        $this->count += 10;
    }
    
    public function decrement()
    {
        $this->count--;
    }

    public function backToZero()
    {
        $this->count = 0;
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
