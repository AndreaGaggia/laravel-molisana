<div class="tipo">
    <h2>le lunghe</h2>
    <div class="cards">
        @foreach ($data as $prodotto)
        @if ($prodotto['tipo'] == 'lunghe')
        @include('layouts.partials.prodotto')
        @endif
        @endforeach
    </div>
</div>

<div class="tipo">
    <h2>le corte</h2>
    <div class="cards">
        @foreach ($data as $prodotto)
        @if ($prodotto['tipo'] == 'corte')
        @include('layouts.partials.prodotto')
        @endif
        @endforeach
    </div>
</div>

<div class="tipo">
    <h2>le cortissime</h2>
    <div class="cards">
        @foreach ($data as $prodotto)
        @if ($prodotto['tipo'] == 'cortissime')
        @include('layouts.partials.prodotto')
        @endif
        @endforeach
    </div>
</div>