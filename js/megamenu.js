// MENU MOBILE ===============================================================================
// Collpsable menu mobile and tablets

$("#megamenu-button-mobile").click(function () {
    $(".megamenu").slideToggle(400);
    $(this).toggleClass("active");
});

// MENU DROP DOWN ====================================== //
$(document).ready(function () {
    $(".megamenu .drop-down").click(function () {
        if ($(this).next("div").is(":visible")) {
            $(this).next("div").slideToggle("normal");
        } else {
            $(".megamenu .drop-down-container").fadeOut("fast");
            $(this).next("div").slideToggle("slow");

            $("#map_1").each(function () {
                var embed = "<iframe style='height:300px; width:100%; border:0' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.09935853577!2d77.16340321444822!3d28.686674288380576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0240e0b6ebb5%3A0x3ed00fbb6e07d3af!2sLions+Public+School!5e0!3m2!1sen!2sin!4v1455183199847'></iframe>";
                $(this).php(embed);
            });
        }
    });
});


// DROP DOWN MENU TABS ====================================== //
$('body').on('click', 'ul.tabs > li > a', function (e) {

    //Get Location of tab's content
    var contentLocation = $(this).attr('href');

    //Let go if not a hashed one
    if (contentLocation.charAt(0) == "#") {

        e.preventDefault();

        //Make Tab Active
        $(this).parent().siblings().children('a').removeClass('active');
        $(this).addClass('active');

        //Show Tab Content & add active class
        $(contentLocation).show().addClass('active').siblings().hide().removeClass('active');

    }
});