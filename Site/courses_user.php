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
      <div class="col-lg-4 " id="search-container">
          <input type="search" id="search-input" placeholder="Search.."/>

        <ul class="items-body-content">
          <li class="fa fa-angle-right" onclick="filterProduct('all')"> ALL</li>
          <li class="fa fa-angle-right" onclick="filterProduct('JS')">JS</li>
          <li class="fa fa-angle-right" onclick="filterProduct('PHP')">PHP</li>
          <li class="fa fa-angle-right" onclick="filterProduct('CSS')">CSS</li>
          <li class="fa fa-angle-right" onclick="filterProduct('HTML')">HTML</li>
        </ul>
        <?php
        $res_0 = mysqli_query($con, "SELECT MAX(price) as max FROM `cours`");
        $row=mysqli_fetch_assoc($res_0);
        ?>
        <input type="range" value="24" min="1" max="<?=$row['max']?>" oninput="this.nextElementSibling.value = this.value">
        <output id="value_range">24</output>
      </div>
        <div class="col-lg-8" id="products">          
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
    let d= document.createElement("div");
    let price = document.createElement("h6");
    price.innerText = i.price;
    d.append(price);
    container.appendChild(d);
  
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
    var elements = document.querySelectorAll(".card");
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


  var elem = document.querySelector('input[type="range"]');

var rangeValue = function(){
    var elts = document.querySelectorAll(".card");
  //   console.log(elts);
  elts.forEach((element)=>{
      element.childNodes.forEach((el)=>{
          el.childNodes.forEach((e)=>{
              e.childNodes.forEach((e2)=>{
                  e2.childNodes.forEach((e3)=>{
                      // console.log(e3);
                      if(e3.textContent<elem.value){
                          element.classList.remove("hide_cours");
                      }
                      else{
                          element.classList.add("hide_cours");
                      }
                  });
              })
          })
      })
    });
  }

      elem.addEventListener("input", rangeValue);
  

  window.onload = () => {
    filterProduct("all");
  };
  </script>
  </body>

</html>
<?php
 } 
 else{
    header("location:../inscription.php");
 }