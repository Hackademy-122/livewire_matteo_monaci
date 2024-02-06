<?php

namespace App\Livewire;


use App\Models\Article;
use Livewire\Component;

class EditForm extends Component
{

    public $title;
    public $body;
    public Article $articleObject;

    public function mount($articleObject)
    {
        $this->title = $articleObject->title;
        $this->body = $articleObject->body;
    }

    public function update()
    {
        $this->articleObject->update([
            'title'=>$this->title,
            'body'=>$this->body
        ]);

        return redirect()->route('articles')->with('message', 'Articolo modificato con successo');
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
