<!-- Team Section -->
<div class="team-section spad" id="team">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$title[3]->title}}</h2>
        </div>
        <div class="row">
            <!-- single member -->
            <?php use App\Models\User; $user=User::all();  ?>

            @foreach ($user->where('fonction_id', '!=', 1)->random(2) as $item)
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{asset('storage/img/users/'.$item->src)}}" alt="" height="448px">
                        <h2>{{$item->name}}</h2>
                        <h3>{{$item->fonctions->name}}</h3>
                    </div>
                </div>
                @if ($loop->iteration == 1)
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{asset('storage/img/users/'.$user[1]->src)}}" alt="">
                            <h2>{{$user[1]->name}}</h2>
                            <h3>{{$user[1]->fonctions->name}}</h3>
                        </div>
                    </div>    
                @endif
            @endforeach
            <!-- single member -->
        </div>
    </div>
</div>
<!-- Team Section end-->