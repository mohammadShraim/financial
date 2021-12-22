<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo"/>
                    <!-- Light Logo icon -->
                    <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo"/>
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span>
                         <!-- dark Logo text -->
                         <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo"/>
                    <!-- Light Logo text -->
                         <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo"
                              alt="homepage"/></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">

                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item hidden-sm-down search-box"><a
                        class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i
                            class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i
                                class="ti-close"></i></a></form>
                </li>

                <!-- ============================================================== -->
                <!-- Language -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                            class="flag-icon flag-icon-sa"></i></a>
                </li>
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    {{--                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""--}}
                    {{--                       data-toggle="dropdown" aria-haspopup="true"--}}
                    {{--                       aria-expanded="false">--}}
                    {{--                            <img alt="user" class="profile-pic"--}}
                    {{--                                 src="{{!empty(\Illuminate\Support\Facades\Auth::user()->avatar)--}}
                    {{--                                    ? \Illuminate\Support\Facades\Auth::user()->avatar : asset('assets/images/default-image-user.png')}}">--}}

                    {{--                    </a>--}}
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            {{--                            <li>--}}
                            {{--                                <div class="dw-user-box">--}}
                            {{--                                        <div class="u-img">--}}
                            {{--                                            <img alt="user" src="{{!empty(\Illuminate\Support\Facades\Auth::user()->avatar)--}}
                            {{--                                            ? \Illuminate\Support\Facades\Auth::user()->avatar : asset('assets/images/default-image-user.png')}}">--}}
                            {{--                                        </div>--}}

                            {{--                                    <div class="u-text">--}}
                            {{--                                        <h4>{{\Illuminate\Support\Facades\Auth::user()->full_name}}</h4>--}}
                            {{--                                        <p class="text-muted">{{\Illuminate\Support\Facades\Auth::user()->email}}</p>--}}
                            {{--                                        <a href="{{route('team.show', \Illuminate\Support\Facades\Auth::id())}}" class="btn btn-rounded btn-danger btn-sm">View--}}
                            {{--                                            Profile</a>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </li>--}}
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i>
                                    Logout
                                </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
