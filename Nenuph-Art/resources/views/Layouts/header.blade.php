
<header>
  <div class="container">
    <div class="row">
      <div class="col-3">
       <a href="http://localhost:8888/Nenuph-art/Nenuph-Art/public/" class="brand">
        <strong class="brand_logo"> </strong>
      </a>

    </img>
  </div>
  <div class="col-9">
    <nav class="nav-services">
      <ul>
        <li><a href="http://localhost:8888/Nenuph-art/Nenuph-Art/public/Services_clientele">Services a la clientele</a></li>
        <li><a href="http://localhost:8888/Nenuph-art/Nenuph-Art/public/livredor">Livre d'or</a></li>
        <li><a href="http://localhost:8888/Nenuph-art/Nenuph-Art/public/Apropos">A propos de Nenuphart</a></li>
        <li><a href="http://localhost:8888/Nenuph-art/Nenuph-Art/public/Boutique">Boutique</a></li>
        {{--  AUTH --}}
        @guest
        <li><a href="{{ route('login') }}">Login</a></li>

        @else
        <li class="dropdown show">
          <a class=" dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->username }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

            <a href="{{ route('logout') }}" class="dropdown-item"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" >
            Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>



        </ul>
      </li>
      @endguest
      {{--  AUTH --}}
      {{--  <li><a href="http://localhost:8888/Nenuph-art/Nenuph-Art/public/Connexion">Connexion</a></li> --}}
    </ul>
    <button type="button" class="button-panier"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
     Panier

   </button>
 </nav>

 <form class="form-search-home">

  <input class="form-search-input" value="" type="search" name="search-input-home" placeholder="Que cherchez vous?" data-empty-message="Que voulez-vous rechercher?">

  <button type="button" class="btn btn-default">
    rechercher
  </button>
</form>
</div>
</div>
<div class="nav_main">
  <div class="container">

    <nav class="navbar navbar-expand-md">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav8" aria-controls="navbarNav8" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav8">
        <ul class="navbar-nav mr-auto ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="https://www.nenuphart.be/produits.html">Perles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nenuphart.be/produits.html">appret</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nenuphart.be/produits.html">parsementeire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nenuphart.be/produits.html">chaines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nenuphart.be/produits.html">Materiel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nenuphart.be/produits.html">stages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nenuphart.be/produits.html">Nos tutoriel</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
</div>


</header>
