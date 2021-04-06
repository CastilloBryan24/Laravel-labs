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
          @foreach ($user as $item)
            <tr>
              <td>{{$item->name}}</td>  
              <td>{{$item->fonctions->name}}</td>  
              <td class="text-center"><a href="/team-show/{{$item->id}}" class="btn btn-warning">Voir</a></td>        
              <td class="text-center"><a href="/team-destroy/{{$item->id}}" class="btn btn-danger">Supprimer</a></td>        
            </tr>
          @endforeach
        </tbody>
    </table>
</div>