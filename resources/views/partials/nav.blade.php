<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="{{asset('storage/img/logo/'.$logo[0]->src)}}" height="32px" width="111px" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{(Route::getCurrentRoute()->uri()) === "/" ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{(Route::getCurrentRoute()->uri()) === "services" ? 'active' : ''}}"><a href="/services">Services</a></li>
            <li class="{{(Route::getCurrentRoute()->uri()) === "blog" || (Route::getCurrentRoute()->uri()) === "blogPost"  ? 'active' : ''}}"><a href="/blog">Blog</a></li>
            <li class="{{(Route::getCurrentRoute()->uri()) === "contact" ? 'active' : ''}}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->
