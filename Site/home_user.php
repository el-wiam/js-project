<?php

    session_start();
    if(isset($_SESSION['user'])){
        include("../style_forms/connexion.php");
        include("../header_footer/navbar.php");
        include("../header_footer/head.php")
  ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <style>

      body{
    overflow-x:hidden;
  }
    </style>
      <div class="card text-center test">
        <div class="card-body test-filter">
            <div class="card-body block">
              <h2 class="card-title">Eat(), Sleep(), Code(), Repeat()</h2>
              <h4 class="card-text pt-4">While You Are Alive</h4>
              <a href="courses_user.php" class="btn btn-style mt-4">COURSES LIST</a>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="cours">
        <h1 class="text-center"> <span id="slash">/</span> Courses</h1>
    </div>

    <!-- <div class="container row " >
    <div class="col d-flex" id="WS">

    </div>
    </div> -->


    <div id="ws"></div>

    <script>
      let products = [
   
      <?php
        $req = "select * from cours";
        $res = mysqli_query($con, $req);
          while ($row = mysqli_fetch_assoc($res)) {
            echo ("{
              productName: \"" . $row['description'] . "\",
              category: \"" . strtoupper($row['categorie']) . "\",
              price: \"" . $row['price'] . "\",
              image: \"" . $row['img'] . "\",
            },");
          }
  ?> 
    
        ];

        console.log(products);
  // console.log(products.floor[Math.random()*products.length]);
  console.log(products[Math.floor(Math.random()*products.length)]);
  var c=[
    products[Math.floor(Math.random()*products.length)],
    products[Math.floor(Math.random()*products.length)],
    products[Math.floor(Math.random()*products.length)]
  ];

  while(c[0]==c[1]){
    c[1]=products[Math.floor(Math.random()*products.length)];
  }
  while(c[1]==c[2]){
    c[1]=products[Math.floor(Math.random()*products.length)];
  }
  while(c[2]==c[0]){
    c[1]=products[Math.floor(Math.random()*products.length)];
  }

  let i;
  
  for(i=0;i<3;i++){
    // console.log(c[i].productName);

    let card = document.createElement("div");
    card.classList.add("card");

    let img = document.createElement("img");
    img.classList.add("card-img-top","img-modi");
    img.src=c[i].image;

    let div_p = document.createElement("div");
    div_p.classList.add("card-body");

    let para = document.createElement("p");
    para.classList.add("card-text");
    para.innerText = c[i].productName;

    div_p.appendChild(para);
    card.append(img);
    card.append(div_p);

   
    document.getElementById("ws").append(card);
  }

  // var c=[products.data.floor(Math.random()*products.data.length),]
    </script>



























   
<?php
        include("../header_footer/footer.php");
 } 
 else{
    header("location:../style_forms/inscription.php");
 }
