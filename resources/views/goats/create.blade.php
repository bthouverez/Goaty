@extends('layout')

@section('main')

{{--@if($errors->any())--}}
{{--    @foreach($errors->all() as $error)--}}
{{--        <p>{{ $error }}</p>--}}
{{--    @endforeach--}}
{{--@endif--}}

<form method="post" action="/goats" class="w-64 flex flex-col gap-4 bg-gray-200 p-10 mt-4 mx-auto rounded-xl">
    <h1 class="font-bold text-xl">Make a goat</h1>
    @csrf
    <input class="border border-gray-500 p-2 @error('name') border-red-500 @enderror" type="text" placeholder="nom" name="name"  value="{{ old('name') }}">
    @error('name') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror

    <input class="border border-gray-500 p-2 @error('color') border-red-500 @enderror"
           type="text" placeholder="couleur" name="color" value="{{ old('color') }}">
    @error('color') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror

    <input class="border border-gray-500 p-2 @error('birthday') border-red-500 @enderror" type="date" name="birthday" value="{{ old('birthday') }}">
    @error('birthday') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror

    <p>Mâle/Femelle<input class="border border-gray-500 p-2 ml-4" type="checkbox" name="sex"></p>

    <input class="border border-gray-500 p-2 @error('price') border-red-500 @enderror" type="number" placeholder="prix" name="price" value="{{ old('price') }}">
    @error('price') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror

    <button class="bg-orange-300 rounded-2xl p-4">Valider</button>
</form>
@endsection
