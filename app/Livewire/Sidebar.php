<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Doc;


class Sidebar extends Component
{
    public function render()
    {
        $docs = Doc::select('id', 'title')->get();
        return view('livewire.sidebar')->with('docs', $docs);
    }
}
