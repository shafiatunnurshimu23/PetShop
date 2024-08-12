<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VetComponent extends Component
{
    public function render()
    {
        return view('livewire.vet-component')->layout('layouts.base');
    }
}
