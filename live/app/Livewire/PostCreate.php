<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class PostCreate extends Component
{

    #[Validate('required')]
    public string $title = "";

    #[Validate('required')]
    public string $content = "";

    public function create()
    {
        $this->validate();

        dd($this->title);
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
