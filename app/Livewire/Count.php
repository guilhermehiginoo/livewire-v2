<?php

namespace App\Livewire;

use Livewire\Component;

class Count extends Component
{
    public string $name = 'World';
    public function render()
    {
        return view('livewire.count');
    }

    public function getNameProperty()
    {
        return strtoupper($this->name);
    }

}
