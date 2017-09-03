<header class="main-header">
  <a href="home.php" class="logo">
    <span class="logo-mini"><b>APL</b></span>
    <span class="logo-lg"><b>ADMIN PANEL</b></span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          @include('layouts.admin.time')
          </a>
        </li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{--  <img src="../images/admin.png" width="160px" height="160px" class="user-image" alt="User Image"/>  --}}
            <span class="hidden-xs">
              Halo admin
            </span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              {{--  <img src="#" class="img-circle" alt="User Image" />  --}}
              <p>
                ADMIN
              </p>   
            </li>
            <li class="user-body">
              <div class="col-xs-6 text-center">
                <a href='' class='btn btn-default btn-flat'>Ubah Password</a>
              </div>
              <div class="col-xs-6 text-center">
                <a href="{{ url('/logout') }}" class='btn btn-default btn-flat'>
                    Logout
                </a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- Kolom Sebelah Kiri -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      {{--  <div class="pull-left image"><img src="../images/admin.png" class="img-circle" alt="User Image"/></div>  --}}
      <div class="pull-left info">
        <p>Sultan</p>
      </div>
    </div>
    
    @include('layouts.admin.leftbar')

  </section>
</aside>