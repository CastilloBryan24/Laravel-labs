<form action="/testimonial-update/{{$edit->id}}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Avis</label>
      <input type="text" name="text" value="{{old("text") ? old("text") : $edit->text}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input type="file" name="src" value="{{old("src") ? old("src") : $edit->src}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom & Prénom</label>
      <input type="text" name="name" value="{{old("name") ? old("name") : $edit->name}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Function</label>
      <input type="text" name="function" value="{{old("function") ? old("function") : $edit->function}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>