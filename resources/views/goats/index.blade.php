@extends('layout')

@section('main')
<h1>All the goats</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prix</th>
    </tr>
    @foreach($goats as $goat)
        <tr>
            <td>{{ $goat['id'] }}</td>
            <td>{{ $goat['nom'] }}</td>
            <td>{{ $goat['prix'] }}</td>
            <td><a href="/goats/{{ $goat['id'] }}">Voir plus d'infos</a></td>
        </tr>
    @endforeach
</table>
@endsection
