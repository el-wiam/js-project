function filterProduct(value){
    let buttons = document.querySelectorAll(".button-value");

    buttons.forEach((button) => {
        if(value.toUpperCase() == button.innerText.toUpperCase()){
            button.classList.add("active");
        }
        else{
            button.classList.remove("active");
        }
    })
     
}