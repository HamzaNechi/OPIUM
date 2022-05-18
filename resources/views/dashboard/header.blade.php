<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{URL::asset('assets/images/opuim-logoBLACK.png')}}" alt="logo" style="width:45%; height:35%;"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{URL::asset('assets/images/logo-mini.png')}}" alt="logo" style="width:45%; height:35%;"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{URL::asset('img/op.png')}}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <span class="font-weight-bold mb-2">OPIUM</span>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{url('/')}}">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Vitrine</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/logout') }}">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Déconnexion </a>
              </div>
            </li>
            
            
            
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="{{ url('/logout') }}">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->