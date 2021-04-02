<div class="container" style="margin-top: 100px">
  <table class="table table-bordered table-dark mt-5">
      <thead>
        <tr>
          <th scope="col"><h1>Titre</h1></th>
          <th scope="col" class="text-center"><h1>Modifier</h1></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($title as $item)
          <tr>
            <td>{{$item->title}}</td>  
            <td class="text-center"><a href="/titre-edit/{{$item->id}}" class="btn btn-primary">Modifier</a></td>        
          </tr>
        @endforeach
      </tbody>
  </table>
</div>  