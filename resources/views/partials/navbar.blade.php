<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Pemilihan printer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home")? 'active' : ''}}"aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        {{-- <li class="nav-item"> --}}
          {{-- <a class="nav-link {{ ($active === "about")? 'active' : ''}}"aria-current="page" href="/about">About</a> --}}
        {{-- </li> --}}
        <li class="nav-item">
          <a class="nav-link {{ ($active === "posts")? 'active' : ''}}"aria-current="page" href="{{url('/posts')}}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "hitung")? 'active' : ''}}"aria-current="page" href="{{url('/dashboard/hitung')}}">Sistempendukungkeputusan SAW pemilihanprinter</a>
        </li>
        <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link {{ ($active === "categories")? 'active' : ''}}"aria-current="page" href="/categories">Categories</a> -->
        <!-- </li> -->
      </ul>
      
      

      
      <ul class="navbar-nav ms-auto">
      @auth 
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            welcome back, {{ auth()->user()->name }}       
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/dashboard')}}"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="{{url('/logout')}}" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</a></li></button>
              </form>

              </li>
          </ul>
     
      @else
        <li class="nav-item">
          <a href="{{url('/login')}}" class="nav-link {{ ($active === "login")? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i>
          Login</a>
      </li>
      @endauth
    </ul>

    </div>
  </div>
</nav>