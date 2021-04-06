<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$title[0]->title}}</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($features as $item)
                    @if ($loop->iteration <= 3)
                        <div class="icon-box light left">
                            <div class="service-text">
                                <h2>{{$item->title}}</h2>
                                <p>{{$item->text}}</p>
                            </div>
                            <div class="icon">
                                <i class="{{$item->icone}}"></i>
                            </div>
                        </div>
                    @endif
                    @if ($loop->iteration == 3)
                        </div>
                                <!-- Devices -->
                        <div class="col-md-4 col-sm-4 devices">
                            <div class="text-center">
                                <img src="{{asset('storage/img/device.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 features">
                    @endif
                    @if ($loop->iteration > 3)
                        <div class="icon-box light">
                            <div class="icon">
                                <i class="{{$item->icone}}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{$item->title}}</h2>
                                <p>{{$item->text}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->