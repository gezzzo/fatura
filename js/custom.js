$(function(){

    "use strict";
    
    $(".name").blur(function(){
        if ($(this).val().length < 3) {
            $(this).css("border","1px solid #f00");

        }else{
            $(this).css("border","1px solid green");

        }

    });
    $(".email").blur(function(){
        if ($(this).val().length < 5) {
            $(this).css("border","1px solid #f00");

        }else{
            $(this).css("border","1px solid green");

        }
    });
    $(".telephone").blur(function(){
        if ($(this).val().length < 5) {
            $(this).css("border","1px solid #f00");

        }else{
            $(this).css("border","1px solid green");

        }
    });
    $(".message").blur(function(){
        if ($(this).val().length < 10) {
            $(this).css("border","1px solid #f00");

        }else{
            $(this).css("border","1px solid green");

        }
    });



});