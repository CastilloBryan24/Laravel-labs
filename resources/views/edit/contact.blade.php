<form action="/contact-update/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Texte</label>
      <input type="text" name="text" value="{{old("text") ? old("text") : $edit->text}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Adresse</label>
      <input type="text" name="address" value="{{old("address") ? old("address") : $edit->address}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Code Postal</label>
      <input type="text" name="postal" value="{{old("postal") ? old("postal") : $edit->postal}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Numéro</label>
      <input type="text" name="number" value="{{old("number") ? old("number") : $edit->number}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Adresse Email</label>
      <input type="text" name="mail" value="{{old("mail") ? old("mail") : $edit->mail}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>