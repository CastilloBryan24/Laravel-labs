<h1 class="text-center mt-5">Ecrire un blog</h1>

<form action="/service-store" method="POST" class="mt-5 container" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input type="text" name="icone" value="{{old("icone")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="title" value="{{old("title")}}" class="form-control">
    </div>
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