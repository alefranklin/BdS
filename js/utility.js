function toggleMenu() {
    var menu = document.getElementById("actual_menu");
    if (menu.className === "topnav" || menu.className === "topnav hideMenu") {
        menu.className = "topnav showMenu";
    } else {
        menu.className = "topnav hideMenu";
    }
}