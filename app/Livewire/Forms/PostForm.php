<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule('required', as: 'Título')]
    public string $title;
    #[Rule('required|min:10', as: 'Conteúdo')]
    public string $content;

    // protected array $rules = [
    //     'title' => 'required',
    //     'content' => 'required|min:5',
    // ];

    // public function messages()
    // {
    //     return [
    //         'title' => [
    //             'required' => 'O campo título é obrigatório',
    //         ],
    //         'content' => [
    //             'required' => 'O campo conteúdo é obrigatório',
    //             'min' => 'O conteúdo deve ter pelo menos :min caracteres',
    //         ],
    //     ];
    // }
}
