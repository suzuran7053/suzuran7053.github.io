<?php include "includes/header.php"; ?>

<body id="top">

    <?php include "includes/navigation.php"; ?>
    
    <?php
    if(isset($_GET["la"])){
        $lang = $_GET["la"];
    }else{
        $lang = "";
    }
    
    switch($lang){
        case "ja";
            include "includes/jmain.php";
        break;
        case "en";
            include "includes/main.php";
        break;
        default;
            include "includes/main.php";
        break;
    }
    ?>

    <?php include 'includes/footer.php' ?>

</body>
</html>