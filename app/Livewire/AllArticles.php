<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class AllArticles extends Component
{

    public function destroy ($id)
    {
        Article::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.all-articles', ['articles' => Article::all()]);
    }
}
