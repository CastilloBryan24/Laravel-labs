<form action="/team-update/{{$edit->id}}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input type="file" name="src" value="{{old("src") ? old("src") : $edit->src}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom & Prénom</label>
      <input type="text" name="name" value="{{old("name") ? old("name") : $edit->name}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Adresse Email</label>
      <input type="text" name="email" value="{{old("email") ? old("email") : $edit->email}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Numéro de téléphone</label>
      <input type="text" name="number" value="{{old("number") ? old("number") : $edit->number}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <input type="text" name="description" value="{{old("description") ? old("description") : $edit->description}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Fonction</label>
        @if (count($fonction) != 1)
        <select name="fonction_id" class="form-control" style="margin-bottom: 26px">
            @foreach ($fonction as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
      @else
          <input type="text" name="fonction_id" disabled="disabled" value="{{$fonction[0]->name}}" placeholder="Subject">
      @endif
      {{-- <input type="text" name="function" value="{{old("function") ? old("function") : $edit->function}}" class="form-control"> --}}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>