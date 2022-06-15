<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <a class="navbar-brand" href="/">BLOG FARHAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "HOME" ? 'active' : '') }}" href="/"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "BLOG" ? 'active' : '') }}" href="/blog"><i class="bi bi-journal-text"></i> Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "FWT" ? 'active' : '') }}" href="/fwtools">Framework Laravel</a>
          </li>
        </ul>
        
        <ul class="navbar-nav  ms-auto">
          @auth
              
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item {{ ($judul === "MY PROFILE" ? 'active' : '') }}" href="/profile"><i class="bi bi-file-person"></i> My Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Log Out</button>
              </form>
            </ul>
          </li>
              
          @else
          <li class="nav-item">
            <a class="nav-link {{ ($judul === "LOGIN" ? 'active' : '') }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
        </ul>

      </div>
    </div>
  </nav>