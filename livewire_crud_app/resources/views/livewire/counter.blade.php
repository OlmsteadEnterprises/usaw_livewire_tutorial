<div>
    {{-- Do your work, then step back. --}}
    Counter: {{$count}}
    <button wire:click="increment">+</button>

    <div>
        <form wire:submit="add">
            <input type="text" wire:model="todo" />
            <button type="submit" >Add</button>
        </form>
        <ul>
            @foreach($toDos as $toDo)
                {{$toDo}}
            @endforeach
        </ul>
    </div>
</div>
