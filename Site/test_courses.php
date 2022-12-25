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

        <div class="container m-auto w-100">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-4 " >
                        <input type="text" placeholder="Search...">
                        <ul class="buttons">
                                <li class="button-value" onclick="filterProduct('all')"> ALL</li>
                                <li class="button-value" onclick="filterProduct('JS')">JS</li>
                                <li class="button-value" onclick="filterProduct('PHP')">PHP</li>
                                <li class="button-value" onclick="filterProduct('CSS')">CSS</li>
                                <li class="button-value" onclick="filterProduct('HTML')">HTML</li>
                        </ul>
                        <input type="range" min="0" max="100" value="0" oninput="document.getElementById('AfficheRange').textContent=value" />
                        <span id="AfficheRange">0</span>
                </div>
                <div class="row col-9 d-flex text-center justify-content-evenly " id="products"></div>
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
    card.classList.add("col-md-3");
    card.classList.add("col-sm-2");

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
  
  //Search button click
  document.getElementById("search").addEventListener("click", () => {
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