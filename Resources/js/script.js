//JavaScript file

"use strict";

function throwCap() {
    
    
    const bounce = document.querySelector("#bounce");
    const spin = document.querySelector("#spin");
    const Cap = document.querySelector(".btnCap");
    
    
    
    bounce.classList.remove("bounce");
    spin.classList.remove("spin");

    bounce.classList.add("bounce");
    spin.classList.add("spin");
      
}

$(document).ready(function () {
    

    $(".js--nav-icon").click(function() {
        var nav = $(".js--main-nav");
        var icon = $(".js--nav-icon");
        nav.slideToggle(200);
        
        if (icon.hasClass("ion-navicon")) {
            icon.addClass("ion-close");
            icon.removeClass("ion-navicon");

        } else {
            icon.removeClass("ion-close");
            icon.addClass("ion-navicon");
        }
    });

});
