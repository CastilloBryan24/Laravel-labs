<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                @foreach ($posts as $item)
                    <!-- Post item -->
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="{{asset('storage/img/blog/'.$item->src)}}" alt="" height="268px" width="750px">
                            <div class="post-date">
                                @if ($item->created_at == NULL)
                                    <h2>03</h2>
                                    <h3>Nov 2017</h3>
                                @else
                                    <h2>{{$item->created_at->format('d')}}</h2>
                                    <h3>{{$item->created_at->format('M Y')}}</h3>
                                @endif
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{$item->title}}</h2>
                            <div class="post-meta">
                                <a href="/post-show/{{$item->id}}/#auteur">{{$item->auteur->name}}</a>
                                <a href="">{{$item->categories->category}}</a>
                                @foreach ($item->tags->take(2) as $tagg)
                                    @if ($loop->iteration == 1)
                                        <a href="/tags/{{$tagg->id}}">{{$tagg->name}}</a>
                                    @else
                                        <a class="tagStyle" href="/tags/{{$tagg->id}}">, {{$tagg->name}}</a>
                                    @endif
                                @endforeach
                                <a href="/post-show/{{$item->id}}/#commentId">{{count($comment->where('post_id', $item->id))}} Comments</a>
                            </div>
                            <p>{{Str::limit($item->content, 300)}}</p>
                            <a href="/post-show/{{$item->id}}" class="read-more">Read More</a>
                        </div>
                    </div>
                @endforeach
                <!-- Pagination -->
                <div class="page-pagination">
                    {{ $posts->fragment('posts')->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>

            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                @include('partials.search')
                <!-- Single widget -->
                @include('partials.categories')
                <!-- Single widget -->
                @include('partials.tag')
            </div>
        </div>
    </div>
</div>
<!-- page section end-->