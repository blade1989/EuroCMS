
// nicescroll
  $(document).ready(
    function() {  
      $("html").niceScroll();
    }
  );

// Replace broken images
    function imgError(image) {
        image.onerror = "";
        image.src = "/images/noimage.gif";
        return true;
    }
    <img src="image.png" onerror="imgError(this);"/>
