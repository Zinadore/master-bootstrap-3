var toggleSidenav = function () {
    jQuery(".wrapper").toggleClass("toggled");
    jQuery("body").toggleClass("noscroll");
    jQuery("#sidenav-overlay").toggleClass("hidden-animated");	
}

jQuery("#menu-toggle").click(function(e) {
	toggleSidenav();
 });

 jQuery('.sidebar-dropdown-toggle').on('click', function () {
   var toggle = jQuery(this);
  
   toggle.siblings('.sidebar-dropdown-menu').first().toggleClass('open');
 });

jQuery('#sidenav-overlay').on('click' , function () {
	toggleSidenav();
});



// jQuery(".drag-target").hammer({
// prevent_default: false
// }).bind('pan', function(e) {
// 	console.log(e);
// });
var dragTarget = new Hammer(document.getElementById("drag-target"));
dragTarget.on("panend", function(ev) {
    if (ev.direction == 4) {
    	toggleSidenav();
    }
});

var overlay = new Hammer(document.getElementById("sidenav-overlay"));
overlay.on("panend", function(ev) {
	if (ev.direction == 2) {
		toggleSidenav();
	}
});