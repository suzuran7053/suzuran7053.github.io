/* $(function() {
    // SEARCH MODAL IN NAVBAR
    var hamSearch = document.getElementById("hamSearch");
    var hamModal = document.getElementById("ham_modal");
    var hamClose = document.getElementById("ham_close");
    hamSearch.onclick = function() {
        hamModal.style.display = "block";
    }
    hamClose.onclick = function() {
        hamModal.style.display = "none";
    }
})
// SIDE NAV
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


//ROTATE IN THE SIDE NAV
$(".menu_items[data-toggle='collapse'], .sm[data-toggle='collapse']").click(function() {
    $(".fa-chevron-right", this).toggleClass("rotate");
}) */
  

    // SEARCH MODAL IN NAVBAR
    $("#hamSearch").click(function(){
        $("#ham_modal").css("display", "block");
    })
    $("#ham_close").click(function(){
        $("#ham_modal").css("display", "none");
    })

    //SIDE NAVBAR
    $("#bar").click(function(){
        $("#mySidenav").css("width", "300px");
    })
    $(".closebtn").click(function(){
        $("#mySidenav").css("width", "0px");
    })
    
    //ROTATE IN THE SIDE NAV
    $(".menu_items[data-toggle='collapse']", ".sm[data-toggle='collapse']").click(function(){
        $(".fa-chevron-right", this).toggleClass("rotate");
    })

    //ROTATE IN THE SIDE NAV
    $(".menu_items[data-toggle='collapse']", ".sm[data-toggle='collapse']").click(function(){
        $(".fa-chevron-right", this).toggleClass("rotate");
    })

