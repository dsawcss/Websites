function myFunction() {
  var x = document.getElemntById("HomeNavBar")
  if (x.className === "NavBar") {
      x.className +=" responsive";
  } else {
      x.className = "NavBar";}
}
