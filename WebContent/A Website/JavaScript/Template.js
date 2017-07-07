/*cannot use php for responsive websites
 * used to detect screen width and height for responsive websites
 * log for debugger
 */
screenWidth = window.screen.width, screenHeight = window.screen.height;
console.log(screenWidth);
console.log(screenHeight);

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {hasScrolled();
        didScroll = false;}
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.header div').removeClass('nav-down').addClass('header');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.header div').removeClass('header').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}

$(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('.header').fadeOut();
     }
    else
     {
      $('.header').fadeIn();
     }
 });
/*
 * Long form of the Below Function function ResponsiveNav() { var x =
 * document.getElementById("MyTopNav"); // Cannot Select Class Only By Id
 * x.className += " Responsive" // adding additonal class to an element if
 * (x.className === "TopNav Responsive") { // triple equal to prevent type
 * change x.className = "TopNav Responsive"; } else { x.className = "TopNav"; //
 * to return back to original element } }
 */
// function to open dropdown and return to original element
function ResponsiveNav() {
	var x = document.getElementById("MyTopNav");
	if (x.className === "TopNav") {
		x.className += " Responsive";
	} else {
		x.className = "TopNav";
	}
}