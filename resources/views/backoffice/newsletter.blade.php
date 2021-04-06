<div class="container" style="margin-top: 100px">
    <table class="table table-bordered table-dark mt-5">
        <thead>
          <tr>
            <th scope="col"><h1>Adresse email des personnes inscrites pour la newsletter</h1></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mail as $item)
            <tr>
              <td>{{$item->mail}}</td>  
            </tr>
          @endforeach
        </tbody>
    </table>
</div>  