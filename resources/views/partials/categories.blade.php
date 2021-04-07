<div class="widget-item">
    <h2 class="widget-title">Categories</h2>
    <ul>
        @foreach ($categories as $item)
            <li><a href="">{{$item->category}}</a></li>
        @endforeach
    </ul>
</div>