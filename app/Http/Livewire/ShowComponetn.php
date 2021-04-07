<?php

namespace App\Http\Livewire;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Livewire\Component;

class ShowComponetn extends Component
{
    public $message;
    public $gender;
    public $post;
    public $setMsg;
    public $toogler = "Child Wire Component";
    public $names = ['Jelly', 'Ajay', 'LiveWire'];
    public $users;
    protected $listeners = ['fromChildToParent'];

    public function mount()
    {
        $this->users = User::all();
    }

    protected $rules = [
        'post.title' => 'required|string|min:6',
        'post.content' => 'required|string|max:500'
    ];

    public function render()
    {
        return view('livewire.show-componetn');
    }

    public function save(Request $request)
    {
        $this->validate();
        $this->post->user_id = auth()->user()->id;
        $this->post->save();
    }

    public function removeUser($userId)
    {
        User::find($userId)->delete();
        $this->users = User::all();
    }

    public function refreshChildren()
    {
        $this->emit('refreshChildren');
    }

    public function fromChildToParent()
    {
        //
    }


}
