@extends('layouts.base')

@section('css')
<style>
a[href="prodotti"] {
    color: #001942;
    border-bottom: 3px solid #001942;
}

main {
    background-image: url('img/sfondo-prodotti.jpg');
    background-size: cover;
}
</style>
@endsection

@section('content')
<section class="prodotti">
    @include('layouts.partials.tipi')
</section>
@endsection