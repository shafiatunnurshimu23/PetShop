<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;



class DetailsBlog extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $blog = Blog::where('slug',$this->slug)->first();
        return view('livewire.details-blog',['blog'=>$blog])->layout('layouts.base');
    }
}