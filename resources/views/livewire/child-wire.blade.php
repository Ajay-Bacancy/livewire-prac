{{-- <div>
    <div>
        <input type="text" wire:model="name">
    </div>
    <div style="margin: 5px; padding: 8px">
        <h5> {{$name}} </h5>
    </div>
    <div>
        <table>

            tr
        </table>
        <h5>{{ $user->name . " ==> " . $user->email }}</h5>

    </div>
</div> --}}
<div class="mt-2">
    <div><strong>Name</strong> {{$user->name}}</div>
    <div><strong>email</strong> {{$user->email}}</div>
    <div><strong>Time</strong> {{now()}}</div>
    <div><button wire:click="childEvent">Refresh Parents</button></div>
</div>
