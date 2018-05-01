//JavaScript file

"use strict";

$(document).ready(function () {

    $(".js--throwCap").click(function() {
        var bounce = $("#bounce");
        var spin = $("#spin");
        var cap = $(".js--displayToggle");
        var reset = $(".js--displayToggle--reset");

        if (!$(bounce).hasClass("bounce")) {
            $(bounce).addClass("bounce");
        }
        if (!$(spin).hasClass("spin")) {
            $(spin).addClass("spin");
        }
    
        $(cap).css("display", "none");
        $(reset).css("display", "inline-block");
    });

    $(".js--throwCapReset").click(function () {
        var bounce = $("#bounce");
        var spin = $("#spin");
        var cap = $(".js--displayToggle");
        var reset = $(".js--displayToggle--reset"); 

        if ($(bounce).hasClass("bounce")) {
            $(bounce).removeClass("bounce");
        }
        if ($(spin).hasClass("spin")) {
            $(spin).removeClass("spin");
        }

        $(cap).css("display", "inline-block");      
        $(reset).css("display", "none");  
    });

    $(".js--nav-icon").click(function () {
        var nav = $(".js--main-nav");
        var icon = $(".js--nav-icon");
        nav.slideToggle(200);

        if (icon.hasClass("ion-navicon")) {
            icon.addClass("ion-close");
            icon.css("font-size", "70%");
            icon.removeClass("ion-navicon");


        } else {
            icon.removeClass("ion-close");
            icon.addClass("ion-navicon");
            icon.css("font-size", "inherit");
            
        }
    });

});
