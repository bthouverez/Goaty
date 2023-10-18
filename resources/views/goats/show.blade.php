@extends('layout')

@section('main')
<h1>Just one goat</h1>
{{-- @dump($goat) --}}
<ul>
    <li>{{ $goat['id'] }}</li>
    <li>{{ $goat['nom'] }}</li>
    <li>{{ $goat['prix'] }}</li>
</ul>
@endsection
