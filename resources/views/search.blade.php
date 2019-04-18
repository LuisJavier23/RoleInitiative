@extends('layouts.app')

        @section('content')


    <!-- ##### Archive List Posts Area Start ##### -->

    
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <link rel="stylesheet" href="css/style.css">
   
    <div class="vizew-archive-list-posts-area mb-80" style="margin-top: 30px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Archive Catagory & View Options -->
                    <div class="archive-catagory-view mb-0 d-flex align-items-center justify-content-between">
                        <!-- Catagory -->
                        <div class="archive-catagory">
                            <h4><i class="fa fa-music DragonText" aria-hidden="true"></i>Campain</h4>
                        </div>
                        <!-- View Options -->
                        <div class="view-options">
                         
                        </div>
                    </div>



                    <!-- Single Post Area -->
                    <div class="single-post-area style-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="images/campaing_art.jpg" alt="" style="max-width: 340px;max-height: 180px;">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Post Content -->
                                <div class="post-content mt-0">
                                    <a href="#" class="post-cata cata-sm cata-danger">Dungeons and Dragons</a>
                                    <a href="single-post.html" class="post-title mb-2">Adventure Time</a>
                                    <div class="post-meta d-flex align-items-center mb-2">
                                        <a href="#" class="post-author">By Dungeon Master</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">Sep 08, 2018</a>
                                    </div>
                                    <p class="mb-2">Interesting stuff about yout campain</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-post-area style-2">
                      <div class="row align-items-center">
                          <div class="col-12 col-md-6">
                              <!-- Post Thumbnail -->
                              <div class="post-thumbnail">
                                  <img src="images/campaing_art.jpg" alt="" style="max-width: 340px;max-height: 180px;">
                              </div>
                          </div>
                          <div class="col-12 col-md-6">
                              <!-- Post Content -->
                              <div class="post-content mt-0">
                                  <a href="#" class="post-cata cata-sm cata-danger">Dungeons and Dragons</a>
                                  <a href="single-post.html" class="post-title mb-2">Adventure Time</a>
                                  <div class="post-meta d-flex align-items-center mb-2">
                                      <a href="#" class="post-author">By Dungeon Master</a>
                                      <i class="fa fa-circle" aria-hidden="true"></i>
                                      <a href="#" class="post-date">Sep 08, 2018</a>
                                  </div>
                                  <p class="mb-2">Interesting stuff about yout campain</p>
                              </div>
                          </div>
                      </div>
                  </div>
                         

                    <!-- Pagination -->
                    <nav class="mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>  
                        </ul>
                    </nav>
                </div>



        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                 
                </div>
            </div>
        </div>
    </footer>

        @endsection 