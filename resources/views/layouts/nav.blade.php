<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar top-nav-collapse">
  <div class="container-fluid">

    <!-- Brand -->
    <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
      <strong class="blue-text">{{ env('APP_NAME') }}</strong>
    </a>

    <!-- Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link waves-effect" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>

      <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a href="" class="nav-link waves-effect" target="_blank">
                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                </a>
            </li>     
        
      </ul>

    </div>

  </div>
</nav>
<!-- Navbar -->