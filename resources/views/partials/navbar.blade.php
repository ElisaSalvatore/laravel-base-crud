<nav class="navbar navbar-expand-sm navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/marchio-sito-test.png') }}">
      </a>
  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse " id="navbarID">
        <div class="navbar-nav ms-auto me-auto">
  
          <a class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}"
            href="{{ url('/') }}">Home</a>
          {{-- <a class="nav-link {{ Request::route()->getName() === 'products.home' ? 'active' : '' }}"
            href="{{ url('/prodotti') }}">Prodotti</a>
          <a class="nav-link {{ Request::route()->getName() === 'contacts' ? 'active' : '' }}"
            href="{{ route('contacts') }}">Contatti</a> --}}
          <a class="nav-link {{ Request::route()->getName() === 'comics.index' ? 'active' : '' }}"
            href="{{ route('comics.index') }}">Fumetti</a>
        </div>
      </div>
    </div>
  </nav>
  