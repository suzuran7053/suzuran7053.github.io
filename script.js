$(document).ready(function() {
    $("#translation").hover(function() {
        $(this).toggleClass("animate__animated animate__bounce");
    })
    $("#bar").click(function() {
        $("#ham").css("width", "250px");
    })
    $("#closebtn").click(function() {
        $("#ham").css("width", "0px");
    })
    $(".icon").hover(function() {
        $(this).toggleClass("animate__animated animate__rubberBand");
    })
    $(".pro").hover(function() {
        $(this).toggleClass("animate__animated animate__pulse");
    })
    $(".site").hover(function() {
        $(this).toggleClass("animate__animated animate__pulse");
    })
    $(".nav-link").hover(function() {
        $(this).toggleClass("animate__animated animate__swing text-light");
    })
});
