@extends('layout.app')

@section('content')
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

.carousel-item {
    height: 750px;
}
.carousel-item img {
    margin-top: 55px;
}

</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="asset/reply.jpg" class="d-block w-100" alt="..." style="height:45rem">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="asset/spongebob.jpg" class="d-block w-100" alt="..." style="height:45rem">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="asset/strange1.jpg" class="d-block w-100" alt="..." style="height:45rem">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

<div class="container mt-5">
    <h5 class="font-weight-bold ml-3 text-white">DRAMA</h5>
    <div class="row mx-auto">
        @foreach($movies as $mvs)
        <div class="card film mt-3 mr-3 ml-3" style="width:15rem;">
            <img src="{{URL::asset($mvs->photo)}}" class="card-img-top" alt="" style="height:21rem">
            <div class="card body ">
                <h7 class="text-center card title m-3 bg-light">{{$mvs->title}}</h7>
                <a class="btn btn-secondary"href="/moviedetail/{{$mvs->id}}"> View Movie Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mt-4">
    <h5 class="font-weight-bold ml-3 text-white">KIDS</h5>
    <div class="row mx-auto">
    @foreach($movies1 as $mvs1)
        <div class="card film mt-3 mr-3 ml-3" style="width:15rem;">
            <img src="{{URL::asset($mvs1->photo)}}" class="card-img-top" alt="" style="height:21rem">
            <div class="card body">
                <h7 class="text-center card title m-3 bg-light">{{$mvs1->title}}</h7>
                <a class="btn btn-secondary"href="/moviedetail/{{$mvs1->id}}'"> View Movie Detail</a>
            </div>
        </div>
    @endforeach
    </div>
</div>

<div class="container mt-4">
    <h5 class="font-weight-bold ml-3 text-white">TV SHOW</h5>
    <div class="row mx-auto">
        @foreach($movies2 as $mvs2)
        <div class="card film mt-3 mr-3 ml-3" style="width:15rem;">
            <img src="{{URL::asset($mvs2->photo)}}" class="card-img-top" alt="" style="height:21rem">
            <div class="card body">
                <h7 class="text-center card title m-3 bg-light">{{$mvs2->title}}</h7>
                <a class="btn btn-secondary"href="/moviedetail/{{$mvs2->id}}"> View Movie Detail</a>
            </div>
        </div>
        @endforeach
        
    </div>
</div>

@endsection