<?php

    session_start();
    if(isset($_SESSION['user'])){
        include("../style_forms/connexion.php");
        include("../header_footer/navbar.php");
        include("../header_footer/head.php")
  ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <style>

      body{
    overflow-x:hidden;
  }
    </style>
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


    <div class="slider_container swiper m-5" >
    <div class="swiper mySwiper">
      <div class="swiper-wrapper style-wrapper">
        <?php
          $req=mysqli_query($con,"SELECT * FROM cours");
          while($test = mysqli_fetch_assoc($req)) {
?>
              <div class="swiper-slide" >

                    <div class="card"  style="width: 18rem; ">
                      <img src="<?=$test['img']?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text"><?=$test['description']?></p>
                      </div>
                    </div>
                    
              </div>
            <?php
          }
        ?>
      </div>
      <div class="swiper-navigation">
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
      </div>
    </div>
        <div class="btn-style-all">
        <a href="courses_user.php" class="btn btn-style mt-4">All courses</a>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
  });
</script>
<?php
        include("../header_footer/footer.php");
 } 
 else{
    header("location:../style_forms/inscription.php");
 }
