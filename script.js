function closeNav() {
    $('#ham').css('width', '0');
}

function openNav() {
    $('#ham').css('width', '300px');
}

$(document).ready(function() {
    $("#icon").hover(function(){
        $(this).animate({height: "+10px", width: "+10px"}, slow);
    }, function(){
        $(this).animate({height: "-10px", width: "-10px"}, slow);  
    })
});
