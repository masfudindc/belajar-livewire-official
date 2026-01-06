<div>
    Todos
    <br>

    {{-- form dengan wire:submit untuk menambahkan todo dengan klik enter pada keyboard --}}
    <form wire:submit="addTodo">

        {{-- inputan dirender setelah di submit --}}
        {{-- <input type="text" wire:model.prevent="todo"> --}}

        {{-- inputan langsung dirender --}}
        {{-- <input type="text" wire:model.live="todo"> --}}

        {{-- inputan dirender setelah pindah/ fokus ke inputan lain --}}
        {{-- <input type="text" wire:model.change="todo"> --}}

        {{-- inputan dirender setelah pindah/ fokus ke inputan lain --}}
        {{-- <input type="text" wire:model.blur="todo"> --}}

        {{-- inputan langsung di render --}}
        <input type="text" wire:model.live="todo">

        <span>Current todo: {{ $todo }}</span>

        <button type="submit">add</button>
    </form>

    <ul>
        <li>todo 1</li>
        <li>todo 2</li>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
