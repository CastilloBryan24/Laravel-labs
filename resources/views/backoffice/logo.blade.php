@include('home.intro')
<div class="mt-5 mb-5 text-center">
    @foreach ($logo as $item)
        <h1><a href="/logo-edit/{{$item->id}}" class="btn btn-primary mb-5">Changez votre logo</a></h1>
    @endforeach
</div>