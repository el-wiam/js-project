<!DOCTYPE html>
<html lang="en">
<?php
    include("../header_footer/head.php");
?>
<body>
<div class="row" id="inscri">
        <div class="col-lg-6 insc">
        <h1 class="titl" >Hello , Stranger !</h1><br>
                <h6 class="titl">To get started with the adventure of coding <br> Enter your personal details and <br>  start your journey with us</h6><br>
                <a  class="col-5 btn  btn-block btnnl"href="./inscription.php">Sign UP</a> 
        </div> 
         <div class="container col-lg-6 mt-5 mb-5 formulaire">
            <h1 class="text-center titl" >Log In</h1>
            <form action="action_con.php" method="post" class=" formwi container mt-5 " id="form"  >
                <div class="form-group text-center">
                    <label for="name" class="titl">Username:</label>
                    <input type="text"  name="con_user" class="form-control d-block inp" id="name" placeholder="enter your Username/email" autocomplete="off">
                    <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <small></small>

                </div>
                <div class="form-group text-center mt-2 input-control">
                    <label for="pwd" class="titl">Password:</label>
                    <input type="password" name="con_pass" class="form-control  d-block" id="pwd" placeholder="Enter a strong password" autocomplete="off">
                    <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <small></small>            
                </div>
    
                <div class=" row mt-3">
                    <button  type="submit" id="myBtn" name="submit" class="col-5 btn btn-success  btn-block btnn" href="./authentification.php"> LOG IN</button>
                </div>
            </form>
        </div>
</body>
</html>