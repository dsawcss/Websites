function myFunction() {
    var x = document.getElementById("MyNavBar");
    if (x.className === "NavBar") {
        x.className += " responsive";
    } else {
        x.className = "NavBar";
    }
}