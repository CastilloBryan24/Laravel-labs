<!-- About section -->
<div class="about-section">
    <div class="overlay "></div>
    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title mt-5">
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
                <a href="/about-edit/{{$about[0]->id}}" class="site-btn">Modifier</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{asset('storage/img/'.$about[0]->src)}}" alt="">
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