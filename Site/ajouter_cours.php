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
    <title>ajouter un cours</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../swiper.css">

    <link rel="stylesheet" href="../style.css">
</head>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="home_user.php">
                <img src="images/logo_emsi.png" alt="" width="200" height="45">
              </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav text-center ms-5 ">
                    <li class="nav-item">
                      <a class="nav-link active mb-2" aria-current="page" href="home_user.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mb-2" href="courses_user.php">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mb-2" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mb-2" href="ajouter_cours.php">ajouter un cours</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link mb-2" href="deconnexion.php">deconnexion</a>
                    </li>
              </ul>
            </div>
        </div>
      </nav>
    <form action="ajouter.php" method="post" enctype="multipart/form-data">
        image:
        <input type="file" name="img">
        description:
        <input type="text" name="description">
        categories:
        <label for="categories">Categori</label>
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