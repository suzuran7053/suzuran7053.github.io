$("document").ready(function() {
    $(".fa-bars").on("click", showMenu);
    $(".fa-search").on("click", showSearchBar);
    $(".fa-times").on("click", closeSearchBar);

    function showMenu() {
        let showMenuDisplay = $("#hiddenMenu").css("display");
        if (showMenuDisplay == "none") {
            $("#hiddenMenu").css("display", "block");
        } else {
            $("#hiddenMenu").css("display", "none");
        }
    }

    function showSearchBar() {
        let showSearchField = $("#hiddenSearchBar").css("display");
        if (showSearchField == "none") {
            $("header").css("height", "52.56px");
            $("#hiddenSearchBar").css({
                "display": "flex",
                "justify-content": "space-between",
                "align-items": "center",
                "height": "100%"
            });
            $("#hiddenSearchBar input").css({
                "width": "100%",
                "padding": "4px",
                "border-radius": "3px",
                "height": "49px"
            });
            $("#searchForm").css({
                "flex-grow": "2",
                "border": "solid 1px white",
                "border-radius": "3px",
                "height": "100%"
            });
            $("#defaultMenu").css("display", "none");
            $("header").css("height", "auto");
        } else {
            $("$hiddenSearchBar").css("display", "none");
            $("#defaultMenu").css("display", "flex");
        }
    }

    function closeSearchBar() {
        $("#hiddenSearchBar").css("display", "none");
        $("#defaultMenu").css("display", "flex");
    }
})