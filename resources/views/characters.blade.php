@extends('layouts.app')
        @section('content')
    

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 brickwall">
      <h1 class="display-3 DragonText CoolTittle" style="text-align: center;">Your Characters</h1>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top characterImage" src="/images/fjord.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Fjord</h4>
            <p class="card-text">Mysterious  Backstory Stuff</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Character Info</a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top characterImage" src="/images/caleb.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Caleb Widogast</h4>
            <p class="card-text">Sad Backstory Stuff</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Character Info</a>
          </div>
        </div>
      </div>

      
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top characterImage" src="/images/nott.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Nott "The Brave"</h4>
            <p class="card-text"> WTF!! Backstory Stuff</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Character Info</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Initiative 2019</p>
    </div>
    <!-- /.container -->
  </footer>

        @endsection 