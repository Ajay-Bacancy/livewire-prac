<div>
    A good traveler has no fixed plans and is not intent upon arriving.
    {{-- <input type="text" wire:model.lazy="message">
    <div>
        <label for="gender">Male</label>
        <input type="radio" name="gender" id="1" wire:model="gender" value="Male">
        <label for="gender">Female</label>
        <input type="radio" name="gender" id="2" wire:model="gender" value="Female">
    </div>


    <h1>{{ $message }}</h1>
    <h2> {{ $gender }} </h2> --}}

    {{-- <div>
        <form wire:submit.prevent="save">
            <label for="Title">Title</label>
            <input type="text" wire:model="post.title">
            <label for="Content">Content</label>
            <textarea wire:model="post.content"></textarea>
            <input type="hidden" wire:mode="{{ auth()->user()->id }}">
            <button type="submit">Save</button>
        </form>
    </div>

    <div>
        {{ $setMsg }}
        <button wire:click="$set('setMsg', 'Helloooo!!!')">Say Hi</button>
        <input type="text" wire:model="toogler">
        <h5>{{$toogler}}</h5>
    </div> --}}

        @foreach ($users as $id => $user)
            @livewire('child-wire', ['user' => $user], key($user->name))
            <button wire:click="removeUser('{{$user->id}}')">Remove User</button>
        @endforeach
    <hr>

    <div>{{now()}}</div>
    <button wire:click="refreshChildren">Refresh Children </button>
    <button wire:click="$emit('refreshChildren')">Refresh Children </button>
</div>
