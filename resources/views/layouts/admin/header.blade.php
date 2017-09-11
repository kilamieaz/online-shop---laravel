<header class="main-header">
  <a href="{{ Route('admin.index') }}" class="logo">
    <span class="logo-mini"><b>IT</b>S</span>
    <span class="logo-lg"><b>IT</b>Store</span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
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
            {!! Form::image('/image/admin.png',null,['width' => '160', 'height' => '160', 'class' => 'user-image', 'alt' => 'User Image']) !!}
            <span class="hidden-xs">
              Halo {{Auth::user()->name}}
            </span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              {!! Form::image('/image/admin.png',null,['width' => '100', 'height' => '100','class' => 'img-circle', 'alt' => 'User Image']) !!}
              <p>
                superadmin
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

    @include('layouts.admin.leftbar')

  </section>
</aside>