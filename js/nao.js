// SIDE NAV (HAMBURGER)
function closeNav() {
    $("#mySidenav").css("width", "0");
}

function openNav() {
    $("#mySidenav").css("width", "300");
}

// Close side menu when a link is clicked
$(".ham a[href], .ham div[data-toggle]").click(function() {
    closeNav();
});

// side menu以外をクリックしたらside menuを閉じるようにしたい

/* function closeHam() {
    if ($("#mySidenav").css("width") === "300") {
        closeNav();
        console.log("Hello");
    }
}

$("body").not($("#mySidenav")).click(function() {
    closeHam();
}); */
/*

$('body:not(#mySidenav, .bars)').on('click', function() {
    //closeNav();
    body.classList.remove('ham');
});

 document.addEventListener('click', (e) => {
    if (!e.target.parentsUntil('.ham')) {
        closeNav();
    }
}) */





/* $(document).on('click', function(e) {
    if (!$(e.target).closest('.ham').length) {
        closeNav();
    }
}); */

//ROTATE IN THE SIDE NAV
$(".none[data-toggle='collapse']").click(function() {
    $(".fa-chevron-right", this).toggleClass("rotate");
})