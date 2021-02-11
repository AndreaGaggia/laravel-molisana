@extends('layouts.base')

@section('css')
@include('layouts.partials.prodotti-css')
@endsection

@section('content')
<section class="prodotti">
    @include('layouts.partials.tipi')
</section>
@endsection