<div class="container bg-mywhite sticky-top navbar">
    <div class="row justify-content-center">
        <div class="col-12 col-md-3 w-100">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand fs-4 fw-bolder secondaryFont" href="{{route('homepage')}}">The Aulab sPost</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="col-12 col-md-6 fs-5">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav my-2">
                                {{-- UTENTE AUTORIZZATO --}}
                                @auth
                                
                                <li class="nav-item dropdown mx-4">
                                    <a class="nav-link dropdown-toggle primaryFont" href="{{route('homepage')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ciao {{Auth::user()->name}}!
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if (Auth::user()->is_admin)
                                    <li class="nav-item">
                                        <a class="nav-link primaryFont" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
                                    </li>
                                @endif
                                @if (Auth::user()->is_revisor)
                                    <li class="nav-item">
                                        <a class="nav-link primaryFont" href="{{route('revisor.dashboard')}}">Dashboard Revisor</a>
                                    </li>
                                @endif
                                @if (Auth::user()->is_writer)
                                    <li class="nav-item">
                                        <a class="nav-link primaryFont" href="{{route('writer.dashboard')}}">Dashboard Writer</a>
                                    </li>
                                @endif
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item primaryFont" href="{{route('careers')}}">Lavora con noi</a></li>
                                        <li><a class="dropdown-item primaryFont" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
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
                                <a class="nav-link dropdown-toggle primaryFont" href="{{route('homepage')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Area personale
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                                    <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                                    <li><a class="dropdown-item" href="{{route('register')}}">Lavora con noi</a></li>
                                </ul>
                            </li>
                            @endguest
                            
                            <li class="nav-item mx-4">
                                <a class="nav-link primaryFont hover" href="{{route('article.create')}}">Inserisci un articolo</a>
                            </li>
                            <li class="nav-item mx-4">
                                <a class="nav-link primaryFont" href="{{route('article.index')}}">Tutti gli articoli</a>
                            </li>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3">
                        <form class="d-flex mx-4" method="GET" action="{{route('article.search')}}">
                            <input class="form-control me-2" type="search" placeholder="Cosa cerchi?" aria-label="Search" name="query">
                            <button class="btn button-30" type="submit">Cerca</button>
                        </form>
                    </div>
                </div>
                <script language="Javascript">
                    
                    function crea()
                    {
                    for (i = 0; i<crea.arguments.length; i++)
                        this[i + 1] = crea.arguments[i];
                    }
                    
                    let mesi = new crea('Gennaio','Febbraio','Marzo',
                        'Aprile','Maggio','Giugno','Luglio','Agosto','Settembre',
                        'Ottobre','Novembre','Dicembre');
                    let date = new Date();
                    let gg  = date.getDate();
                    let mese = date.getMonth()+1;
                    let yy = date.getYear();
                    let yyyy = (yy < 1000) ? yy + 1900 : yy;
                    

                    document.write(gg + " " + mesi[mese] + " " + yyyy);
    </script>
            </nav>
        </div>
    </div>
</div>



<!-- HTML !-->
{{-- <button class="button-30" role="button">Button 30</button> --}}

