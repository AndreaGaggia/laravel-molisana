@extends('layouts.base')

@section('title')
{{ $prodotto['titolo'] }}
@endsection

@section('content')
<h1>{{ $prodotto['titolo'] }}</h1>
<h2>Cottura: {{ $prodotto['cottura'] }}</h2>
<div>{!! $prodotto['descrizione'] !!}</div>
@endsection