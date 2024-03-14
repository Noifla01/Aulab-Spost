<div class="container bg-bluenavy ">
    <div class="row justify-content-center">
        <div class="col-12 col-md-3 w-100">
            <nav class="navbar navbar-expand-lg">
                <div class="container m-0 p-0">
                    <a class="navbar-brand fs-4 fw-bolder" href="{{route('homepage')}}">The Aulab sPost</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="col-12 col-md-6 fs-5">
                        <div class="collapse navbar-collapse d-flex justify-content-evenly" id="navbarSupportedContent">
                            <ul class="navbar-nav my-2">
                                {{-- UTENTE AUTORIZZATO --}}
                                @auth
                                @if (Auth::user()->is_admin)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
                                    </li>
                                @endif
                                @if (Auth::user()->is_revisor)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('revisor.dashboard')}}">Dashboard Revisor</a>
                                    </li>
                                @endif
                                <li class="nav-item dropdown mx-4">
                                    <a class="nav-link dropdown-toggle text-dark" href="{{route('homepage')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ciao {{Auth::user()->name}}!
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="">Profilo</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{route('careers')}}">Lavora con noi</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                                        <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
                                            @csrf
                                        </form>
                                        
                                    </ul>
                                </li>
                            </ul>
                            @endauth
                            <li class="nav-item mx-2">
                                <a class="nav-link active" aria-current="page" href="#">Abbonati</a>
                            </li>
                            
                            {{-- GUEST --}}
                            @guest
                            <li class="nav-item mx-4 dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('homepage')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Area personale
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                                    <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                                    <li><a class="dropdown-item" href="{{route('register')}}">Lavora con noi</a></li>
                                </ul>
                            </li>
                            @endguest
                            
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
                            </li>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3">
                        <form class="d-flex mx-4" method="GET" action="{{route('article.search')}}">
                            <input class="form-control me-2" type="search" placeholder="Cosa cerchi?" aria-label="Search" name="query">
                            <button class="btn btn-outline-info" type="submit">Cerca</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>



