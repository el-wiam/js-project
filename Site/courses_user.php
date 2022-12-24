<?php
    session_start();
    if(isset($_SESSION['user'])){
      include("../connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
  include("head.php");
?>
    <link rel="stylesheet" href="../style/css/cours.css">

<body>
  <?php
  include("navbar.php");
  ?>

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
              <!-- // $req="SELECT * FROM cours";
              // $res=mysqli_query($con,$req);
              
              // while($array=mysqli_fetch_assoc($res)){
              //   print_r($array);
              // }
              // for($i=0;count($array);$i++){
              //   print_r($array[$i]);
              // }
            //   while($row = mysqli_fetch_assoc($res)){
            //     $array[] = $row;
            //   }
            //   foreach ($array as $key => $value) {
            //     // $arr[3] sera mis à jour avec chaque valeur de $arr...
            //     echo "{$key} => {$value} ";
            //     var_dump($arr);
            // } -->
          
          
        </div>
    </div>

  <?php
    include("footer.php");
  ?> 
<script src="../style/js/cours.js"></script> 
  </body>

</html>
<?php
 } 
 else{
    header("location:../inscription.php");
 }
