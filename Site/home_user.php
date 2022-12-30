<?php

    session_start();
    if(isset($_SESSION['user'])){
        include("../connexion.php");
        include("../header_footer/navbar.php");
  ?>

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

    <div class="container swiper mb-5" id="about">
        <!-- <div id="test"> </div> -->
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
for (let i of products.data) {
    //console.log(i.productName)
    //Create Card
    let slide = document.createElement("div");
    //Card should have category and should stay hidden initially
    slide.classList.add("slide-content", i.category);

    let card_wrapper=document.createElement("div");
    card_wrapper.classList.add("card-wrapper","swiper-wrapper");

    let swiper_slide = document.createElement("div");
    swiper_slide.classList.add("swiper-slide");

    let image_content=document.createElement("div");
    image_content.classList.add("image-content");

    let overlay=document.createElement("span");
    overlay.classList.add("overlay");

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

    document.getElementById("about").appendChild(slide);

  }
console.log( document.getElementById("about"));
    
</script>


<?php
        include("../header_footer/footer.php");
 } 
 else{
    header("location:../inscription.php");
 }
