<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="{{ route("desa.loader.index") }}">
        <img src="{{ asset("assets/loader/img/SVG/logo.svg") }}" height="" width="100%" alt="logo">
      </a>
      <div class="navbar-collapse justify-content-between align-items-center" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route("desa.loader.index") }}">MY INFO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route("desa.loader.loads") }}">LOADS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route("desa.loader.my-loads") }}">MY LOADS</a>
          </li>
        </ul>
        <form action="{{ route("logout") }}" method="post">
            @csrf
            <button class="signOut">
                <i class="fa fa-sign-out"></i>
                <span>SIGN OUT</span>
            </button>
        </form>
      </div>
    </div>
  </nav>

  <div id="nav-icon1">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="sider">
    <div class="sideNave">
      <div class="sidebar">
        <div class="sidenav-logo">
          <img src="{{ asset("assets/loader/img/SVG/logo.svg") }}" height="" width="100%" alt="logo">
        </div>
        <div class="sidenav-btns mt5 d-flex flex-column">
          <a class="active" href="index.php">MY INFO</a>
          <a class="active" href="loads.php">LOADS</a>
          <a class="active" href="myLoads.php">MY LOADS</a>
        </div>
        <button class="sidenav-signout signOut">
          <i class="fa fa-sign-out"></i>
          <span>SIGN OUT</span>
        </button>
      </div>
    </div>
  </div>
