<?php
    session_start();
    if(isset($_SESSION['user'])){
      include("../connexion.php");
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
    <link rel="stylesheet" href="../style/css/cours.css">
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
      <div class="container row">
      <div class="col-lg-4" id="search-container">
      <input
          type="search" id="search-input" placeholder="Search.."/>
        <button id="search">Search</button>
        <ul class="buttons">
          <li class="button-value" onclick="filterProduct('all')"> ALL</li>
          <li class="button-value" onclick="filterProduct('JS')">JS</li>
          <li class="button-value" onclick="filterProduct('PHP')">PHP</li>
          <li class="button-value" onclick="filterProduct('CSS')">CSS</li>
          <li class="button-value" onclick="filterProduct('HTML')">HTML</li>
        </ul>
      </div>
        <div class="col-lg-8" id="products">
          <?php
              $req="SELECT DISTINCT(categorie),price FROM cours";
              $res=mysqli_query($con,$req);
              $array=[];
              while($array=mysqli_fetch_array($res,MYSQLI_ASSOC)){

                // array_push($array,$row);
                print_r($array['categorie']);

              }
            //   while($row = mysqli_fetch_assoc($res)){
            //     $array[] = $row;
            //   }
            //   foreach ($array as $key => $value) {
            //     // $arr[3] sera mis à jour avec chaque valeur de $arr...
            //     echo "{$key} => {$value} ";
            //     var_dump($arr);
            // }
          ?>
          
        </div>
    </div>

    <footer style="text-align: center"> Copyright &copy; <script>document.write(new Date().getFullYear())</script> SAFAA BATRAHI</footer>
  <script src="../style/js/cours.js"></script>  
  </body>
</html>
<?php
 } 
 else{
    header("location:../inscription.php");
 }
