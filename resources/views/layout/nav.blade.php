<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
     data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-light" href="{{route('index')}}"><span class="fas fa-brain me-1"> </span>{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest()
                    <li class="nav-item">
                        <a class="nav-link @if(strpos(request()->url(), 'login')) active @endif"  href="{{route('login')}}">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(strpos(request()->url(), 'register')) active @endif"  href="{{route('register')}}">Регистрация</a>
                    </li>
                @endguest
                @auth()
                    <li class="nav-item">
                        <a class="nav-link @if(strpos(request()->url(), 'profile')) active @endif" href="/profile">{{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Выход</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
