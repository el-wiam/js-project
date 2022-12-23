<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="style/css/styl.css">
    <title>LOG IN </title>
</head>
<body>
<div class="row" id="inscri">
         <div class="container col-lg-6 mt-5 mb-5 formulaire">
            <h1 class="text-center" id="titl" >Log In</h1>
            <form action="action_con.php" method="post" class=" formwi container mt-5 " id="form"  >
                <div class="form-group text-center">
                    <label for="name">Username:</label>
                    <input type="text"  name="con_user" class="form-control d-block inp" id="name" placeholder="enter your Username/email" autocomplete="off">
                    <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <small></small>

                </div>
                <div class="form-group text-center mt-2 input-control">
                    <label for="pwd">Password:</label>
                    <input type="password" name="con_pass" class="form-control  d-block" id="pwd" placeholder="Enter a strong password" autocomplete="off">
                    <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <small></small>            
                </div>
    
                <div class=" row mt-3">
                    <button  type="submit" id="myBtn" name="submit" class="col-5 btn btn-success  btn-block btnn"><i class="fa fa-user" aria-hidden="true"></i>  LOG IN</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6 insc">
                <img src="site/images/signup.png" alt="" style="width:80%; height:80%"> <br>
        </div> 
        <footer style="text-align: center ; background-color:transparent;"> Copyright &copy; <script>document.write(new Date().getFullYear())</script> SAFAA BATRAHI & WIAM ELFARD</footer>
</div>
    <!-- <form action="action_con.php" method="post">
        <input type="text" name="con_user">
        <input type="password" name="con_pass">
        <input type="submit" name="submit">
</form> -->
</body>
</html>