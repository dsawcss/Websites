/*cannot use php for responsive websites
 * used to detect screen width and height for responsive websites
 * log for debugger
 */
screenWidth = window.screen.width,
    screenHeight = window.screen.height;
    console.log(screenWidth);
    console.log(screenHeight);
    /*
    Long form of the Below Function
    function ResponsiveNav() {
    var x = document.getElementById("MyTopNav"); // Cannot Select Class Only By Id
    x.className += " Responsive" // adding additonal class to an element
    if (x.className === "TopNav Responsive") { // triple equal to prevent type change
        x.className = "TopNav Responsive";   
    } else {
        x.className = "TopNav"; // to return back to original element
        }
    }
    */
//function to open dropdown and return to original element
function ResponsiveNav() {
  var x = document.getElementById("MyTopNav");
  if (x.className === "TopNav") {
      x.className += " Responsive"; 
  } else {
      x.className = "TopNav";
  }
}