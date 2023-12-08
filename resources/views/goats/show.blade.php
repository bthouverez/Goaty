@extends('layout')

@section('main')
    <div class="grid place-items-center h-full">
        <div class="bg-orange-400 w-fit p-10 rounded-xl">
            <h1 class="text-2xl font-bold mb-4">{{ $goat->name }}</h1>
            <div class="flex">
                <img class="w-56 rounded-xl mr-4" src="/img/goats/{{ $goat->image_path }}" alt="image de chèvre">
                <ul>
                    <li>Date : {{ $goat->birthday }}</li>
                    <li>{{ $goat->color }}</li>
                    <li>{{ $goat->sex ? 'Femelle' : 'Male' }}</li>
                    <li>Prix : {{ $goat->price }} €</li>
                    <li>Proprio : {{ $goat->owner->email }}</li>
                    <li>
                        <a href="/goats/{{ $goat->id }}/edit">
                            <button class="bg-blue-600 hover:bg-black px-5 py-2 rounded-lg text-white m-3">
                                Editer
                            </button>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
@endsection
