<h1 class="text-center" style="margin-top: 100px">Poster un nouveau blog</h1>

<form action="/post-store" method="POST" class="mt-5 container" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input type="file" name="src" value="{{old("src")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="title" value="{{old("title")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Article</label>
      {{-- <input type="text" name="content" value="{{old("content")}}" class="form-control"> --}}
      <textarea name="content" value="{{old("content")}}" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Catégorie</label>
      <select class="form-control" name="category_id" id="exampleFormControlSelect1">
        @foreach ($category as $item)
          <option value="{{$item->id}}">{{$item->category}}</option>
        @endforeach
      </select>
    </div>
    @foreach ($tag as $item)
      <div class="form-check d-flex flex-column pl-0">
        <input class="form-check-input" name="tag[]" type="checkbox" value="{{$item->id}}" id="tag">
        <label class="form-check-label pl-5 mb-3" for="tag">{{$item->name}}</label>
      </div>    
    @endforeach
      {{-- @foreach ($tag as $item)
        <label for="exampleInputEmail1">{{$item->name}}</label>
        <input type="checkbox" name="tag[]" value="{{$item->id}}" class="form-control">
      @endforeach --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>