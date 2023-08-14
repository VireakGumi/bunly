{{-- BEGIN :: Navbar Content --}}
<div class="navbar-content-container">
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/borey-bunly-logo.webp') }}" alt="" />
        </a>
    </div>
    <div class="navbar-content-menu">
        <div class="navbar-content-row">
            <div class="navbar-content-col{{ Request::is('/') ? ' current' : '' }}">
                <a href="{{ url('/') }}" id="home">Home</a>
            </div>
            <div class="navbar-content-col{{ Request::is('project') ? ' current' : '' }}">
                <a href="{{ url('/project') }}" id="project">Projects</a>
            </div>
            <div class="navbar-content-col{{ Request::is('gallery') ? ' current' : '' }}">
                <a href="{{ url('/gallery') }}" id="gallery">GALLERYS</a>
            </div>
            <div class="navbar-content-col{{ Request::is('construction') ? ' current' : '' }}">
                <a href="{{ url('/construction') }}" id="construction">CONSTRUCTION</a>
            </div>
            <div class="navbar-content-col{{ Request::is('news') ? ' current' : '' }}">
                <a href="{{ url('/news') }}" id="news">News</a>
            </div>
            <div class="navbar-content-col{{ Request::is('about') ? ' current' : '' }}">
                <a href="{{ url('/about') }}" id="about">About Us</a>
            </div>
            <div class="navbar-content-col{{ Request::is('contact') ? ' current' : '' }}">
                <a href="{{ url('/contact') }}" id="contact">Contact Us</a>
            </div>
            <div class="navbar-content-col{{ Request::is('career') ? ' current' : '' }}">
                <a href="{{ url('/career') }}" id="career">Career</a>
            </div>
        </div>
        <hr />
        <div class="flag-wrapper">
            <div class="flag flag-kh">
                <img src="{{ asset('images/istockphoto-1265164088-612x612.jpg') }}" alt="">
            </div>
            <div class="flag flag-en">
                <img src="{{ asset('images/usa.png') }}" alt="">
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
