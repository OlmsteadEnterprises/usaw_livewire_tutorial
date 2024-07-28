<div>
    <div class="flex justify-center mt-3 rounded-xl h-1/2">
        <form method="post" wire:submit.prevent="save">
            <div>
                <label for="name">Name</label>
                <input id="name" wire:model="name" class="w-full rounded-lg border-2 border-black" />
            </div>
            <div>
                <label for="description">Description</label>
                <input id="description" wire:model="description" class="w-full rounded-lg border-2 border-black" />
            </div>
            <div class="flex justify-center mt-3">
                <button type="submit" class="px-12 py-4 border-2 border-black rounded-lg">Submit</button>
            </div>
        </form>
    </div>
    <div class="mt-4 flex justify-center w-full border-2 rounded-lg">
        <table class="w-full">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            @foreach($categories as $category)
                <tr wire:key="{{$category->id}}">
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <button wire:click="delete({{$category->id}})">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
