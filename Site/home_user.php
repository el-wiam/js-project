<?php
    session_start();
    if(isset($_SESSION['user'])){
        
  include("../header_footer/navbar.php");
  ?>

      <div class="card text-center test">
        <div class="card-body test-filter">
            <div class="card-body block">
              <h2 class="card-title">Eat(), Sleep(), Code(), Repeat()</h2>
              <h4 class="card-text pt-4">While You Are Alive</h4>
              <a href="courses_user.php" class="btn btn-style mt-4">COURSES LIST</a>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="cours">
        <h1 class="text-center"> <span id="slash">/</span> Courses</h1>
    </div>


    <div class="container swiper mb-5" id="about">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/laptop.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <!-- <h2 class="name">David Dell</h2> -->
                        <p class="description">HTML Attributes And Values</p>

                        <span class="span-font">$19.9</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/img-1.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <!-- <h2 class="name">David Dell</h2> -->
                        <p class="description">Manipulating Crud Using Php</p>

                        <span class="span-font">$45.9</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/img-3.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <!-- <h2 class="name">David Dell</h2> -->
                        <p class="description">CSS Selectors</p>

                        <span class="span-font">$69.9</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/img-4.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <!-- <h2 class="name">David Dell</h2> -->
                        <p class="description">JS Coding DOM</p>

                        <span class="span-font">$45.9</span>
                    </div>
                </div>
               
            </div>
            </div>
            <div class="btn-style-all">
                <a href="courses_user.php" type="button" class="btn ">all courses</a>

            </div>
        </div>


        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>


      <?php
        include("../header_footer/footer.php");
 } 
 else{
    header("location:../inscription.php");
 }
