const navs = document.querySelectorAll(".nav-links");

for (let i = 0; i < navs.length; i++) {
  navs[i].addEventListener("click", zamjeniActive);
}

function zamjeniActive(e) {
  let trenutni = document.querySelectorAll(".active");
  trenutni[0].className = trenutni[0].className.replace(" active", "");
  this.className += " active";
}

function otvoriNav() {
  var visina = document.getElementsByClassName("grid-container")[0];
  let x = document.getElementById("mynav");
  if (x.className === "topnav") 
  {
    x.className += " responsive";
    visina.style.height = "100%";
  } 
  else 
  {
    x.className = "topnav";
    visina.style.height = "70px";
  }
}

function otvoriPop() {
  const popup = document.getElementById("poptxt1");
  popup.classList.toggle("show");
}

function otvoriPop2() {
  const popup = document.getElementById("poptxt2");
  popup.classList.toggle("show");
}

jQuery(document).ready(function(){			
  jQuery("#gallery").unitegallery({
      gallery_theme: "tiles"
      });
  });