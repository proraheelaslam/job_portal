<header class="header sticky-bar">
  <div class="container">
    <div class="main-header">
      <div class="header-left">
        <div class="header-logo"><a class="d-flex" href="{{ url('/') }}"><img alt="jobBox" src="{{ asset('front_end/assets/imgs/template/jobhub-logo.svg') }}"></a></div>
      </div>
      <div class="header-nav">
        <nav class="nav-main-menu">
          <ul class="main-menu">
            <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
            <li class="has-children">
              <a class="{{ request()->is('jobs-grid') || request()->is('jobs-list') ? 'active' : '' }}" href="#">Find a Job</a>
              <ul class="sub-menu">
                <li><a href="{{ url('jobs-grid') }}" class="{{ request()->is('jobs-grid') ? 'active' : '' }}">Jobs Grid</a></li>
                <li><a href="{{ url('jobs-list') }}" class="{{ request()->is('jobs-list') ? 'active' : '' }}">Jobs List</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a class="{{ request()->is('recruiters') || request()->is('company-details') ? 'active' : '' }}" href="#">Recruiters</a>
              <ul class="sub-menu">
                <li><a href="{{ url('recruiters') }}" class="{{ request()->is('recruiters') ? 'active' : '' }}">Recruiters</a></li>
                <li><a href="{{ url('company-details') }}" class="{{ request()->is('company-details') ? 'active' : '' }}">Company Details</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a class="{{ request()->is('candidates-grid') || request()->is('candidate-details') ? 'active' : '' }}" href="candidates-grid.html">Candidates</a>
              <ul class="sub-menu">
                <li><a href="{{ url('candidates-grid') }}" class="{{ request()->is('candidates-grid') ? 'active' : '' }}">Candidates Grid</a></li>
                <li><a href="{{ url('candidate-details') }}" class="{{ request()->is('candidate-details') ? 'active' : '' }}">Candidate Details</a></li>
              </ul>
            </li>
            <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</a></li>
            <li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Contact</a></li>
            <li><a class="{{ request()->is('blog') ? 'active' : '' }}" href="{{ url('blog') }}">Blog</a></li>
          </ul>
        </nav>
        <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
      </div>
      <div class="header-right">
        <div class="block-signin">
          <a class="text-link-bd-btom hover-up" href="{{ url('register') }}">Register</a>
          <a class="btn btn-default btn-shadow ml-40 hover-up" href="{{ url('signin') }}">Sign in</a>
        </div>
      </div>
    </div>
  </div>
</header>
