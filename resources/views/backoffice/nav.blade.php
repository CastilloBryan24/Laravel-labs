<header class="header-section mb-5">
    <div class="logo">
        <img src="{{asset('storage/img/logo/'.$logo[0]->src)}}" height="32px" width="111px" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{(Route::getCurrentRoute()->uri()) === "backoffice" ? 'active' : ''}}"><a href="/backoffice">Logo</a></li>
            <li class="{{(Route::getCurrentRoute()->uri()) === "titre" ? 'active' : ''}}"><a href="/titre">Titre</a></li>
            <li class="{{(Route::getCurrentRoute()->uri()) === "boService" ? 'active' : ''}}"><a href="/boService">Services</a></li>
            <li class="{{(Route::getCurrentRoute()->uri()) === "boTestimonial" ? 'active' : ''}}"><a href="/boTestimonial">Avis</a></li>
            <li class="{{(Route::getCurrentRoute()->uri()) === "blog" || (Route::getCurrentRoute()->uri()) === "blogPost"  ? 'active' : ''}}"><a href="/blog">Blog</a></li>
            <li class="{{(Route::getCurrentRoute()->uri()) === "contact" ? 'active' : ''}}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>
