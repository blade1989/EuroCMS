// nicescroll
$(document).ready(
    function() {
        $("html").niceScroll();
    }
);

// Replace broken images
$(window).load(function() {
  $('img').each(function() {
    if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
      // image was broken, replace with your new image
      this.src = 'noimage.jpg';
    }
  });
});
