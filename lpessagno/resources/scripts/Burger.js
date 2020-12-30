

var navbar = document.querySelector(".navbar")
var ham = document.querySelector(".ham")
var closenav = document.querySelector(".showClose")
var hashoption = document.querySelector(".hashoption")

ham.addEventListener("click", toggleHamburger)
// toggles hamburger menu in and out when clicking on the hamburger
function toggleHamburger(){
    navbar.classList.toggle("showNav")
  }
  var menuLinks = document.querySelectorAll(".menuLink")
  menuLinks.forEach( 
    function(menuLink) { 
      menuLink.addEventListener("click", toggleHamburger) 
    }
  );  

  hashoption.addEventListener("click" , closeHamburger )
  closenav.addEventListener("click" , closeHamburger )

  function closeHamburger(){
    navbar.classList.remove("showNav");
  }
