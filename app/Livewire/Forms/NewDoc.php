<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Doc;

class NewDoc extends Form
{
    #[Validate('required|unique:docs,title|min:5|max:15|string')]
    public $title = '';

    #[Validate('max:255')]
    public $description = '';

    #[Validate('max:10000')]
    public $notes = '';

    public function store(): int
    {
        $this->validate();
        $newDoc = Doc::create($this->all());
        return $newDoc->id;
    }
}
