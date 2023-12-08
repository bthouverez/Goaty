<div class="w-11/12 bg-slate-200 mx-auto p-5 rounded-xl">
    <x-input wire:model="name" type="text" />
    <x-input wire:model="price" type="number" />
    <x-button wire:click="add">Ajouter</x-button>

    <table class="w-11/12 mx-auto m-4">
        @foreach($goats as $goat)
            <tr class="px-4">
                <x-td>{{ $goat->id }}</x-td>
                <x-td>{{ $goat->sex }}</x-td>
                <x-td>{{ $goat->name }}</x-td>
                <x-td>{{ $goat->price }}</x-td>
                <x-td>{{ $goat->color }}</x-td>
                <x-td>{{ $goat->birthday }}</x-td>
            </tr>
        @endforeach
    </table>


</div>
