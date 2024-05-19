<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Component;

class PostCreate extends Component
{
    public string $title;
    public string $content;

    public function create()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required|min:10',
        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'slug' => Str::slug($this->title),
            'user_id' => 101,
        ]);

        $this->title = '';
        $this->content = '';

        session()->flash('success', 'Post successfully created!');
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
