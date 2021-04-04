<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach ($random as $element)
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$element->icone}}"></i>
                            </div>
                            <h2>{{$element->title}}</h2>
                            <p>{{$element->text}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{{$title[0]->title}}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{$about[0]->text1}}</p>
                </div>
                <div class="col-md-6">
                    <p>{{$about[0]->text2}}</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="#team" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{asset('storage/img/'.$about[0]->src)}}" alt="" height="404,83px" width="750px">
                        <a href="{{$about[0]->link}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->