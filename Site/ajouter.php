<?php
include("../connexion.php");
if(isset($_POST['submit'])){
    $description=$_POST['description'];
    $price=$_POST['price'];
    $categories_select=$_POST['categories'];
    $img=$_FILES['img']['name'];
    $upload='images/courses_ajout/'.$img;
    move_uploaded_file($_FILES['img']['tmp_name'],$upload);
    // $_FILES['userfile']['tmp_name'] Le nom de fichier temporaire du fichier dans lequel le fichier téléchargé a été stocké sur le serveur.

    $req="INSERT INTO cours VALUES (NULL,'$categories_select','$description',$price,'$upload')";

    $res=mysqli_query($con,$req);

    if($res ){
        // if(!empty($img) && !empty($description) && !empty($categories_select) && !empty($price))
        // header("location:ajouter_cours.php");
    echo $upload;

        // $_SESSION['status']='inserted succesful';
    }
    else{
        echo "erreur";
        // header("location:google.com");
        
        // <script type="text/javascript"> alert("erreur d'ajout");window.location="ajouter_cours.php"; <script/>
        
        // $_SESSION['status']="not inserted";
    }
}
?>