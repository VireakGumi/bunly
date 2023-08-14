{{-- BEGIN :: Navbar Content --}}
<div class="navbar-content-container">
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/borey-bunly-logo.webp') }}" alt="" />
        </a>
    </div>
    <div class="navbar-content-menu">
        <div class="navbar-content-row">
            <div class="navbar-content-col{{ request()->is('/') ? ' current' : '' }}">
                <a href="{{ url('/') }}">Home</a>
            </div>
            <div class="navbar-content-col{{ request()->is('/project') ? ' current' : '' }}">
                <a href="{{ url('/project') }}">Projects</a>
            </div>
            <div class="navbar-content-col{{ request()->is('/gallery') ? ' current' : '' }}">
                <a href="{{ url('/gallery') }}">GALLERYS</a>
            </div>
            <div class="navbar-content-col{{ request()->is('/construction') ? ' current' : '' }}">
                <a href="{{ url('/construction') }}">CONSTRUCTION</a>
            </div>
            <div class="navbar-content-col{{ request()->is('/news') ? ' current' : '' }}">
                <a href="{{ url('/news') }}">News</a>
            </div>
            <div class="navbar-content-col{{ request()->is('/about') ? ' current' : '' }}">
                <a href="{{ url('/about') }}">About Us</a>
            </div>
            <div class="navbar-content-col{{ request()->is('/contact') ? ' current' : '' }}">
                <a href="{{ url('/contact') }}">Contact Us</a>
            </div>
            <div class="navbar-content-col{{ request()->is('/career') ? ' current' : '' }}">
                <a href="{{ url('/career') }}">Career</a>
            </div>
        </div>
        <hr />
        <div class="flag-wrapper">
            <div class="flag">
                <img src="{{ asset('images/istockphoto-1265164088-612x612.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</div>
{{-- END   :: Navbar Content --}}
