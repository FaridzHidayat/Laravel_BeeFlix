<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <title>Beeflix</title>
</head>

<style>
  .beeicon{
    height : 2rem;
  }

  .navbar{
        background: transparent !important ;
        transition: 0.5s ease;
      }

  .navbar.scrolled{
        background: #000000 !important;
      }
</style>

<body class="bg-info">
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <img class="beeicon" src="{{URL::asset('asset/beeicon.png')}}"></img>
  <a class="navbar-brand text-warning font-weight-bolder" href="/">BEEFLIX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <div class="dropdown">
  <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php $pass = DB::table('genres')->get()?>
    @foreach($pass as $lempar)
    <a class="dropdown-item" href="{{url('categori',$lempar->id)}}">{{$lempar->name}}</a>
    @endforeach
  </div>
</div>

    </ul>
    <div id="date" class="text-white ml-2"></div>
            <script>
              var d = new Date();
              var n = d.toDateString();
              document.getElementById("date").innerHTML = n;
            </script>
          
        </div>
    
  </div>
</nav>
  @yield('content')
  @yield('detail')
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
crossorigin="anonymous"></script>

<script>
  $(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
  });
 </script>
</html>