@extends('layouts.base')

@section('title')
{{ $prodotto['titolo'] }}
@endsection

<!-- @section('css')
@include('layouts.partials.prodotti-pro-css')
@endsection -->

@section('content')
<h1>{{ $prodotto['titolo'] }}</h1>
<h2>Cottura: {{ $prodotto['cottura'] }}</h2>
<p>{{ $prodotto['descrizione'] }}</p>
@endsection