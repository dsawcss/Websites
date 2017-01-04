/*
  Long form of the Below Function
  function ResponsiveNav() {
  var x = document.getElementById("MyTopNav"); // Cannot Select Class Only By Id
  x.className += " Responsive" // adding additonal class to an element
  if (x.className === "TopNav Responsive") { // triple equal to prevent type change
      x.className = "TopNav Responsive";   
  } else {
      x.className = "TopNav";
      }
}
*/

//function to open dropdown and return to original popsition
function ResponsiveNav() {
  var x = document.getElementById("MyTopNav");
  if (x.className === "TopNav") {
      x.className += " Responsive"; 
  } else {
      x.className = "TopNav";
      }
}

