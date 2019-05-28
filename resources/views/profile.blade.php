@extends('layouts.app')
        @section('content')
    

  <!-- Page Content -->
  <div class="container">
<style>
.CharacterInfobtn
{
  background-color: #753918;
    border-color: #753918;
}
.UserIconProfile
{
    max-width: 200px;
    max-height: 200px;
    border-radius: 2000px;
    margin-left: 20px;
    margin-top: -60px;
}

.ProfileName
{
text-align: center;
    display: inline-block;
    margin-left: 112px;
    font-size: 100px;
    margin-top: 35px;
}
    
</style>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 brickwall">
        <div style="align-items: inherit;text-align: center;">
        <img class="UserIconProfile" src="/server/profile_pictures/{{$user->avatar}}" alt="" style>
    <h1 class="display-3 DragonText CoolTittle ProfileName">{{$user->name}}</h1>
</div>
    </header>

  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" style="padding-bottom: 0.5rem!important;padding-top: 0.5rem!important;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Initiative 2019</p>
    </div>
    <!-- /.container -->
  </footer>

        @endsection 