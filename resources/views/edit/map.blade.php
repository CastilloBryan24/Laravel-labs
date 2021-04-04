<form action="/map-update/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Lieu</label>
      <input type="text" name="map" value="{{old("map") ? old("map") : $edit->map}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>