<?php
include("connexion.php");
if(isset($_POST['submit'])){
        $name=$_POST['username'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        $pwd_conf=$_POST['pwd_conf'];

        $pwd_crypt= md5($pwd);
        // $pwd_conf_crypt= md5(md5(sha1(md5($pwd_conf))));

        if(!empty($name) && !empty($email) && !empty($pwd && $pwd==$pwd_conf)){
                $req="INSERT INTO `formulaire` VALUES (NULL,'$name','$email','$pwd_crypt',true)";
                $res=@mysqli_query($con,$req) or die("erreur d'ajouter");
                echo "ajout succes";
                header('Location: authentification.php');
        }
        else{?>

                <script type="text/javascript"> alert("veuillez inserer les champs correctemet");window.location="inscription.php"</script>
                <?php
        }
        }