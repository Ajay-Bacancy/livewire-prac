<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormValidation extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6|unique:users,name',
        'email' => 'required|email|unique:users,email|max:50'
    ];

    public function render()
    {
        return view('livewire.form-validation');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        dd("Hello Guys!");
    }
}
