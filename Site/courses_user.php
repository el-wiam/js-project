<?php
    session_start();
    if(isset($_SESSION['user'])){
      include("../connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
  include("head.php");
?>
    <link rel="stylesheet" href="../style/css/cours.css">

<body>
  <?php
  include("navbar.php");
  ?>

      <!-- *************************************************************************** -->
      <div class="container row">
      <div class="col-lg-4" id="search-container">
      <input
          type="search" id="search-input" placeholder="Search.."/>
        <!-- <button id="search" >Search</button> -->
        <ul class="buttons">
          <li class="button-value" onclick="filterProduct('all')"> ALL</li>
          <li class="button-value" onclick="filterProduct('JS')">JS</li>
          <li class="button-value" onclick="filterProduct('PHP')">PHP</li>
          <li class="button-value" onclick="filterProduct('CSS')">CSS</li>
          <li class="button-value" onclick="filterProduct('HTML')">HTML</li>
        </ul>

        <input type="range" value="24" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
        <output id="value_range">24</output>
      </div>
        <div class="col-lg-8" id="products">
              <!-- // $req="SELECT * FROM cours";
              // $res=mysqli_query($con,$req);
              
              // while($array=mysqli_fetch_assoc($res)){
              //   print_r($array);
              // }
              // for($i=0;count($array);$i++){
              //   print_r($array[$i]);
              // }
            //   while($row = mysqli_fetch_assoc($res)){
            //     $array[] = $row;
            //   }
            //   foreach ($array as $key => $value) {
            //     // $arr[3] sera mis à jour avec chaque valeur de $arr...
            //     echo "{$key} => {$value} ";
            //     var_dump($arr);
            // } -->
          
          
        </div>
    </div>

  <?php
    include("footer.php");

  ?> 
  <script>

let products = {
    data: [
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
    ],
  };
  for (let i of products.data) {
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card", i.category, "hide");
    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.productName.toUpperCase();
    container.appendChild(name);
    //price
    let price = document.createElement("h6");
    price.innerText = "$" + i.price;
    container.appendChild(price);
  
    card.appendChild(container);
    document.getElementById("products").appendChild(card);
  }
  
  //parameter passed from button (Parameter same as category)
  function filterProduct(value) {
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
      //check if value equals innerText
      if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active_cours");
      } else {
        button.classList.remove("active_cours");
      }
    });
  
    //select all cards
    let elements = document.querySelectorAll(".card");
    //loop through all cards
    elements.forEach((element) => {
      //display all cards on 'all' button click
      if (value == "all") {
        element.classList.remove("hide_cours");
      } else {
        //Check if element contains category class
        if (element.classList.contains(value)) {
          //display element based on category
          element.classList.remove("hide_cours");
        } else {
          //hide other elements
          element.classList.add("hide_cours");
        }
      }
    });
  }


  var elem = document.querySelector('input[type="range"]');


  var rangeValue = function(){
      // var elts = document.querySelectorAll(".card");

      elements.forEach((element)=>{
        element.childNodes.forEach((el)=>{
            el.childNodes.forEach((e)=>{
              console.log(e);
                e.childNodes.forEach((e2)=>{
                    if(e2.textContent<elem.value){
                        element.classList.remove("hide_cours");
                    }
                    else{
                        element.classList.add("hide_cours");
                    }
                })
            })
        })
      });
    }

        elem.addEventListener("input", rangeValue);







  
  //Search button click
  document.getElementById("search-input").addEventListener("keyup", () => {
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
  
    //loop through all elements
    elements.forEach((element, index) => {
      //check if text includes the search value
      if (element.innerText.includes(searchInput.toUpperCase())) {
        //display matching card
        cards[index].classList.remove("hide_cours");
      } else {
        //hide others
        cards[index].classList.add("hide_cours");
      }
    });
  });
  
  //Initially display all products
  window.onload = () => {
    filterProduct("all");
  };
  </script>
<!-- <script src="../style/js/cours.js"></script>  -->
  </body>

</html>
<?php
 } 
 else{
    header("location:../inscription.php");
 }