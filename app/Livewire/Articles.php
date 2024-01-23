<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\User;
use Livewire\Component;

class Articles extends Component
{

public function render()
    {
        return view('livewire.articles', [
            'articles' => Article::all(),
        ]);
    }
}
