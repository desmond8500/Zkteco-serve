<div class="sticky-top">
    <header class="navbar navbar-expand-md navbar-dark d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="{{ route($index->route) }}">
                    {{ $index->name }}
                </a>
            </h1>
            <div class="navbar-nav flex-row order-md-last">
                {{-- <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                        aria-label="Show notifications">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                        <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur
                                exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet
                                debitis et magni maxime necessitatibus ullam.
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="nav-item dropdown">
                    @auth
                    {{-- <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                        aria-label="Open user menu">
                        <span class="avatar avatar-sm" style="background-image: url({{ asset(" storage/$user->avatar")
                            }})"></span>
                        <div class="d-none d-xl-block ps-2">
                            <div>{{ $user->name }}</div>
                            @if ($user->fonction)
                            <div class="mt-1 small text-muted">{{ $user->fonction }}</div>
                            @endif
                        </div>
                    </a> --}}
                    {{-- <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"> --}}
                        {{-- <a href="{{ route('tabler.config.profile') }}" class="dropdown-item">Profile & Compte</a>
                        --}}
                        {{-- <a href="{{ route('tabler.user.cv') }}" class="dropdown-item">CV</a> --}}
                        {{-- <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item">Déconnexion</a>
                    </div> --}}
                    <a class="btn btn-light" wire:click='logout'>Déconnexion</a>
                    @else
                    <a class="btn btn-primary" href="{{  route('login') }}">Connexion</a>
                    @endauth
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                    <ul class="navbar-nav">
                        @foreach ($menus as $menu)
                        @can($menu->can)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    {!! $menu->icon !!}
                                </span>
                                <span class="nav-link-title"> {{ $menu->name }} </span>
                            </a>
                            <div class="dropdown-menu">
                                @foreach ($menu->submenu as $submenu)
                                <a class="dropdown-item" href="{{ route($submenu->route) }}">
                                    {{ $submenu->name }}
                                </a>
                                @endforeach
                            </div>
                        </li>
                        @endcan
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
