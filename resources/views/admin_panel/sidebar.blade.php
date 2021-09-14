<!-- Sidebar  -->
{{-- <nav id="sidebar" class="">
    <div class="sidebar-header">
        <h5>Admin Panel v2</h5>
        <hr>
    </div>

    <ul class="list-unstyled components">
        <p>User Profile</p>
        <li class="active">
            <a href="{{ url('/dashboard') }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dashboard</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
            </ul>
        </li>
       
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Add Categorry</a>
                </li>
                <li>
                    <a href="#">Categories</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sliders</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Add Slider</a>
                </li>
                <li>
                    <a href="#">Sliders</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Products</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Add Product</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Orders</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Orders</a>
                </li>
            </ul>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
    </ul>
</nav> --}}

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <!-- Brand Logo -->
        <a href="{{ url('/dashboard') }}" class="brand-link">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>
  
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../backend/dist/img/user2-160x160.jpg" class="img-circle profile elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jane Doe</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{ request()->is('dashboard') ? 'menu-open' : '' }}">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview {{ request()->is('categories') || request()->is('addcategory') ? 'menu-open' : '' }}">
            <a href="{{ url('/categories') }}" class="nav-link {{ request()->is('categories') || request()->is('categories/create') ? 'active' : '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/categories/create') }}" class="nav-link {{ request()->is('categories/create') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add category</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/categories') }}" class="nav-link {{ request()->is('categories') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview  {{ request()->is('sliders') || request()->is('addslider') ? 'menu-open' : '' }}">
            <a href="{{ url('/sliders') }}" class="nav-link {{ request()->is('sliders') || request()->is('addslider') ? 'active' : '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/addslider') }}" class="nav-link {{ request()->is('addslider') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add slider</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/sliders') }}" class="nav-link {{ request()->is('sliders') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview  {{ request()->is('products') || request()->is('addproduct') ? 'menu-open' : '' }}">
            <a href="{{ url('/products') }}" class="nav-link {{ request()->is('products') || request()->is('addproduct') ? 'active' : '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/addproduct') }}" class="nav-link {{ request()->is('addproduct') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add product</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/products') }}" class="nav-link {{ request()->is('products') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ request()->is('orders') ? 'menu-open' : '' }}">
            <a href="{{ url('/orders') }}" class="nav-link {{ request()->is('orders') ? 'active' : '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/orders') }}" class="nav-link {{ request()->is('orders') ? 'active' : '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
            </ul>
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>