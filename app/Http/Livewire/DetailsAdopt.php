<?php

namespace App\Http\Livewire;
use App\Models\Adopt;
use Livewire\Component;
use Livewire\AdoptComponent;



class DetailsAdopt extends Component
{
    public $slug;
    
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $adopt = Adopt::where('slug',$this->slug)->first();
        $related_adopts = Adopt::inRandomOrder()->limit(3)->get();
        
        return view('livewire.details-adopt',['adopt'=>$adopt,'related_adopts' => $related_adopts])->layout('layouts.base');
    }
}
