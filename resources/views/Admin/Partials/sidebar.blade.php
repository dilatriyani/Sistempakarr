<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'pakar')
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/Admin/Dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

   
    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'pakar')
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/Profile') }}">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->
    @endif

    
    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'pakar')
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/Admin/Data_Diagnosa') }}">
        <i class="bi bi-menu-button-wide"></i>
        <span>Data Diagnosa</span>
      </a>
    </li>
    @endif

    @if(Auth::user()->role == 'pakar')
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/Admin/Data_Penyakit') }}">
        <i class="bi bi-journal-text"></i>
        <span>Data Penyakit</span>
     
      </a>
    </li><!-- End Forms Nav -->
    @endif

    @if(Auth::user()->role == 'pakar')
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/Admin/Data_Gejala') }}">
        <i class="bi bi-layout-text-window-reverse"></i>
        <span>Data Gejala</span>
      
      </a>
    </li><!-- End Tables Nav -->
    @endif

    @if(Auth::user()->role == 'pakar')
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/Admin/Rule') }}">
        <i class="bi bi-bar-chart"></i>
        <span>Basis Pengetahuan</span>
       
      </a>
    </li><!-- End Charts Nav -->
    @endif

    @if(Auth::user()->role !== 'pakar')
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/Admin/Data_Admin') }}">
        <i class="bi bi-menu-button-wide"></i>
        <span>Data Pengguna</span>
      </a>
    </li>
    @endif

    @if(Auth::user()->role !== 'pakar')
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/Admin/Artikel') }}">
        <i class="bi bi-gem"></i>
        <span>Data Artikels</span>
       
      </a>
    </li>
    @endif

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/logout') }}">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Login Page Nav -->
    @endif
  </ul>
</aside><!-- End Sidebar-->
