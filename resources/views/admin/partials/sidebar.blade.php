<div class="burger-icon burger-icon-white">
    <span class="burger-icon-top"></span>
    <span class="burger-icon-mid"></span>
    <span class="burger-icon-bottom"></span>
</div>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-search mobile-header-border mb-30">
                    <form action="#">
                        <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start-->
                    <nav>
                        <ul class="main-menu">
                            <li>
                                <a class="dashboard2 " href="{{ route('admin.dashboard') }}">
                                    <img src="{{ asset('admin/assets/imgs/page/dashboard/dashboard.svg') }}" alt="Dashboard">
                                    <span class="name">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="dashboard2" href="{{ route('admin.users.index') }}">
                                    <img src="{{ asset('admin/assets/imgs/page/dashboard/candidates.svg') }}" alt="Users">
                                    <span class="name">Users</span>
                                </a>
                            </li>
                            <!-- Add more menu items here as needed -->
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <h6 class="mb-10">Your Account</h6>
                    <ul class="mobile-menu font-heading">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Work Preferences</a></li>
                        <li><a href="#">Account Settings</a></li>
                        <li><a href="#">Go Pro</a></li>
                        <li><a href="{{ route('admin.logout') }}">Sign Out</a></li>
                    </ul>
                    <div class="mb-15 mt-15">
                        <a class="btn btn-default icon-edit hover-up" href="post-job.html">Post Job</a>
                    </div>
                </div>
                <div class="site-copyright">
                    Copyright 2022 &copy; JobBox.
                    <br>Designed by AliThemes.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="nav">
    <a class="btn btn-expanded"></a>
    <nav class="nav-main-menu">
        <ul class="main-menu">
            <li class="has-submenu">
                <a class="dashboard2" href="{{ route('admin.dashboard') }}" id="dashboard-menu-toggle">
                    <img src="{{ asset('admin/assets/imgs/page/dashboard/dashboard.svg') }}" alt="Dashboard">
                    <span class="name">Dashboard</span>
                    <i class="menu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li style="list-style-type: none;"><a href="#">CRM</a></li>
                    <li><a href="#">HRM</a></li>
                    <li><a href="#">LMS</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
            </li>
            <li>
                <a class="dashboard2 {{ request()->routeIs('admin.users.index') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                    <img src="{{ asset('admin/assets/imgs/page/dashboard/candidates.svg') }}" alt="Users">
                    <span class="name">Users</span>
                </a>
            </li>
        </ul>
    </nav>
    

    <div class="border-bottom mb-20 mt-20"></div>
    <div class="box-profile-completed text-center mb-30"></div>
    <div class="sidebar-border-bg mt-50">
        <p class="font-xxs color-text-paragraph mt-5"></p>
        <div class="mt-15"></div>
    </div>
</div>
