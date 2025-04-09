<!-- Logout Form -->
<form id="logoutForm" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
    @method('POST')
</form>

<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo">
                    <a class="d-flex" href="{{ route('admin.dashboard') }}">
                        <img alt="jobBox" src="{{ asset('admin/assets/imgs/page/dashboard/logo.svg') }}">
                    </a>
                </div>
                <span class="btn btn-grey-small ml-10">Admin area</span>
            </div>
            <div class="header-right">
                <div class="block-signin">
                    <div class="dropdown d-inline-block" style="visibility:hidden">
                        <a class="btn btn-notify" id="dropdownNotify" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                        <ul></ul>
                    </div>
                    <div class="member-login">
                        <img alt="profile_picture" src="{{ asset('admin/uploads/profiles/' . session('profile_picture')) }}">
                        <div class="info-member">
                            <strong class="color-brand-1">{{ session('name', 'Guest') }}</strong>
                            <div class="dropdown">
                                <a class="font-xs color-text-paragraph-2 icon-down" id="dropdownProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">{{ ucfirst(session('type', 'user')) }}</a>
                                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownProfile">
                                    <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>                                  
                                      <li><a class="dropdown-item" href="my-resume.html">CV Manager</a></li>
                                    <!-- Logout Link (Triggers the form submission) -->
                                    <li><a class="dropdown-item" href="javascript:void(0);" onclick="document.getElementById('logoutForm').submit();">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
