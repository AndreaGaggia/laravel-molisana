<div class="tipo">
    <h2>le lunghe</h2>
    <div class="cards">
        @foreach ($data as $key => $prodotto)
        @if ($prodotto['tipo'] == 'lunga')
        @include('layouts.partials.prodotto-pro')
        @endif
        @endforeach
    </div>
</div>

<div class="tipo">
    <h2>le corte</h2>
    <div class="cards">
        @foreach ($data as $key => $prodotto)
        @if ($prodotto['tipo'] == 'corta')
        @include('layouts.partials.prodotto-pro')
        @endif
        @endforeach
    </div>
</div>

<div class="tipo">
    <h2>le cortissime</h2>
    <div class="cards">
        @foreach ($data as $key => $prodotto)
        @if ($prodotto['tipo'] == 'cortissima')
        @include('layouts.partials.prodotto-pro')
        @endif
        @endforeach
    </div>
</div>