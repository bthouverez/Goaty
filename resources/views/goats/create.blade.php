@extends('layout')

@section('main')
<h1>Make a goat</h1>
<form method="post" action="/goats">
    @csrf
    <input type="text" placeholder="nom" name="name">
    <input type="number" placeholder="prix" name="price">
    <button>Valider</button>
</form>
@endsection
