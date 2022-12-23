<?php
    session_start();
    if(isset($_SESSION['user'])){
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../style/css/swiper.css">
    <link rel="stylesheet" href="../style/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="home_user.php">
                <img src="images/logo_emsi.png" alt="" width="200" height="45">
              </a>
                 <!-- Fach kansaghro la fenetre wla f telephone ghadi tla3 dik l3iba dyal l menu f jenb -->
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        
                  <!-- ****************************************** -->
           <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-center ms-5 ">
              <li class="nav-item">
                <a class="nav-link active mb-2" aria-current="page" href="home_user.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-2" href="courses_user.php">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-2" href="#about">About</a>
              </li>
                <!-- this only shows when the admin logs in -->
              <?php
                if(isset($_SESSION['admin'])){
                    ?>
              <li class="nav-item">
                <a class="nav-link mb-2" href="ajouter_cours.php">ajouter un cours</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link mb-2" href="deconnexion.php">deconnexion</a>
              </li>
                    <?php
                }
              ?>
               <!-- ************* -->
            </ul>
          </div>
        </div>
      </nav>

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
                <a href="courses_user.php" type="button" class="btn btn-danger">all courses</a>

            </div>
        </div>


        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>


    <footer style="text-align: center"> Copyright &copy; <script>document.write(new Date().getFullYear())</script> SAFAA BATRAHI & WIAM ELFARD</footer>

      <script src="../bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
      <script src="../bootstrap/bootstrap-5.0.2-dist/js/"></script>
      <script src="../style/js/swiper.js"></script>
      <script src="../style/js/script_swiper_index.js"></script>
</body>
</html>
<?php
 } 
 else{
    header("location:../inscription.php");
 }
