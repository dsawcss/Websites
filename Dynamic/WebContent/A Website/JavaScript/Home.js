/*
  Long form of the Below Function
  function ResponsiveNav() {
  var x = document.getElementById("MyNavBar"); // Cannot Select Class Only By Id
  x.className += " responsive" // adding additonal class to an element
  if (x.className === "NavBar responsive") { // triple equal to prevent type change
      x.className = "NavBar responsive";   
  } else {
      x.className = "NavBar";
      }
}
*/

//short form of the function
function ResponsiveNav() {
  var x = document.getElementById("MyNavBar");
  if (x.className === "NavBar") {
      x.className += " responsive"; 
  } else {
      x.className = "NavBar";
      }
}

