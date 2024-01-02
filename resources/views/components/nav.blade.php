<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('configuration.home') }}"><b>Configuration</b></a>
                </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="nav-link btn btn-link" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
