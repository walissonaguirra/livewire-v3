<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function mount()
    {
        $this->count = 100;
    }

    public function increment()
    {
        $this->count += 10;
    }

    public function decrement()
    {
        $this->count -=10;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
