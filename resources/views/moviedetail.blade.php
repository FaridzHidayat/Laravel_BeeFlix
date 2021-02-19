@extends('layout.app')

@section('detail')
    
    <br></br>
    <div class="container mt-5">
     <div class="card" >
        <div class="row">
        @foreach($passing as $pass)
            <div class="col-sm-4">
                <img src="{{URL::asset($pass->photo)}}" alt="" style="height:29rem;">
            </div>
            <div class="col-sm-4">
                <h3 class="font-weight-bold">{{$pass->title}}</h3>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i> 
                <p>Rating: {{$pass->rating}} / 5</p>
                <p>{{$pass->description}}</p>
                <br>
                <h7>Kategori:</h7> <a href="/categori/{{$pass->id}}">{{$pass->name}}</a>
            </div>
        @endforeach
            <div class="col-sm-4">
                <h4>EPISODE</h4> <br>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">episode</th>
                        <th scope="col">judul</th>
                      </tr>
                    </thead>
                    @foreach($eps as $ep)
                    <tbody>
                      <tr>
                        <td>{{$ep->episode}}</td>
                        <td>{{$ep->title}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
                <br>
                {!! $eps->render() !!}
               
            </div>
            </div>
        </div>
    </div>
@endsection

    