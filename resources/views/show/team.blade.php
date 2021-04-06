<div class="card" style="width: 18rem;">
    <img src="{{asset('storage/img/users/'.$show->src)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$show->name}}</h3>
      <h5>Mail :</h5> <p class="card-text">{{$show->email}}</p>
      <h5>Tel :</h5> <p class="card-text">{{$show->number}}</p>
      <h5>Description :</h5> <p class="card-text">{{$show->description}}</p>
      <h5>Fonction :</h5> <p class="card-text">{{$show->fonctions->name}}</p>
      <h5>Role :</h5> <p class="card-text">{{$show->roles->name}}</p>
      <a href="/team" class="btn btn-secondary">Retour</a>
      <a href="/team-edit/{{$show->id}}" class="btn btn-primary">Modifier</a>
    </div>
</div>