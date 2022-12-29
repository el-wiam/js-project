

<nav class="navbar navbar-expand-lg navbar-light bg-light row">
        <div class="container-fluid">
            <a class=" col-4 navbar-brand ms-5" href="home_user.php">
                <h6 class="titl">  Welcome back  <?= $_SESSION['username']?></h6>
              </a>
                 <!-- Fach kansaghro la fenetre wla f telephone ghadi tla3 dik l3iba dyal l menu f jenb -->
                 <button class=" col-1 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        
                  <!-- ****************************************** -->
           <div class=" col-6 collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-center ms-5 ">
              <li class="nav-item " id="itemstyl">
                <a id="itemstyl" class="nav-link active " aria-current="page" href="home_user.php">Home</a>
              </li>
              <li class="nav-item" >
                <a id="itemstyl" class="nav-link " href="courses_user.php">Courses</a>
              </li>
              <li class="nav-item  " >
                <a id="itemstyl" class="nav-link " href="#about">About</a>
              </li>
              <li class="nav-item  " >
                <a id="itemstyl" class="nav-link " href="deconnexion.php">deconnexion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>