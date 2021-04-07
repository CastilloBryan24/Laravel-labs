<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>{{$contact[0]->text}}</p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">{{$contact[0]->address}} <br> {{$contact[0]->postal}} </p>
                <p class="con-item">{{$contact[0]->number}}</p>
                <p class="con-item">{{$contact[0]->mail}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form" action="/formulaire-store" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="mail" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            @if (count($sujet) != 1)
                                <select name="subject_id" class="form-control" style="margin-bottom: 26px; background-color: #f5ecfb">
                                    @foreach ($sujet as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            @else
                                <input type="text" name="subject_id" disabled="disabled" value="{{$sujet[0]->name}}" placeholder="Subject">
                            @endif
                            <textarea name="message" placeholder="Message" class="mt-5"></textarea>
                            <button class="site-btn" type="submit">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->