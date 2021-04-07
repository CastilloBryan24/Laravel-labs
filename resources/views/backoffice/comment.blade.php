<!-- Post Comments -->
<div class="comments container">
    <h1 style="margin-top: 100px">Liste de commentaire à valider :</h1>
    <h2>Comments ({{$nbr}})</h2>
    {{-- <a href="#commentId">Comments ({{$nbr}})</a> --}}
    <ul class="comment-list">
        @foreach ($comment as $item)
            <li>
                <div class="commetn-text">
                    @if ($item->created_at == NULL)
                        <h3>{{$item->name}} | 03 nov, 2017</h3>
                        <p>{{$item->message}}</p>
                        <a href="/comment-validate/{{$item->id}}" class="btn btn-success">Valider</a>
                    @else
                        <h3>{{$item->name}} | {{$item->created_at->format('d M, Y')}}</h3>
                        <p>{{$item->message}}</p>
                        <a href="/comment-validate/{{$item->id}}" class="btn btn-success">Valider</a>

                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</div>