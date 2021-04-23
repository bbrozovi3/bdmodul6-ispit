<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
            </li>
          </ul>

        @if (Auth::user())
        
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Profile</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('links.index') }}">Links</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
          </ul>
          @else
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Log in</a>
            </li>

          </ul>

       @endif

      </div>
    </div>
  </nav>