$(document).ready(function() { 

    $("#loginForm").on("submit", validate);
    $("#registerForm").on("submit", validate);

});

//get all p with warning class
//toggle p's hidden class to display
function validate(e) {

    for(i=0; i<$(".to-validate").length; i++) {
        if($.trim($(".to-validate").eq(i).val()) == "") {
            e.preventDefault();
            $("p.warning").eq(i).removeClass("hidden");
            $(".to-validate").eq(i).addClass("border-red-500");
        } else {
            $("p.warning").eq(i).addClass("hidden");
            $(".to-validate").eq(i).removeClass("border-red-500");
        }
    }  
}

