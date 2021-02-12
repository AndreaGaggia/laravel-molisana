<header>
    <img src="{{ asset('img/logo-molisana.png') }}" />
    <nav>
        <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">home</a>
        <a href="{{ route('prodotti') }}"
            class="{{ Route::currentRouteName() == 'prodotti' ? 'active' : '' }}">prodotti</a>
        <a href="{{ route('contatti') }}"
            class="{{ Route::currentRouteName() == 'contatti' ? 'active' : '' }}">contatti</a>
        <a href="{{ route('prodotti-pro') }}"
            class="{{ Route::currentRouteName() == 'prodotti-pro' ? 'active' : '' }}">prodotti-pro</a>
    </nav>
</header>