@extends('layout')

@section('main')
<h1 class="text-xl font-bold m-6">All the goats
    <a href="/goats/create">
        <button class="bg-blue-500 hover:bg-blue-700 px-5 py-2 text-white rounded-lg">+</button>
    </a>
</h1>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                Id
            </th>
            <th scope="col" class="px-6 py-3">
                Sexe
            </th>
            <th scope="col" class="px-6 py-3">
                Nom
            </th>
            <th scope="col" class="px-6 py-3">
                Date de naissance
            </th>
            <th scope="col" class="px-6 py-3">
                Couleur
            </th>
            <th scope="col" class="px-6 py-3">
                Prix
            </th>
            <th scope="col" class="px-6 py-3">
                Voir
            </th>
            <th scope="col" class="px-6 py-3">
                Supprimer
            </th>
        </tr>
        </thead>
        <tbody>

        @forelse($goats as $goat)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $goat->id }}</th>
                <td class="px-6 py-4">{{ $goat->sex ? 'Femelle' : 'Male' }}</td>
                <td class="px-6 py-4">{{ $goat->name }}</td>
                <td class="px-6 py-4">{{ $goat->birthday }}</td>
                <td class="px-6 py-4">{{ $goat->color }}</td>
                <td class="px-6 py-4">{{ $goat->price }}</td>
                <td class="px-6 py-4"><a href="/goats/{{ $goat->id }}">
                        <button class="bg-orange-300 rounded-2xl py-2 px-4 text-xs">Voir</button>
                    </a></td>
                <td class="px-6 py-4">

                    <form method="post" action="/goats/{{ $goat->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-300 rounded-2xl py-2 px-4 text-xs">X</button>
                    </form>


                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">PERSONNE ICI</td>
            </tr>
        @endforelse
@endsection
