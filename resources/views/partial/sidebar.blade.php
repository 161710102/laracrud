<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user8-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>/
        <div class="info">
          <a href="#" class="">Dheri Firmansyah</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          </i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('mobils.index') }}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Mobil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('merks.index') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Merk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('jenis.index') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Jenis Mobil</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{ route('beritas.index') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Berita</p>

                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Logout</p>
            </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>