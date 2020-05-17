$(document).ready(function() { 

  $("button.hamburger").on("click", function(e){
      e.preventDefault();
      for(i=0; i<$(".menu").length; i++) {
        $(".menu").eq(i).toggleClass("hidden");
    }        
    });
});