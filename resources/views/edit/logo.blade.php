<form action="/logo-update/{{$edit->id}}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Logo</label>
      <input type="file" name="src" value="{{old("src") ? old("src") : $edit->src}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>