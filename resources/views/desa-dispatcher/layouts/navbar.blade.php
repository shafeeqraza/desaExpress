<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="{{ route("desa.dispatcher.profile") }}">
        <img src="{{ asset("assets/dispatcher/img/SVG/logo.svg") }}" height="" width="100%" alt="logo">
      </a>
      <div class="navbar-collapse justify-content-between align-items-center" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route("desa.dispatcher.profile") }}">MY INFO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route("desa.dispatcher.dispatches") }}">DISPATCHES</a>
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
