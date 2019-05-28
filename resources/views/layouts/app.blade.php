<!DOCTYPE html>
<html>
<head>
    <style>
    @font-face {
	font-family: 'SquareCaps';
	src: url('fonts/SquareCaps/SquareCaps.eot');
	src: local('SquareCaps'), url('fonts/SquareCaps/SquareCaps.woff') format('woff'), url('fonts/SquareCaps/SquareCaps.ttf') format('truetype');
}

@font-face {
    font-family: 'BreatheFire';
    src: url("fonts/BreatheFire/Breathe_Fire.otf") format("opentype");
}

.DragonText
{
    font-family: BreatheFire; font-style: italic;
}
.CoolTittle
{
    text-align: center;
    color: #a0a6a9;
    text-shadow: #000000 -5px 7px 0;
    font-size: 85px;
    margin-bottom: -10px;
}
.brickwall
{
    background-image: url(/images/brickwall.png);
    color: #909197e6;
}

.characterImage
{
    max-width: 328px;
    max-height: 328px;
}

.col-centered{
    float: none;
    margin: 0 auto;
}
    </style>
    <meta charset="utf-8">
    <title>Initiative</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Hojas de Estilo --}}
    <link rel="stylesheet" href="css/Homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/Homestyle.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <!-- Characters -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/heroic-features.css" rel="stylesheet">
 <!-- Search -->

    {{-- Hojas de Javascript --}}
    <script  src="js/Homeindex.js"></script>
     <!-- Characters -->
     <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Search -->


</head>
<body>
        @section('sidebar')

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
              </ul>
      
              <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                  <li><a href="{{ url('/auth/login') }}">Login</a></li>
                  <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                  </li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      

    @show
    @yield('content')
</body>
</html>