$(document).ready(function(){
  $("input[type=radio]#dark").click(function(){
    $("body,html").css("background-color","#454545");
  });
});

$(document).ready(function(){
  $("input[type=radio]#blue").click(function(){
    $("body,html").css("background-color","#3F4C6B");
  });
});

/* Auto color */
$(document).ready(function(){
  $("input[type=color]#autocolor").click(function(){
    $("body,html").css("background-color","[type=color]");
  });
});

$(document).ready(function(){
  $("input[type=radio]#twaalf").click(function(){
    $("p").css("font-size","12px");
  });
});

$(document).ready(function(){
  $("input[type=radio]#vijf").click(function(){
    $("p").css("font-size","15px");
  });
});

$(document).ready(function(){
  $("input[type=radio]#paars").click(function(){
    $("p").css("color","#FF1FFF");
  });
});

$(document).ready(function(){
  $("input[type=radio]#black").click(function(){
    $("p").css("color","#000000");
  });
});

$(document).ready(function(){
  $("input[type=radio]#mblack").click(function(){
    $("html,body").css({"background-image":"url('http://images.psxextreme.com/wallpapers/ps3/haunted_mansion_536.jpg')","background-repeat":"no-repeat","background-size":"cover"});
  });
});

$(document).ready(function(){
  $("input[type=radio]#nature").click(function(){
    $("html,body").css({"background-image":"url('http://graphichorizon.net/wp-content/uploads/2012/03/Spring-Evening-Wallpaper.jpg')","background-repeat":"no-repeat","background-size":"cover"});
    });
});

// Testing. But really am just having fun.

// EuroBytes

$(document).ready(function(){
  $("input[type=radio]#Original").click(function(){
    $("link[href='minimal.css']").attr('href', 'http://www.eurobytes.nl/css/class.css');
  });
});


// The w3schools Theme

// $(document).ready(function(){
//   $("input[type=radio]#ws").click(function(){
//     $("link[href='http://www.eurobytes.nl/css/class.css']").attr('href', 'http://www.w3schools.com/stdtheme.css');
//   });
// });



// The Vabytes Theme
$(document).ready(function(){
  $("input[type=radio]#Minimal").click(function(){
    $("link[href='http://www.eurobytes.nl/css/class.css']").attr('href', 'minimal.css');
  });
});

// Source: http://stackoverflow.com/questions/179713/how-to-change-the-href-for-a-hyperlink-using-jquery


$(function() {
   var links = $('input[type=radio].link').click(function() {
       links.removeClass('active');
       $(this).addClass('active');
   });
});

//http://stackoverflow.com/questions/5751329/change-css-link-property-onclick-with-javascript-jquery