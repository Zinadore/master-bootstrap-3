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