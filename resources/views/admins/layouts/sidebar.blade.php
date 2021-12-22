<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->

<style>
    .sidebar-nav ul li ul li a {
        padding: 7px 15px 7px 15px !important;
    }
</style>

<aside class="left-sidebar" xmlns="http://www.w3.org/1999/html">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <div class="profile-img">
                {{--                <img src="{{!empty(\Illuminate\Support\Facades\Auth::user()->avatar)--}}
                {{--                    ? \Illuminate\Support\Facades\Auth::user()->avatar : asset('assets/images/default-image-user.png')}}"--}}
                {{--                     alt="user"/>--}}
                <div class="notify setpos"><span class="heartbit"></span> <span class="point"></span></div>
                <!-- this is blinking heartbit-->
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                {{--                <h5>{{\Illuminate\Support\Facades\Auth::user()->full_name}}</h5>--}}
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li>
                    <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i
                            class="fa fa-file"></i><span class="hide-menu">Home</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a
                                href="#">Home</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
