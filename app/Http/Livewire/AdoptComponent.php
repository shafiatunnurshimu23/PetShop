<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Adopt;

class AdoptComponent extends Component
{
    public $pagesize;
    public function mount()
    {
        $this->pagesize=6;
    }
    use WithPagination;
  
    public function render()
    {
        $adopts=Adopt::paginate($this->pagesize);
       
        return view('livewire.adopt-component',['adopts'=>$adopts])->layout('layouts.base');
    }
}
