<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class ChildWire extends Component
{
    public $name;
    public $user;
    protected $listeners = ['refreshChildren' => 'refreshMe'];

    public function mount(User $user)
    {
        $this->users = $user;
    }
    public function render()
    {
        return view('livewire.child-wire');
    }

    public function refreshTime()
    {
        return now();
    }

    public function refreshMe()
    {

    }

    public function childEvent()
    {
        $this->emitUp('fromChildToParent');
    }

}
