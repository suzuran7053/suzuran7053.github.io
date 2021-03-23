
<?php

if(isset($_POST['submit'])){  //submit button に設定したname名
    $companyName = $_POST['companyName']; //各input に設定したname名
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $to = "naoko.morris1210@gmail.com";
    $subject = "GOT A NEW MESSAGE FROM MY WEBSITE";
    $body = "JUST RECIEVED A NEW MESSAGE VIA MY WEBSITE! 
    REPLY WITHIN 24 HOURS! ...
    Company Name: $companyName / Name: $name / Email address: $email / Comment: $comment";

    mail($to, $subject, $body); 

}



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is Naoko Morris's porlfolio website">
    <title>Naoko Morris's portfolio website</title>

    <!-- MY CSS -->
    <link rel="stylesheet" href="nao.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&family=Fraunces:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- BOOTSTRAP 4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <!-- MY JS -->
    <script src="nao.js"></script>


</head>

<body>

    <?php include 'nao.header.en.html' ?>

    

    <?php include 'nao.footer.en.html' ?>    

</body>

</html>