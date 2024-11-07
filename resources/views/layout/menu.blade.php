<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">
                    <img src="{{ asset('img/logo_bmw.png') }}" alt="Logo" width="30" height="24">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item me-3">
                    <a class="nav-link active " aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="{{ route('category') }}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{ route('category') }}">Data Science</a></li>
                      <li><a class="dropdown-item" href="{{ route('category') }}">Network Security</a></li>
                    </ul>
                  </li>
                  <li class="nav-item me-3">
                    <a class="nav-link" href="writers">Writers</a>
                  </li>
                  <li class="nav-item me-3">
                    <a class="nav-link" href="about">About Us</a>
                  </li>
                  <li class="nav-item me-3">
                    <a class="nav-link" href="popular">Popular</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
</div>

