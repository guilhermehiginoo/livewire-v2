<?php

namespace App\Livewire;

use Livewire\Component;

class Count extends Component
{
    public string $name = 'World';
    public int $count = 0;
    public function render()
    {
        return view('livewire.count');
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}
