<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{asset('storage/img/blog/'.$show->src)}}" alt="" height="268px" width="750px">
                        <div class="post-date">
                            @if ($show->created_at == NULL)
                                <h2>03</h2>
                                <h3>Nov 2017</h3>
                            @else
                                <h2>{{$show->created_at->format('d')}}</h2>
                                <h3>{{$show->created_at->format('M Y')}}</h3>
                            @endif
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$show->title}}</h2>
                        <div class="post-meta">
                            <a href="#userId">{{$show->auteur->name}}</a>
                            @foreach ($show->tags as $tagg)
                                @if ($loop->iteration == 1)
                                    <a href="/tags/{{$tagg->id}}">{{$tagg->name}}</a>
                                @else
                                    <a class="tagStyle" href="/tags/{{$tagg->id}}">, {{$tagg->name}}</a>
                                @endif
                            @endforeach
                            <a href="">{{$nbr}} Comments</a>
                        </div>
                        @foreach ($texte as $item)
                            <p>{{$item}}</p>
                        @endforeach
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="{{asset('storage/img/users/'.$show->auteur->src)}}" alt="" height="117px" width="117px">
                        </div>
                        <div class="author-info">
                            <a href="#auteur"></a>
                            <h2>{{$show->auteur->name}}, <span>Author</span></h2>
                            <p>{{$show->auteur->description}}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments ({{$nbr}})</h2>
                        {{-- <a href="#commentId">Comments ({{$nbr}})</a> --}}
                        <ul class="comment-list">
                            @foreach ($comment as $item)
                                <li>
                                    <div class="commetn-text">
                                        @if ($item->created_at == NULL)
                                            <h3>{{$item->name}} | 03 nov, 2017</h3>
                                            <p>{{$item->message}}</p>
                                        @else
                                            <h3>{{$item->name}} | {{$item->created_at->format('d M, Y')}}</h3>
                                            <p>{{$item->message}}</p>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" action="/comment-store" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="mail" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn" type="submit">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
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