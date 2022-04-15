<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top mb-2">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{ route('saves') }}">
            <img src="{{ asset('img/cde.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Pointage
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://164.132.226.187">Accueil</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="http://164.132.226.187:8079">Plaforme Biotime</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tickets</a>
                    </li>
                @endauth
            </ul>
            <div class="d-flex">
                @auth
                        <div class="btn btn-light mx-2">{{ $user->name }}</div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">Déconnexion</button>
                        </form>
                @else
                    <a class="btn btn-light" href="{{ route('login') }}">Connexion</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
