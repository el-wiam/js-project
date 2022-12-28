<?php

include("connexion.php");
if(isset($_POST['submit'])){
                $name=$_POST['con_user'];
                $con_pwd=$_POST['con_pass'];
                $con_pwd_crypt= md5($con_pwd);
                if(!empty($name) && !empty($con_pwd)){
                    $req="";
                        if(preg_match("/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$name)){
                                $req="SELECT * FROM `formulaire` WHERE `email`='$name' AND `password`='$con_pwd_crypt'";
                        }
                        else{
                                $req="SELECT * FROM `formulaire` WHERE `username`='$name' AND `password`='$con_pwd_crypt'";
                        }
                 $res=@mysqli_query($con,$req) or die("erreur connexion");
                if(!empty($row = mysqli_fetch_assoc($res))) {
                    session_start();
                    $_SESSION['user']=true;
                    $_SESSION['username']=$row['username'];
                        if($row['admin']==true){
                            $_SESSION['admin'] = true;
                        }
                        header("location:site/home_user.php");
                    }
                    else{
                        header("location:inscription.php");
                    }
                    

                }
                }