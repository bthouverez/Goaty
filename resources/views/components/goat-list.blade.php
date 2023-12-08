<h1>La liste de mes goats</h1>

<table class="w-11/12 mx-auto m-4">
    @foreach(Auth::user()->goats as $goat)
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
