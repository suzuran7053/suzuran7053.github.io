<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is Naoko Morris's porlfolio website">
    <title>Naoko Morris's portfolio website</title>

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- MY JS -->
    <script src="script.js"></script>
</head>

<body class="bg">


    <nav class="navbar navbar-expand font bg">
        <ul class="navbar-nav mr-auto" id="nav_lg">
            <li class="nav-item"><a class="nav-link" href="#aboutme">About me</a></li>
            <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
            <li class="nav-item"><a class="nav-link" href="#skillset">Skill set</a></li>
            <li class="nav-item"><a class="nav-link" href="#languages">Languages</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <div id="nav_insta"><a href="https://www.instagram.com/suzuran7053/"><img src="images/instagram.png" alt="instagram" class="image-fluid" style="width:30px;"></a></div>

        <ul class="navbar-nav ml-auto" id="nav_sm">
            <li class="nav-item">
                <div onclick="openNav()"><i class="fas fa-bars" style="font-size: 30px;"></i></div>
            </li>
        </ul>
    </nav>
    <div id="ham">
        <div class="pt-5 text-right">
            <a class="none closebtn" style="font-size: 1.5em;" href="javascript:void(0)" onclick="closeNav()"><i class="fas fa-times mr-3"></i></a>
        </div>
        <nav>
            <ul class="navbar-nav text-center">
                <li class="nav-item mt-3"><a class="nav-link" href="#aboutme">About me</a></li>
                <li class="nav-item mt-3"><a class="nav-link" href="#skillset">Skill set</a></li>
                <li class="nav-item mt-3"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item mt-3"><a class="nav-link" href="#languages">Languages</a></li>
                <li class="nav-item mt-3"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <div class="text-center mt-5"><a href="https://www.instagram.com/suzuran7053/"><img src="images/instagram.png" alt="instagram" class="image-fluid" style="width:25px;"></a></div>
        </nav>
    </div>



   <!-- ABOUT ME-->
    <section id="aboutme">
        <div class="font">
            <h1>Naoko Morris</h1>
            <h2 class="text-danger">Enthusiastic</h2>
            <h2>Junior Web Developer<br>
                based in the UK</h2>
        </div>
    </section>

    <div class="text-center">
        <img src="images/Profile_210215.jpg" alt="profile picture" class="image-fluid profile">
    </div>
   
    <section class="aboutme mt-5">
        <div class="mx-auto text-center">
            <p class="text-white">I was born and raised in Osaka, Japan and lived there for thirty years. I moved to the UK permanently in February 2020.
                I started to learn coding at the end of March 2020. I had been working in the fashion industry as a seller, product designer and a merchandizer when I was living in Japan, however I could find very few fashion companies in my area, so I decided it would be better to switch to a new field in order to begin a new career in the UK.
                I’ve been keenly studying coding every day whilst being employed as a junior web developer in the UK. I would like to develop my skills and get experienced in this industry, so If you're interested in updating your websites for your business, feel free to contact me. </p>
        </div>
    </section>




    <!-- SKILL SET-->
    <section class="container mt-5" id="skillset">
        <h2 class="display-4">Skill set</h2>
        <div class="row justify-content-between">
            <div class="col-lg-6 mt-3">
                <h3>Microsoft Office</h3>
                <ul>
                    <li><img src="images/word.png" alt="" class="image-fluid icon"></li>
                    <li><img src="images/excel.png" alt="" class="image-fluid icon"></li>
                    <li><img src="images/pp.png" alt="" class="image-fluid icon"></li>
                </ul>
            </div>
            <div class="col-lg-6 mt-3">
                <h3>Web Design & Programming Languages</h3>
                <ul>
                    <li><img src="images/html.png" alt="" class="image-fluid icon"></li>
                    <li><img src="images/css.png" alt="" class="image-fluid icon"></li>
                    <li><img src="images/bs.png" alt="" class="image-fluid icon"></li><br>
                    <li><img src="images/js.png" alt="" class="image-fluid icon"></li>
                    <li><img src="images/php.png" alt="" class="image-fluid icon"></li>
                </ul>
            </div>
            <div class="col-lg-6 mt-3">
                <h3>Adobe</h3>
                <ul>
                    <li><img src="images/xd.png" alt="" class="image-fluid icon"></li>
                    
                </ul>
            </div>

        </div>
        
        <div class="mt-5">
            <h3>Learning Journey</h3>
            
        </div>

    </section>






    <!-- LANGUAGES -->
    <section class="container mt-5" id="languages">
        <h2 class="display-4">Languages</h2>
        <p>My native language is Japanese. I have over 10 years experience to work in Japanese E-Commerce field, especially in the ladies apparel industry.
            I've been keenly learning English to interact with people in the UK.</p>
        <div class="row mx-auto">
            <div class="col-lg-6 mt-3">
                <h3>English</h3>
                <p>I've been keenly learning English to interact with people in the UK.</p>
                <div class="mt-3 progress" style="border-radius: 20px;">
                    <div class="progress-bar" style="width:75%; background-color:#2593FE;"></div>
                </div>
                <div>
                    <span class="badge text-dark" style="background-color:#D0F51F;">TOEIC855</span>
                    <span class="badge text-dark" style="background-color:#D0F51F;">IELTS000</span>
                </div>

            </div>
            <div class="col-lg-6 mt-3">
                <h3>Japanese</h3>
                <p>I have over 10 years of business experience in Japan.</p>
                <div class="mt-3 progress" style="border-radius: 20px;">
                    <div class="progress-bar" style="width:100%; background-color:#E20BFA;">Fluent</div>
                </div>
            </div>
        </div>
    </section>


    <!-- ORIGINAL PROJECTS-->
    <section class="container-fluid my-5 project text-center" id="projects">
        <h2 class="display-4">Original Web Projects</h2>
        <p>These are my original web projects. Have a try!</p>
        <div class="row justify-content-between mx-auto">
            <div class="col-6 mt-3">
                <img src="images/dialang.png" alt="" class="image-fluid">
            </div>
            <div class="col-6 mt-3">
                <img src="images/wn.png" alt="" class="image-fluid">
            </div>
            <div class="col-6 mt-3">
                <img src="images/cms.png" alt="" class="image-fluid">
            </div>
            <div class="col-6 mt-3">
                <img src="images/wn.png" alt="" class="image-fluid">
            </div>
        </div>
    </section>


    <!-- WEBSITES-->
    <section class="container-fluid websites mt-5 text-center">
        <h2 class="display-4">Sample Website Creations</h2>
        <p>My Sample Work For Shops, Restaurants, etc!</p>
        <div class="row justify-content-between mx-auto">
            <div class="col-md-4 my-3">
                <img src="images/ice.jpg" alt="" class="image-fluid">
            </div>
            <div class="col-md-4 my-3">
                <img src="images/bazaar2.jpg" alt="" class="image-fluid">
            </div>
            <div class="col-md-4 my-3">
                <img src="images/ice.jpg" alt="" class="image-fluid">
            </div>
            <div class="col-md-4 my-3">
                <img src="images/bazaar2.jpg" alt="" class="image-fluid">
            </div>
            <div class="col-md-4 my-3">
                <img src="images/ice.jpg" alt="" class="image-fluid">
            </div>
            <div class="col-md-4 my-3">
                <img src="images/bazaar2.jpg" alt="" class="image-fluid">
            </div>
        </div>
    </section>











    <hr class="mx-auto my-5">
    <footer class="text-center">
        <nav class="container">
            <ul class="row font">
                <li class="col-md m-1"><a href="#aboutme">About me</a></li>
                <li class="col-md m-1"><a href="#projects">Projects</a></li>
                <li class="col-md m-1"><a href="#skillset">Skill set</a></li>
                <li class="col-md m-1"><a href="#languages">Languages</a></li>
                <li class="col-md m-1"><a href="#contact">Contact</a></li>
            </ul>            
            <div class="text-center m-3"><a href="https://www.instagram.com/suzuran7053/"><img src="images/instagram.png" alt="instagram" class="image-fluid" style="width:25px;"></a></div>
            <div class="text-center mb-3"><small>&copy;Naoko Morris</small></div>
        </nav>        
    </footer>
</body>