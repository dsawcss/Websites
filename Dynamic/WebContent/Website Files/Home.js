function myFunction() {
  var x = document.getElemntById("myNavBar");
  if (x.className === "NavBar") {
      x.className +=" responsive";
  } else {
      x.className = "NavBar";}
}
