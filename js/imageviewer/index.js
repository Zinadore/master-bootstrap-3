var openPhotoSwipe = function() {
    var pswpElement = document.querySelectorAll('.pswp')[0];
    var items = [];
    var image_width = 800;
    var image_height = 1024;
    var image_title = "Βλέπετε ένα δείγμα από τις εσωτερικές σελίδες του βιβλίου!";
    // build items array
    book_link_array.forEach(function(item){
        items.push(
            {
                src:"/images/"+item.file,
                w:image_width,
                h:image_height,
                title:image_title
            });
    });
    
    // define options (if needed)
    var options = {
		// history & focus options are disabled on CodePen        
      	history: false,
      	focus: false,
		mouseUsed: false,
		loop: false,
		pinchToClose: false,
		closeOnScroll: false,
		closeOnVerticalDrag: false,

        showAnimationDuration: 0,
        hideAnimationDuration: 0
    };
    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
};
//openPhotoSwipe();
jQuery(function() {
    jQuery('#btn').on('click', function() {
        openPhotoSwipe();
    });
});