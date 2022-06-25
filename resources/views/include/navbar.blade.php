<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand text-uppercase fw-bold" href="#">Crud</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user"></i>
            </a>
            <ul class="dropdown-menu border-dark dropdown-menu-end dropdown-menu-dark mt-2" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item text-center" href="#"> <span><i class="fa-solid fa-user-check"></i></span>Hi, {{ auth()->user()->name }}</a></li>
              <li><a class="dropdown-item" href="{{ url('proses-logout') }}">Logout <span class="ms-auto"><i class="fa-solid fa-right-from-bracket"></i></span> </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- navbar -->



