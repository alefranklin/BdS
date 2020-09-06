function toggleMenu() {
    var menu = document.getElementById("actual_menu");
    if (menu.className === "topnav" || menu.className === "topnav hideMenu") {
        menu.className = "topnav showMenu";
    } else {
        menu.className = "topnav hideMenu";
    }
}

function toggleAccessibilityTop() {
    var div = document.getElementById("salta-menu");
    if(div.className === "accessibility-hide") div.className = "accessibility-show";
    else                                       div.className = "accessibility-hide"
  }
  
  function toggleAccessibilityBottom() {
    var div = document.getElementById("torna-menu");
    if(div.className === "accessibility-hide") div.className = "accessibility-show";
    else                                       div.className = "accessibility-hide"
  }