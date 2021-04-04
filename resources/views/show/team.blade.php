<div class="card" style="width: 18rem;">
    <img src="{{asset('storage/img/team/'.$show->src)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$show->name}}</h5>
      <p class="card-text">Fonction : {{$show->function}}</p>
      <a href="/team" class="btn btn-secondary">Retour</a>
      <a href="/team-edit/{{$show->id}}" class="btn btn-primary">Modifier</a>
    </div>
</div>