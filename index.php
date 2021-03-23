<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is Naoko Morris's porlfolio website">
    <title>Naoko Morris's portfolio website</title>

    <!-- MY CSS -->
    <link rel="stylesheet" href="css/nao.css">

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- MY JS -->
    <script src="js/nao.js"></script>

</head>

<body id="top">

    <nav class="text-white">
        <div class="header_md">
            <nav class="navbar navbar-expand-md justify-content-center bg-dark fixed-top" style="width: 100%;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-5"><a class="nav-link none" href="">HOME</a></li>
                    <li class="nav-item mx-5"><a class="nav-link none" href="#aboutMe">ABOUT ME</a></li>
                    <li class="nav-item mx-5"><a class="nav-link none" href="#portfolio">PORTFOLIO</a></li>
                    <li class="nav-item mx-5">
                        <div class="nav-link cursor" data-toggle="modal" data-target="#modalContact">CONTACT</div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown nav-link">
                            <div class="dropdown-toggle cursor" data-toggle="dropdown">
                                <span><i class="fas fa-globe-asia"></i>Language</span>
                            </div>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="index.html?la=en" class="none">ENGLISH</a></li>
                                <li class="dropdown-item"><a href="index.html?la=ja" class="none">日本語</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header_sm bg-dark fixed-top">
            <nav class="navbar navbar-expand">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <div onclick="openNav()"><i class="fas fa-bars"></i></div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item cursor">
                        <div data-toggle="modal" data-target="#modalContact">
                            <span><i class="fas fa-envelope mr-2"></i></span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <div class="dropdown-toggle cursor" data-toggle="dropdown">
                                <span><i class="fas fa-globe-asia"></i></span>
                            </div>
                            <ul class="dropdown-menu cursor">
                                <li class="dropdown-item"><a href="index.html?la=en" class="none">ENGLISH</a></li>
                                <li class="dropdown-item"><a href="index.html?la=ja" class="none">日本語</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>



    <!--MODALS-->
    <div class="modal fade px-0" id="modalContact">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body px-0">
                    <div class="p-3">
                        <button type="button" class="close text-primary float-right" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">CONTACT FORM</h4>
                    </div>
                    <div class="d-flex align-items-center p-3" style="background-color: #b81895; line-height: 1;">
                        <div><i class="fas fa-info-circle text-white"></i></div>
                        <p class="m-0 px-4 text-white">I will reply within 24hours.</p>
                    </div>
                    <form action="nao.form.en.php" method="POST" class="container my-5">
                        <div class="form-group">
                            <label for="companyName">Company:</label>
                            <input type="text" class="form-control" name="companyName" placeholder="Enter your company name">
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" rows="6" name="comment" placeholder="Type your message here..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--HAM-->
    <div id="mySidenav" class="ham text-center">
        <div class="text-right my-4">
            <a class="none closebtn" style="font-size: 1.3em;" href="javascript:void(0)" onclick="closeNav()"><i class="fas fa-times mr-3"></i></a>
        </div>
        <div class="text-center fraunces">
            <img class="rounded-circle img-fluid" style="width:85px;" src="https://edabit-avatars.s3-us-west-1.amazonaws.com/QgynNjKvNCQG2o3qF/1613394717566-undefined" alt="my picture">
            <h5 class="mt-3">Naoko Morris</h5>
        </div>

        <hr class="mx-auto">

        <ul class="my-4">
            <li class="menu_items py-3">
                <div><a href="#aboutMe" class="none">About Me</a></div>
            </li>
            <li class="menu_items py-3">
                <div><a href="#portfolio" class="none">Works</a></div>
            </li>
            <li class="menu_items py-3">
                <div class="cursor" data-toggle="modal" data-target="#modalContact">CONTACT</div>
            </li>
        </ul>


        <div class="py-3">
            <a data-toggle="collapse" data-target=".lang" class="none">
                <i class="fas fa-globe-europe mr-1"></i>Language
                <i class="ml-2 fas fa-chevron-right" style="float: none"></i>
            </a>
            <!--COLLAPSE-->
            <div class="py-2 collapse lang"><a class="none" href="index.html?la=en">English</a></div>
            <div class="py-2 collapse lang"><a class="none" href="index.html?la=ja">日本語</a></div>
        </div>

        <div class="my-4">
            <a href="https://www.instagram.com/suzuran7053/" class="none" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        </div>
    </div>


    
    <?php
    /* if(isset($_GET["la"])){
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
    } */
    ?>
    <div class="flex-container text-center text-white py-5 mt-4" id="topimg">
        <div class="my-5">
            <img class="rounded-circle myPic" src="https://edabit-avatars.s3-us-west-1.amazonaws.com/QgynNjKvNCQG2o3qF/1613394717566-undefined" alt="my picture">
        </div>
        <div>
            <h2 class="fraunces">Hello!</h2>
            <h1 class="fraunces display-4">I'm Naoko Morris</h1>
            <h4 class="fraunces"><i id="aboutMe">Junior web developer, based in the UK</i></h4>
        </div>
    </div>


    
    <div class="container my-5">
        
        <!-- ABOUT ME -->
        <div class="row">
            <div class="col-md-7 col-sm-12 mb-5">
                <h2 class="d-inline fraunces" style="color: #908F8F;">About me</h2>
                <div class="my-5 text-center">
                    <span class="d-block font-weight-bold">D.O.B : 31st May 1989</span>
                    <span class="d-block font-weight-bold">Nationality : Japanese</span>
                </div>
                <div class="container aboutMe_p">
                    <p>I was born and raised in Osaka, Japan and lived there for thirty years. I moved to the UK permanently in February 2020.</p>
                    <p>I started to learn coding at the end of March in 2020. I had been working in the fashion industry in the fashion industry as a seller, product designer and a merchandizer when I was living in Japan, however I could find very few fashion
                        companies in my area, so I decided it would be better to switch to a new field in order to begin a new career in the UK.</p>
                    <p>I’ve been keenly studying coding every day whilst being employed as a junior web developer in the UK. I would like to develop my skills and get experienced in this industry, so If you're interested in refurbish your websites for your
                        business, feel free to contact me. <i class="fas fa-angle-double-right mx-3"></i><button class="btn border btn-dark btn-sm m-2" data-toggle="modal" data-target="#modalContact">CONTACT</button></p>
                </div>
                <hr class="my-5 mx-auto" style="width: 70%;">
                <div class="container">
                    <h4 class="fraunces">Languages I speak</h4>
                    <div class="container">
                        <div class="my-4 px-4">
                            <h5>ENGLISH</h5><span class="badge badge-dark mt-1">TOEIC 855</span> <span class="badge badge-dark">IELTS 000</span>
                            <div class="progress">
                                <div class="mt-1 progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="px-4">
                            <h5>JAPANESE</h5><span class="badge badge-dark mt-1">NATIVE</span>
                            <div class="progress">
                                <div class="mt-1 progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desk_md col-md-5 col-sm-12">
                <div class="row">
                    <img class="img-fluid" src="https://images.unsplash.com/photo-1602506860736-c4511f592bed?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="desk picture">
                </div>
            </div>
            <div class="desk_sm col-sm-12 mb-5">
                <div class="row p-4">
                    <img class="img-fluid" src="https://images.unsplash.com/photo-1522199755839-a2bacb67c546?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80" alt="desk picture">
                </div>
            </div>
        </div>

        <!-- PORTFOLIO -->
        <div id="portfolio">
            <h2 class="my-5 d-inline fraunces" style="color: #908F8F;">My Recent Works</h2>
            <div class="works">
                <div class="front my-3">                    
                    <div>
                        <p class="codepen" data-height="400" data-theme-id="dark" data-default-tab="html,result" data-user="suzuran705" data-slug-hash="WNwGemy" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="[DAY10]Harper's BAZAAR">
                            <span>See the Pen <a href="https://codepen.io/suzuran705/pen/WNwGemy"> [DAY10]Harper's BAZAAR</a> by suzuran705 (<a href="https://codepen.io/suzuran705">@suzuran705</a>)  on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>
                </div>                
            </div>
        </div>

        <!-- CONTACT -->
        <div class="pt-5">
            <div class="text-center" data-toggle="modal" data-target="#modalContact">
                <h3 class="fraunces">Let's work together...</h3>
                <div><i class="contact fas fa-envelope py-1" style="font-size: 35px;"></i></div>
            </div>
        </div>

        <!-- PAGE TOP -->
        <div class="clearfix text-center my-5">
            <a href="#top" class="fraunces none float-right pagetop"><i class="fas fa-arrow-alt-circle-up d-block" style="font-size: 33px;"></i><span style="font-size: 12px;">PAGE TOP</span></a>
        </div>
        
    </div>

    <footer class="container-fruid bg-light py-4">
        <div class="row">
            <ul class="mx-auto text-center">
                <li>
                    <h4 class="fraunces">Naoko Morris</h4>
                </li>
                <li class="my-3"><a href="https://www.instagram.com/suzuran7053/" class="none"><i class="fab fa-instagram"></i></a></li>
                
            </ul>
        </div>
    </footer>

    <!-- CODE PEN -->
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

</body>
</html>