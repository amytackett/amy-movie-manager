<!-- Main Header -->
  <header class="main-header">

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand">@yield('title', config('app.title'))</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="/movies"><i class="fa fa-play"></i> Movies</a></li>
          </ul>
        </div>
        <!--<div class="navbar-custom-menu">
          <ul class="nav navbar-nav">-->
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>-->
    </nav>
  </header>