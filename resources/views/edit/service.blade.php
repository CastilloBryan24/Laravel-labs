<form action="/service-update/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Icone</label>
      <input type="text" name="icone" value="{{old("icone") ? old("icone") : $edit->icone}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="title" value="{{old("title") ? old("title") : $edit->title}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">texte</label>
      <input type="text" name="text" value="{{old("text") ? old("text") : $edit->text}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>