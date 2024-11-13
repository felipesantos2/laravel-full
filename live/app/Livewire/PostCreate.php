<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PostCreate extends Component
{

    #[Validate('required|min:3')]
    public string $title = "";

    #[Validate('required|min:3')]
    public string $content = "";

    public function create()
    {
        $this->validate();

    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
