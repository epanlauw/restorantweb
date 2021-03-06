<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#ff8c00;">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
      <img src={{asset('lte/dist/img/AdminLTELogo.png')}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset('users/image/'.auth()->user()->image)}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->first_name. ' ' . auth()->user()->last_name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{URL::to('admin/makanans')}}" class="nav-link">
              <i class="nav-icon fa fa-book">
                <p>
                  Makanan
                </p>
              </i>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('admin/minumans')}}" class="nav-link">
              <i class="nav-icon fa fa-book">
                <p>
                  Minuman
                </p>
              </i>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('admin/transaksis')}}" class="nav-link">
              <i class="nav-icon fa fa-book">
                <p>
                  Transaksi
                </p>
              </i>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
