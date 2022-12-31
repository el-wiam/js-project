<?php

    session_start();
    if(isset($_SESSION['user'])){
        include("../style_forms/connexion.php");
        include("../header_footer/navbar.php");
  ?>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>


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

    <div class="slider_container swiper mb-5" >
        <div id="about"> </div>
        <div class="btn-style-all">
            <a href="courses_user.php" type="button" class="btn ">all courses</a>
        </div>
    </div>
    <script>
        let products = {
    data: [
      <?php
        $req=mysqli_query($con,"SELECT * FROM cours");
        while($test = mysqli_fetch_assoc($req)) {
            echo ("{
              productName: \"" . $test['description'] . "\",
              category: \"" . strtoupper($test['categorie']) . "\",
              price: \"" . $test['price'] . "\",
              image: \"" . $test['img'] . "\",
            },");
          }
            ?>
    ],
};
var slide = document.createElement("div");
slide.classList.add("container");

let card_wrapper=document.createElement("div");
    card_wrapper.classList.add("swiper","card_slider");
    slide.append(card_wrapper);

    let swiper_wraper = document.createElement("div");
    swiper_wraper.classList.add("swiper_wrapper");
    card_wrapper.append(swiper_wraper);

for (let i of products.data) {
    //console.log(i.productName)
    //Create Card
    
    //Card should have category and should stay hidden initially
    //
    //console.log(i.category);


    let swiper_slide = document.createElement("div");
    swiper_slide.classList.add("swiper-slide");


    let image_content=document.createElement("div");
    image_content.classList.add("image-content");

    let overlay=document.createElement("span");
    // overlay.classList.add("overlay");

    let card_img=document.createElement("div");
    card_img.classList.add("card-image");

    let img=document.createElement("img");
    img.classList.add("card-img")
    img.setAttribute("src",i.image);

    let card_content=document.createElement("div");
    card_content.classList.add("card-content");

    let description=document.createElement("p");
    description.classList.add("description");
    description.innerText = i.productName;
    
    let span=document.createElement("span");
    span.classList.add("span-font");
    span.innerText = i.price;


    card_content.appendChild(span);
    card_content.appendChild(description);
    card_img.appendChild(img);

    image_content.appendChild(card_img);
    image_content.appendChild(overlay);

    swiper_slide.appendChild(image_content);
    swiper_slide.appendChild(card_content);
    
    card_wrapper.appendChild(swiper_slide)

    slide.appendChild(card_wrapper);
  }
  
  document.getElementById("about").append(slide);
// console.log( document.getElementById("about"));

  let next = document.createElement("div");
  next.classList.add("swiper-button-next","swiper-navBtn");
  let prev = document.createElement("div");
  prev.classList.add("swiper-button-prev","swiper-navBtn");

  document.getElementById("about").append(next);
  document.getElementById("about").append(prev);

    
</script>

<!-- <div class="swiper-button-next swiper-navBtn"></div>
<div class="swiper-button-prev swiper-navBtn"></div> -->

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper("#about", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
<?php
        include("../header_footer/footer.php");
 } 
 else{
    header("location:../style_forms/inscription.php");
 }
