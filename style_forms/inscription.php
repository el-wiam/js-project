<?php
require("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include("../header_footer/head.php");
?>
<body>
            <div class="row" id="inscri">
                <div class="container col-lg-6 mt-5 mb-5 formulaire ">
                    <h1 class="text-center titl" >Sign Up</h1>
                    <form action="action.php" method="POST" class=" formwi container mt-5 " id="form"  >
                        <div class="form-group text-center">
                            <label for="name" class="titl">Username:</label>
                            <input type="text" name="username" class="form-control d-block inp" id="name" placeholder="Choose a Username" autocomplete="off">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <small></small>

                        </div>
                
                        <div class="form-group text-center mt-2">
                            <label for="email" class="titl">Email:</label>
                            <input type="email" name="email" class="form-control d-block" id="email" placeholder="Enter your email" autocomplete="off">
                            <div class="awsome"> 
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i> 
                            </div> 
                            <small></small>    
                        </div> 
                    
                        <div class="form-group text-center mt-2 input-control">
                            <label for="pwd" class="titl">Password:</label>
                            <input type="password" name="pwd" class="form-control  d-block" id="pwd" placeholder="Enter a strong password" autocomplete="off">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <small></small>            
                        </div>
                
                        <div class="form-group text-center mt-2">
                            <label for="confirm" class="titl">Confirm personnel:</label>
                            <input type="password" name="pwd_conf" class="form-control d-block" id="confirm" placeholder="Reenter your password" autocomplete="off">
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <small></small>            
                        </div>
                
                        <div class=" row mt-3">
                            <button  type="submit" id="myBtn " name="submit" class="col-5 btn btn-success btn-block btnn "> Sign UP</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 insc">
                <h1 class="titl" >Welcome Back!</h1><br>
                <h6 class="titl">To keep connected with us please <br> login with your personal info</h6><br>
                <a  class="col-5 btn  btn-block btnnl"href="./authentification.php">Sign IN</a> 
        </div>
    </div>
        <script src="../bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="../style/js/script.js"></script>
</body>
</html>