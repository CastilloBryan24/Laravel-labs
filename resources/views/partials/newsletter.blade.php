<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                @if ($errors->any())
                    <div class="alert alert-danger container mt-5">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- newsletter form -->
                <form class="nl-form" action="/news-store" method="POST">
                    @csrf
                    <input type="text" name="mail" placeholder="Your e-mail here">
                    <button class="site-btn btn-2" type="submit">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->