function nextImage(){
  var total = document.getElementById("masthead").dataset.total;
  var current = document.getElementById("masthead").style.backgroundImage.charAt(18);

  if(current == ""){
    current = 1;
  }
  else if(current == total){
    current = 0;
  }

  document.getElementById("masthead").style.backgroundImage = "url('./img/header/" + (+current+1) + ".jpg')";
}

document.getElementById("next-image").addEventListener("click", nextImage);
