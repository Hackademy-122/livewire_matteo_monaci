<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{
    public $title;
    public $body;

    public function store()
    {

        Article::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
