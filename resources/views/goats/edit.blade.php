@extends('layout')

@section('main')

    <h1 class="font-bold text-xl">Make a goat</h1>

<form method="post" action="/goats/{{ $goat->id }}"
      class="w-64 flex flex-col gap-4 bg-gray-200 p-10 mt-4 mx-auto rounded-xl">
    @csrf
    @method('PATCH')
    <input type="text" placeholder="nom" name="name" value="{{ $goat->name }}">
    <input type="text" placeholder="couleur" name="color" value="{{ $goat->color }}">
    <input type="date" name="birthday" value="{{ $goat->birthday }}">
    <input type="checkbox" name="sex" value="{{ $goat->sex }}">
    <input type="number" placeholder="prix" name="price" value="{{ $goat->price }}">
    <button>Valider</button>
</form>
@endsection
