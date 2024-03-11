<div class="container-fluid m-0 p-0 d-flex justify-content-center">
    <div class="row  ">
        <div class="col-12 col-md-6 w-100 d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg">
                <div class="container d-flex justify-content-center m-0 p-0 w-100">
                    <a class="navbar-brand" href="{{route('homepage')}}">The Aulab sPost</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item px-5">
                                <a class="nav-link active" aria-current="page" href="#">Abbonati</a>
                            </li>
                            {{-- UTENTE AUTORIZZATO --}}
                            @auth
                            <li class="nav-item px-5 dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('homepage')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ciao {{Auth::user()->name}}!
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Profilo</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                                    <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
                                    @csrf
                                    </form>
                                    
                                </ul>
                            </li>
                        </ul>
                        @endauth
                        {{-- GUEST --}}
                        @guest
                        <li class="nav-item mx-4 dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('homepage')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Area personale
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Contattaci</a></li>
                            </ul>
                        </li>
                        @endguest

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('homepage')}}">Tutti gli articoli</a>
                        </li>

                        <div class="col-12 col-md-3">
                            <form class="d-flex mx-4" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>



