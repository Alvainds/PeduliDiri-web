<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close text-dark"></i></a>

            <a class="navbar-brand" href="/dashboard">
                <!-- Logo icon -->
                <b class="logo-icon me-3">
                    <i class="bi bi-geo-alt-fill fs-4 text-primary"></i>
                </b>

                <span class="logo-text fs-5 fw-bold text-primary">
                    Peduli Diri
                </span>
            </a>

            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more text-dark"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                        href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                            class="icon-arrow-left-circle"></i></a></li>

            </ul>

            <ul class="navbar-nav">

                <li class="nav-item dropdown ">

                    @if (!Auth::user()->avatar)


                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bi bi-person-fill fs-2"></i>
                    </a>
                    @else

                    <a class="nav-link dropdown-toggle py-2" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="{{ asset('avatars/'.Auth::user()->avatar) }}" alt="user"
                            style="object-fit:cover;height:50px;width:50px;" class="img-thumbnail rounded-circle">
                    </a>

                    @endif


                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                            @if (!Auth::user()->avatar)


                            <i class="bi bi-person-fill fs-2"></i>
                            @else

                            <img src="{{ asset('avatars/'.Auth::user()->avatar) }}"
                                class="rounded-circle img-thumbnail mt-3 mx-2"
                                style="object-fit:cover;width:70px;height:70px">

                            @endif

                            <div class="ml-2">
                                <h4 class="mb-0">{{ Auth::user()->username }}</h4>
                                <p class=" mb-0">{{ Auth::user()->nik }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('Profile.index') }}"><i class="ti-user mr-1 ml-1"></i>
                            My
                            Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="change-password" class=" dropdown-item">
                            <i class="ti-settings mr-1 ml-1"></i>
                            Reset
                            Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    <i class="fa fa-power-off mr-1 ml-1"></i>
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>


<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span
                        class="hide-menu">Personal</span></li>


                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark {{ request()->routeIs('Dashboard.index') ? 'active' : '' }}"
                        href="{{ route('Dashboard.index') }}">
                        <i class="bi bi-house-door{{ request()->routeIs('Dashboard.index') ? '-fill' : '' }} fs-6"></i>
                        <span class="hide-menu">{{ __('Dashboard') }}</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('Travellog.index') }}"
                        :active="request()->routeIs('Travellog.index')">
                        <i class="bi bi-stickies{{ request()->routeIs('Travellog.index') ? '-fill' : '' }} fs-6"></i>
                        <span class="hide-menu">{{ __('Diary') }}</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('Travellog.create') }}"
                        :active="{{request()->routeIs('Travellog.create')}}">
                        <i
                            class="bi bi-bookmark-plus{{ request()->routeIs('Travellog.create') ? '-fill' : '' }} fs-6"></i>
                        <span class="hide-menu">{{ __('Buat Log') }}</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('Album.index') }}"
                        :active="{{request()->routeIs('Album.index')}}">
                        <i class="bi bi-image{{ request()->routeIs('Album.index') ? '-fill' : '' }} fs-6"></i>
                        <span class="hide-menu">{{ __('Albums') }}</span>
                    </a>
                </li>

            </ul>
            </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>