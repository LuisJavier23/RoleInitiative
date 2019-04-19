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
  <style>/* Add a black background color to the top navigation bar */
        .topnav {
          overflow: hidden;
          background-color: #e9e9e9;
        }
        
        /* Style the links inside the navigation bar */
        .topnav a {
          float: left;
          display: block;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        /* Change the color of links on hover */
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        
        /* Style the "active" element to highlight the current page */
        .topnav a.active {
          background-color: #2196F3;
          color: white;
        }
        
        /* Style the search box inside the navigation bar */
        .topnav input[type=text] {
          float: right;
          padding: 6px;
          border: none;
          margin-top: 8px;
          margin-right: 16px;
          font-size: 17px;
        }
        
        /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
        @media screen and (max-width: 600px) {
          .topnav a, .topnav input[type=text] {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
          }
          .topnav input[type=text] {
            border: 1px solid #ccc;
          }
        }
        
        .textsearchbar
        {
          display: block;
          float: right;
          height: 35px;
          margin: -1px -2px -2px;
          width: 149px;
          margin-right: 45px;
          margin-top: 9px;
        }
        
        .btnsearchbar
        {
        display: block;
        float: right;
        height: 35px;
        width: 41px;
        margin-top: 9px;
        }

        </style>
  
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <div>
          <input type="text" placeholder="Search.." class="textsearchbar">
          <button type="submit" class="btnsearchbar"><i class="fa fa-search"></i></button>
        </div>
      </div>
    @show
    @yield('content')
</body>
</html>