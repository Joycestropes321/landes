
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
       <img src="{{ asset('dist/img/logo.png') }}" class="brand-image img-circle elevation-3"  
           style="opacity: .8">
      <span class="brand-text font-weight-light">Express Union</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/'.$user["logo"]) }}" class="img-circle elevation-2" alt="User Image" />
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $user['short_name'] }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/home/') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Account Summary
                
              </p>
            </a> 
          </li>
          <li class="nav-item">
            <a href="{{ url('/account/profile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile 
              </p>
            </a>
          </li>
         
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-sort-alpha-up-alt"></i>
              <p>
               Transfer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Local Transfer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/account/transfer') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  International Transfer
                    </p>
                </a>
              </li> 
            </ul>
          </li>
           

           <li class="nav-item">
            <a href="{{ url('/account/coming') }}" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave-alt"></i>
              <p>
                Loans 
              </p>
            </a>
          </li>   
           <li class="nav-item">
            <a href="{{ url('/account/coming') }}" class="nav-link">
              <i class="nav-icon fas fa-plane"></i>
              <p>
                Travel & Holiday
                <!-- <span class="right badge badge-danger">coming soon</span> -->
              </p>
            </a>
          </li>  

           <li class="nav-item">
            <a href="{{ url('/account/coming') }}" class="nav-link">
              <i class="nav-icon fas fa-film"></i>
              <p>
                Movies & Event
                <!-- <span class="right badge badge-danger">coming soon</span> -->
              </p>
            </a>
          </li>  
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-headphones"></i>
              <p>
                Support
              </p>
            </a>
          </li>  

           <li class="nav-item">
            <a href="{{ url('/account/coming') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Investment
                <span class="right badge badge-danger">coming soon</span>
              </p>
            </a>
          </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
