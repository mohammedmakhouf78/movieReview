<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('images/logo.webp')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Movie Review</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('images/' . (Auth::user()->image ?? ""))}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                     @if (currentRoute('admin.category.index'))
                         
                     @endif
                <li class="nav-item has-treeview {{currentRoute('admin.category.index') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRoute('admin.category.index') ? 'active' : ''}}">
                        <i class="fas fa-th-large nav-icon"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview {{currentRoute('admin.user.index') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRoute('admin.user.index') ? 'active' : ''}}">
                        <i class="fas fa-users nav-icon"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.user.index')}}" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>User Table</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview {{currentRoute('admin.product.index') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRoute('admin.product.index') ? 'active' : ''}}">
                        <i class="fas fa-video nav-icon"></i>
                        <p>
                            Movie
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.product.index')}}" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Movie Table</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview {{currentRoute('admin.review.index') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{currentRoute('admin.review.index') ? 'active' : ''}}">
                        <i class="fas fa-pen-nib nav-icon"></i>
                        <p>
                            Review
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.review.index')}}" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Review Table</p>
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
