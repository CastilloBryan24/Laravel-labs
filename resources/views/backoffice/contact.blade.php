<div class="container" style="margin-top: 100px">
    <table class="table table-bordered table-dark mt-5">
        <thead>
          <tr>
            <th scope="col"><h1>Lieu</h1></th>
            <th scope="col" class="text-center"><h1>Modifier La Localisation</h1></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($map as $item)
            <tr>
                <td>{{$item->map}}</td>  
                <td class="text-center"><a href="/map-edit/{{$item->id}}" class="btn btn-primary">Modifier</a></td>        
            </tr>
          @endforeach
        </tbody>
    </table>
</div>  

@include('contact.map')

<!-- Contact section -->
<div class="contact-section spad fix float-left mt-5 ">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class=" col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>{{$contact[0]->text}}</p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">{{$contact[0]->address}} <br> {{$contact[0]->postal}} </p>
                <p class="con-item">{{$contact[0]->number}}</p>
                <p class="con-item">{{$contact[0]->mail}}</p>
                <div class="mt60">
                    <a href="/contact-edit/{{$contact[0]->id}}" class="site-btn">Modifier</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->