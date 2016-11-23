var $wrapper = jQuery(".wrapper")
var $body = jQuery("body")
var $sidenavOverlay = jQuery("#sidenav-overlay")

var toggleSidenav = function () {
    $wrapper.toggleClass("toggled");
    $body.toggleClass("noscroll");
    $sidenavOverlay.toggleClass("hidden-animated");	
}

jQuery("#menu-toggle").click(function(e) {
	toggleSidenav();
 });

jQuery('.sidebar-dropdown-toggle').on('click', function () {
	var toggle = jQuery(this);
	toggle.siblings('.sidebar-dropdown-menu').first().toggleClass('open');
});

$sidenavOverlay.on('click' , function () {
	toggleSidenav();
});


// Touch events
//var dragTarget = new Hammer(document.getElementById("drag-target"));
var dragTarget = new Hammer.Manager(document.getElementById("drag-target"));
dragTarget.add( new Hammer.Pan({ threshold: 200 }) );
dragTarget.on("panend", function(ev) {
    if (ev.direction == 4) {
    	toggleSidenav();	
    }
});

//var overlay = new Hammer(document.getElementById("sidenav-overlay"));
var overlay = new Hammer.Manager(document.getElementById("sidenav-overlay"));
overlay.add( new Hammer.Pan({ threshold: 60 }) );
overlay.on("panend", function(ev) {
	if (ev.direction == 2) {
		toggleSidenav();
	}
});

