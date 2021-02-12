@extends('layouts.base')

@section('title')
PRODOTTI-PRO
@endsection

@section('css')
@include('layouts.partials.prodotti-pro-css')
@endsection

@section('content')
<section class="prodotti">
    @include('layouts.partials.tipi-pro')
</section>
@endsection