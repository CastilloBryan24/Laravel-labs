<form action="/titre-update/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="title" value="{{old("title") ? old("title") : $edit->title}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>