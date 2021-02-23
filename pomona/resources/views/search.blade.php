@extends('layout')

@section('contenu')
@foreach ($products as $product)
    <p>{{$product->nom}}</p> <br>
    <p>{{$product->url_photo}}</p> <br>
@endforeach

<a href=javascript:history.go(-1)>Retour</a>

@endsection