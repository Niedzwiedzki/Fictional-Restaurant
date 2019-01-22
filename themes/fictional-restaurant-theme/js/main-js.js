var hamburger = document.getElementById('hamburger')
var dropdown = document.getElementById('dropdown-content')
hamburger.addEventListener('click', function(){
  if(dropdown.classList.contains("hide")){
    dropdown.classList.remove("hide");
  } else {
    dropdown.classList.add("hide");
  }
})


var wineImages = document.querySelectorAll(".wine_container");
var leftArrow = document.querySelector(".left_arrow");
var rightArrow = document.querySelector(".right_arrow");
var index = 0;

leftArrow.addEventListener('click', function(){
  wineImages[index].classList.add("hide");
  if(index > 0){
    index--;
  } else {
    index = wineImages.length-1;
  }
  wineImages[index].classList.remove("hide");
})


rightArrow.addEventListener('click', function(){
  wineImages[index].classList.add("hide");
  if(index < wineImages.length-1){
    index++;
  } else {
    index = 0;
  }
  wineImages[index].classList.remove("hide");
})
