<?php
require("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="style/css/style.css">

</head>
<body>
    <div class="row" id="inscri">
        <div class="container col-lg-6 mt-5 mb-5 formulaire">

        <h1 class="text-center" id="titl" >Sign Up</h1>
        <form action="action.php" method="POST" class=" formwi container mt-5 " id="form"  >
            <div class="form-group text-center">
                <label for="name">Username:</label>
                <input type="text" name="username" class="form-control d-block inp" id="name" placeholder="Choose a Username" autocomplete="off">
                <i class="fa-solid fa-circle-check"></i>
                <i class="fa-solid fa-circle-exclamation"></i>
                <small></small>

            </div>
    
             <div class="form-group text-center mt-2">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control d-block" id="email" placeholder="Enter your email" autocomplete="off">
                <div class="awsome"> 
                    <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-circle-exclamation"></i> 
                </div> 
                <small></small>    
            </div> 
         
            <div class="form-group text-center mt-2 input-control">
                <label for="pwd">Password:</label>
                <input type="password" name="pwd" class="form-control  d-block" id="pwd" placeholder="Enter a strong password" autocomplete="off">
                <i class="fa-solid fa-circle-check"></i>
                <i class="fa-solid fa-circle-exclamation"></i>
                <small></small>            
            </div>
    
            <div class="form-group text-center mt-2">
                <label for="confirm">Confirm personnel:</label>
                <input type="password" name="pwd_conf" class="form-control d-block" id="confirm" placeholder="Reenter your password" autocomplete="off">
                <i class="fa-solid fa-circle-check"></i>
                <i class="fa-solid fa-circle-exclamation"></i>
                <small></small>            
            </div>
    
            <div class=" row mt-3">
                <button  type="submit" id="myBtn" name="submit" class="col-5 btn btn-success  btn-block btnn"><i class="fa fa-user-plus" aria-hidden="true"></i>  SIGN UP</button>
                 <a  class="col-5 btn btn-success  btn-block btnn"href="./authentification.php"><i class="fa fa-user" aria-hidden="true"></i>  LOG IN</a>
            </div>
          </form>
    </div>
    <div class="col-lg-6 insc">
            <img src="site/images/signup.png" alt="" style="width: 400px; height:400px"> <br>
            <h7 class="text-center"  id="titl">this is your gateway to the land of coding <br>sign up so you can begin<br> your own journey</h7>          
    </div>

    </div>
        <script src="bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="style/js/script.js"></script>
</body>
</html>