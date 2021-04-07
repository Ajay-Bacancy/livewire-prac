<form wire:submit.prevent="submit">
    <div style="margin-top: 5px">
        <label for="name">Name</label>
        <input type="text" wire:model.lazy="name">
        @error('name') <span class="alert alert-danger" style="margin-top: 5px">{{ $message }}</span> @enderror
    </div>

    <div style="margin-top: 5px">
        <label for="email">Email</label>
        <input type="text" wire:model="email">
        @error('email') <span class="alert alert-danger" style="padding: 15px">{{ $message }}</span> @enderror
    </div>

    <div style="margin-top: 5px">
        <button type="submit">Save Contact</button>
    </div>
</form>
