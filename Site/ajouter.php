<?php
include("../connexion.php");
if(isset($_POST['submit'])){
    $description=$_POST['description'];
    $price=$_POST['price'];
    $categories_select=$_POST['categories'];


    $img=$_FILES['img']['name'];
    $upload='images/courses_ajout/'.$img;
    move_uploaded_file($_FILES['img']['tmp_name'],$upload);

    $req="INSERT INTO cours VALUES (NULL,'$categories_select','$description',$price,'$img')";

    $res=mysqli_query($con,$req);

    if($res){
        echo "image ajouter avec succes";
        $_SESSION['status']='inserted succesful';
        header("location:ajouter_cours.php");
    }
    else{
        echo "erreur ajout image";
        $_SESSION['status']="not inserted";
        header("location:ajouter_cours.php");
    }
}