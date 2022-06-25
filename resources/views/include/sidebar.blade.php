<!-- sidebar -->
<div class="offcanvas offcanvas-start sidebar-nav text-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body p-0">
      <nav>
        <div class="navbar-dark">
          <ul class="navbar-nav">
            @if(auth()->user()->level=="admin")
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                ADMIN
              </div>
            </li>
            <li>
              <a href="{{ url('home') }}" class="nav-link active px-3">
                <span>
                  <i class="fa-solid fa-gauge-high"></i>
                  <span class="mx-2">
                    Dashboard
                  </span>
                </span>
              </a>
            </li>
            <li class="my-4">
              <hr class="dropdown-divider">
            </li>
            @endif
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CRUD SYSTEM
              </div>
            </li>
            <li>
              <!-- link trigger -->
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span>
                  <i class="fa-solid fa-database"></i>
                </span>
                <span class="mx-2">
                  Data
                </span>
                <span class="right-icon ms-auto">
                  <i class="fa-solid fa-angles-down"></i>
                </span>
              </a>
              <!-- link trigger -->
              <!-- Data target -->
              <div class="collapse" id="collapseExample">
                <div>
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="{{ url('tampil') }}" class="nav-link px-3">
                        <span>
                          <i class="fa-solid fa-table"></i>
                          <span class="mx-2">
                            Data Semua Barang
                          </span>
                        </span>
                      </a>
                    </li>
                    @if(auth()->user()->level=="admin")
                    <li>
                      <a href="{{ url('input') }}" class="nav-link px-3">
                        <span>
                          <i class="fa-solid fa-square-plus"></i>
                          <span class="mx-2">
                            Input Data
                          </span>
                        </span>
                      </a>
                    </li>
                    @endif
                  </ul>
                </div>
              </div>
              <div class="my-4">
                <hr class="dropdown-divider">
              </div>
            </li>
            <li>
              <div class="navbar-nav text-muted text-uppercase fw-bold ps-3">
                ABOUT
              </div>
            </li>
            <li>
              <a href="" class="nav-link px-3">
                <span>
                  <i class="fa-brands fa-facebook-square"></i>
                  <span class="mx-2">
                    Facebook
                  </span>
                </span>
              </a>
            </li>
            <li>
              <a href="" class="nav-link px-3">
                <span>
                  <i class="fa-brands fa-instagram"></i>
                  <span class="mx-2">
                    Instagram
                  </span>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- sidebar -->