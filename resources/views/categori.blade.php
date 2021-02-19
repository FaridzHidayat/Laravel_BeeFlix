@extends('layout.app')

@section('detail')

<style>
.film{
    background:#80aaff;
    position: relative;
    transition: transform 0.5s ease;
    transform: translateX(0px);
    width: 100px
}

.film:hover
  {
   transform: translateY(-15px);
  }
</style>

<div class="container mt-5">
    @foreach($genre as $gr)
    <h5 class="font-weight-bold ml-3 text-white">{{$gr->name}}</h5>
    @endforeach
    <div class="row mx-auto">
        @foreach($passing1 as $ps)
        <div class="card film mt-3 mr-3 ml-3" style="width:15rem;">
            <img src="{{URL::asset($ps->photo)}}" class="card-img-top" alt="" style="height:21rem">
            <div class="card body ">
                <h7 class="text-center card title m-3 bg-light">{{$ps->title}}</h7>
                <a class="btn btn-secondary"href="/moviedetail/{{$ps->id}}"> View Movie Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection