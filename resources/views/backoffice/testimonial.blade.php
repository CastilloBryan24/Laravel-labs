<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
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
                                    <a href="/testimonial-edit/{{$element->id}}" class="btn btn-primary">Modifier</a>
                                    <a href="/testimonial-destroy/{{$element->id}}" class="btn btn-danger">Supprimer</a>
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
<h1 class="text-center mt-5">Ajouter un avis</h1>
<form action="/testimonial-store" method="POST" class="mt-5 container" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Avis</label>
      <input type="text" name="text" value="{{old("text")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input type="file" name="src" value="{{old("src")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom & Prénom</label>
      <input type="text" name="name" value="{{old("name")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Poste</label>
      <input type="text" name="function" value="{{old("function")}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>