<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="{{url('/dashboard')}}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/posts*') ? 'active' : ''}}" href="{{url('/dashboard/posts')}}">
              <span data-feather="file-text" class="align-text-bottom"></span>
              My Posts
            </a>
          </li>
  
        </ul>
        
        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
        </h6>
        <ul  class="nav flex-column">
          {{-- <li class="nav-item" >
            <a class="nav-link {{Request::is('dashboard/categories*') ? 'active' : ''}}" href="{{url('/dashboard/categories')}}">
              <span data-feather="grid" class="align-text-bottom"></span> --}}
               {{-- Posts Categories --}}
               <a class="nav-link {{Request::is('/dashboard/kriteria*') ? 'active' : ''}}" href="{{url('/dashboard/kriteria')}}">
                <span data-feather="grid" class="align-text-bottom"></span>
                 kriteria
                 <a class="nav-link {{Request::is('/dashboard/produk*') ? 'active' : ''}}" href="{{url('/dashboard/produk')}}">
                  <span data-feather="grid" class="align-text-bottom"></span>
                   Alternatif
                   <a class="nav-link {{Request::is('/dashboard/hitung*') ? 'active' : ''}}" href="{{url('/dashboard/hitung')}}">
                    <span data-feather="grid" class="align-text-bottom"></span>
                     Hasil Perhitungan saw
            </a>
          </li>
        </ul>
        @endcan
      </div>
    </nav>