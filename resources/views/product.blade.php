@extends('layouts.base')

@section('title')
{{ $prodotto['titolo'] }}
@endsection

@section('content')
<div style="background-color: lightyellow; padding: 1rem; border-radius: .5rem; box-shadow: 0 0 16px 1px lightgrey">
    <a href="{{ route('prodotti-pro') }}"
        style="display: block; text-decoration: none; font-weight: bold; margin-bottom: 2rem">⬅️ Back
        to pro</a>
    <img src="{{ $prodotto['src'] }}" width=400>
    <h1 style="margin-top: 1rem">{{ $prodotto['titolo'] }}</h1>
    <h2>Cottura: {{ $prodotto['cottura'] }}</h2>
    <p style="margin-top: 2rem; font-size: 1.1rem">{!! $prodotto['descrizione'] !!}</p>
</div>
@endsection