<div class="widget-item">
    <h2 class="widget-title">Tags</h2>
    <ul class="tag">
        @foreach ($tags as $item)
            <li><a href="">{{$item->name}}</a></li>
        @endforeach
    </ul>
</div>