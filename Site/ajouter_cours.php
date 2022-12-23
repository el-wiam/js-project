<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../swiper.css">

    <link rel="stylesheet" href="../style.css">
</head>
</head>
<body>
    <form action="ajouter.php" method="post" enctype="multipart/form-data">
        img: 
        <input type="file" name="img">
        description:
        <input type="text" name="description">
        categories:
        <label for="categories">Categories</label>
            <select name="categories">
                <option value="HTML">HTML</option>
                <option value="PHP">PHP</option>
                <option value="CSS">CSS</option>
                <option value="JS">JS</option>
                <option value="JQUERY">JQUERY</option>
            </select>
            prices:
        <input type="number" name="price">
        <input type="submit" value="ajouter" name="submit">
    </form>
</body>
</html>