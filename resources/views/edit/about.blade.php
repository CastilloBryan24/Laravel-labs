<form action="/about-update/{{$edit->id}}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Texte 1</label>
      <input type="text" name="text1" value="{{old("text1") ? old("text1") : $edit->text1}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Texte 2</label>
      <input type="text" name="text2" value="{{old("text2") ? old("text2") : $edit->text2}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Photo Couverture</label>
      <input type="file" name="src" value="{{old("src") ? old("src") : $edit->src}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Lien vidéo</label>
      <input type="text" name="link" value="{{old("link") ? old("link") : $edit->link}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>