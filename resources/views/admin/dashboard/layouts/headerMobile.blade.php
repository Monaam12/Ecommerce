<header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="{{url('/')}}">
                        <img src="{{asset('image/logo.png')}}" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
               <ul class="navbar-mobile__list list-unstyled">
            @can('list-role')
                    <li>
                    <a href="{{route('admin.')}}">
                       <i class="fas fa-chart-bar"></i>Dashboard</a>
                    </li>
            @endcan
            @can('list-users')
                    <li>
                    <a href="{{route('admin.users.index')}}">
                        <i class="fa fa-group"></i> USERS MANAGEMENT</a>
                    </li>
            @endcan
            @can('list-role')
                    <li>
                        <a href="{{route('admin.roles.index')}}">
                        <i class="fa fa-cogs"></i> ROLES MANAGEMENT</a>
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
            </div>
        </nav>
    </header>
