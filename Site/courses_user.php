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
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="">

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
                <a class="nav-link mb-2" href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- *************************************************************************** -->
      <div class="container d-flex mt-5">
            <div class="col-lg-3  mt-2">
              <input class="w-100 mb-3" type="text" placeholder="search..." id="input-search">
                <p class="text-center btn-info">Categories</p>
                <ul class="list-group">
                    <li class="list-group-item">ALL</li>
                    <li class="list-group-item">JS</li>
                    <li class="list-group-item">HTML</li>
                    <li class="list-group-item">CSS</li>
                    <li class="list-group-item">PHP</li>
                  </ul>
                  <p class="text-center btn-info"> PRICE</p>
                  <input type="range" name="" id="range" >
            </div>

            <div class="col-lg-9 d-flex p-style">
                    <div class="col-lg-3 card" style="width: 18rem;">
                        <img src="images/img-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                        <p class="card-text">What is javascript?</p>
                        <span class="span-font ">$9,9</span>
                        </div>
                    </div>
                    <div class="col-lg-3 card" style="width: 18rem;">
                        <img src="images/img-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <p class="card-text">Basics Or HTML</p>
                          <span class="span-font ">$5,9</span>
                          </div>
                    </div>
                    <div class="col-lg-3 card" style="width: 18rem;">
                        <img src="images/img-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <p class="card-text">HTML Elements And Tags</p>
                          <span class="span-font ">$9,9</span>
                          </div>
                    </div>
        </div>


        
    </div>

    <footer style="text-align: center"> Copyright &copy; <script>document.write(new Date().getFullYear())</script> SAFAA BATRAHI</footer>
    </body>
</html>
<?php
 } 
 else{
    header("location:../inscription.php");
 }
