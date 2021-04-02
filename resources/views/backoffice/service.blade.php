<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($page as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$item->icone}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$item->title}}</h2>
                            <p>{{$item->text}}</p>
                            <a href="/service-edit/{{$item->id}}" class="btn btn-primary">Modifier</a>
                            <a href="/service-destroy/{{$item->id}}" class="btn btn-danger">Supprimer</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            {{ $page->fragment('services')->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>
<!-- services section end -->
<h1 class="text-center mt-5">AJOUTER UN NOUVEAU SERVICE</h1>

<form action="/service-store" method="POST" class="mt-5 container">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Icone</label>
      <input type="text" name="icone" value="{{old("icone")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="title" value="{{old("title")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">texte</label>
      <input type="text" name="text" value="{{old("text")}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>