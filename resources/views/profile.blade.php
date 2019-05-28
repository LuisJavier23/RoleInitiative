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
</style>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 brickwall">
        <div>
            <img class="UserIcon" src="/images/default.jpg" alt="">
    <h1 class="display-3 DragonText CoolTittle" style="text-align: center;">{{$user->name}}</h1>
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