<div class="container" style="margin-top: 100px">
    <table class="table table-bordered table-dark mt-5">
        <thead>
          <tr>
            <th scope="col"><h1>Nom</h1></th>
            <th scope="col"><h1>Fonction</h1></th>
            <th scope="col" class="text-center"><h1>Détails</h1></th>
            <th scope="col" class="text-center"><h1>Supprimer</h1></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($equipe as $item)
            <tr>
              <td>{{$item->name}}</td>  
              <td>{{$item->function}}</td>  
              <td class="text-center"><a href="/team-show/{{$item->id}}" class="btn btn-warning">Voir</a></td>        
              <td class="text-center"><a href="/team-destroy/{{$item->id}}" class="btn btn-danger">Supprimer</a></td>        
            </tr>
          @endforeach
        </tbody>
    </table>
</div>

<!-- Testimonial section end-->
<h1 class="text-center mt-5">AJOUTER UN NOUVEAU MEMBRE</h1>
<form action="/team-store" method="POST" class="mt-5 container" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input type="file" name="src" value="{{old("src")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nom & Prénom</label>
      <input type="text" name="name" value="{{old("name")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Fonction</label>
      <input type="text" name="function" value="{{old("function")}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>