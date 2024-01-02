<nav class="navbar navbar-expand-lg bg-body-secondary " >
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('configuration.home') }}">Configuration</a>
        </li>
        
      </ul>

      <ul class="navbar-nav  mb-2 mb-lg-0 d-flex" role="search">
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="nav-link active" type="submit" aria-disabled="true">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>