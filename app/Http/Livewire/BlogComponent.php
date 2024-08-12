<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    public $pagesize;
    public function mount()
    {
        $this->pagesize=4;
    }
    use WithPagination;
    public function render()
    {

        $blogs=Blog::paginate($this->pagesize);
        return view('livewire.blog-component',['blogs'=>$blogs])->layout('layouts.base');
    }
}
