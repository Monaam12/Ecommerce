<aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="{{url('/')}}">
            <img src="{{asset('image/logo.png')}}" alt="CoolAdmin" /></a>
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
@can('list-role')
                    <li>
                        <a href="{{route('admin.')}}">
                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                    </li>
@endcan
@can('list-users')
                    <li>
                       <a href="{{route('admin.users.index')}}">
                        <i class="fa fa-group"></i>USERS MANAGEMENT</a>
                   </li>
@endcan
@can('list-role')
                    <li>
                        <a href="{{route('admin.roles.index')}}">
                        <i class="fa fa-cogs"></i>ROLES MANAGEMENT</a>
                    </li>
@endcan
                    <li>
                        <a href="{{route('admin.brand.index')}}">
                        <i class="fa fa-cogs"></i>BRAND PRODUCT</a>
                    </li>
                    <li>
                        <a href="{{route('admin.category.index')}}">
                        <i class="fa fa-cogs"></i>CATEGORY PRODUCT</a>
                    </li>
                    <li>
                        <a href="{{route('admin.product.index')}}">
                        <i class="fa fa-cogs"></i>PRODUCT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
