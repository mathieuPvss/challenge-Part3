@extends('layout')

@section('contenu')
<h1>dashboard</h1>

<form action="{{ route('products.search') }}">
    <input type="text" name="q">
    <button type="submit">Rechercher</button> 
</form>

@endsection
