<!-- Navbar -->
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <div class="container-fluid">

    <!-- Brand -->
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">
      <strong class="blue-text">{{ env('APP_NAME') }}</strong>
    </a>

    <ul class="navbar-nav px-3">
    	<li class="nav-item text-nowrap">
    		<i class="fas fa-user"></i> {{ Auth::user()->name }}
    	</li>
    </ul>


  </div>
</nav>
<!-- Navbar -->