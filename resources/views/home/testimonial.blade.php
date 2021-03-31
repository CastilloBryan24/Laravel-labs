<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{{$title[1]->title}}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonial as $element)
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>{{$element->text}}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{asset('storage/img/avatar/'.$element->src)}}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{{$element->name}}</h2>
                                    <p>{{$element->function}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->