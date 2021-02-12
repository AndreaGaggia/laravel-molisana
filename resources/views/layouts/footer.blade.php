<footer style="background-image: url({{ asset('img/sfondo-footer.jpg') }});">
    <div class="container">
        <img src="{{ asset('img/logo-molisana.png') }}" />
        <div class="menus">
            <ul>
                <li><a href="#">Pastificio</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
            </ul>
            <ul>
                <li><a href="#">Prodotti</a></li>
                <li><a href="{{ route('prodotti') }}">Prodotti normali</a></li>
                <li><a href="{{ route('prodotti-pro') }}">Prodotti PRO</a></li>
            </ul>
            <ul>
                <li><a href="#">News</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
            </ul>
        </div>
    </div>
</footer>
