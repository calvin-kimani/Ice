<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\NewDoc;

class NewDocForm extends Component
{
    public NewDoc $form;
 
    public function save()
    {
        $newDoc = $this->form->store(); 
        return $this->redirect(route('docs.show', $newDoc));
    }

    public function render()
    {
        return view('livewire.new-doc-form');
    }
}
