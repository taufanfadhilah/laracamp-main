<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">Laracamp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
            <a class="nav-link" href="{{route('user.dashboard')}}">My Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{route('user.login')}}">Login</a>
        </li>
        @endauth
        </ul>
    </div>
    </div>
</nav>