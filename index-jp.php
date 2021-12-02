<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is Naoko Morris's porlfolio website">
    <title>モーリス菜央子 ポートフォリオサイト</title>

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat:wght@200&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- MY JS -->
    <script src="script.js"></script>
</head>

<body style="background-color: #323232;">


    <nav class="navbar navbar-expand font bg-dark sticky-top">
        <ul class="navbar-nav mr-auto" id="nav_lg">
            <li class="nav-item"><a class="nav-link" href="#aboutme">自己紹介</a></li>
            <li class="nav-item"><a class="nav-link" href="#projects">プロジェクト</a></li>
            <li class="nav-item"><a class="nav-link" href="#skillset">使用言語</a></li>
            <li class="nav-item"><a class="nav-link" href="#languages">語学</a></li>
            <li class="nav-item"><a class="nav-link" href="mailto:naoko.morris1210@gmail.com">問い合わせ</a></li>
        </ul>
        <div id="langs" class="mr-3">
            <a href="index.php" class="mr-2">English</a>
            <a href="index-jp.php" class="mr-2">日本語</a>
        </div>
        <div id="sns">
            <a href="https://github.com/suzuran7053" class="mr-2"><i class="fab fa-github"></i></a>
            <a href="https://codepen.io/suzuran7053/pens/" class="mr-2"><i class="fab fa-codepen"></i></a>
        </div>
        
        
        
        <!-- HAMBERGER BUTTON -->
        <ul class="navbar-nav ml-auto" id="nav_sm">
            <li class="nav-item">
                <div id="bar"><i class="fas fa-bars" style="font-size: 30px;"></i></div>
            </li>
        </ul>
    </nav>

    <!-- HAMBERGER MENU -->
    <div id="ham">
        <div class="pt-5 text-right">
            <a class="none closebtn" style="font-size: 1.5em;" id="closebtn"><i class="fas fa-times mr-3"></i></a>
        </div>
        <nav>
            <ul class="navbar-nav text-center font2">
                <li class="nav-item mt-3"><a class="nav-link" href="#aboutme">自己紹介</a></li>
                <li class="nav-item mt-3"><a class="nav-link" href="#skillset">使用言語</a></li>
                <li class="nav-item mt-3"><a class="nav-link" href="#projects">プロジェクト</a></li>
                <li class="nav-item mt-3"><a class="nav-link" href="#languages">語学</a></li>
                <li class="nav-item mt-3"><a class="nav-link" href="mailto:naoko.morris1210@gmail.com">問い合わせ</a></li>
            </ul>
            <div class="text-center mt-5">
                <a href="https://github.com/suzuran7053" class="mx-2"><i class="fab fa-github"></i></a>
                <a href="https://codepen.io/suzuran7053/pens/" class="mx-2"><i class="fab fa-codepen"></i></a>
            </div>
        </nav>
    </div>



    <!-- ABOUT ME-->
    <section id="aboutme">
        <div class="font">
            <h1>モーリス 菜央子</h1>
            <h2 id="enth">Enthusiastic </h2>
            <h2>Junior Web Developer<br>
                based in the UK</h2>
        </div>
    </section>

    <div class="text-center">
        <img src="images/Profile_21021.jpg" alt="ProfilePicture" class="image-fluid" id="profile">
    </div>

    <section class="mt-5">
        <div class="mx-auto text-center me">
            <p class="text-white font2">大阪で生まれ育ち、以前はアパレルメーカーでの法人向け企画営業やマーチャンダイザーなどの職に就いておりました。2020年2月、結婚を機ににイギリスに引っ越したのですが、私の住んでいる地域にはファッション企業がほとんどなく、イギリスで新しいキャリアを作っていくためには新しい分野に転向した方が良いと考え2020年3月末にWebエンジニアを目指して学習を始めました。
            学び始めてから約8か月後、英国内企業にて新人Webエンジニアのポジションで雇っていただくことができたのですが、会社の国外移転など先行きが不透明になってきたこととコロナの影響もあり、約半年で勤務は終了となってしまいました。その後もWebエンジニアになるための勉強を日々続けながら、英国内企業にてEコマース販売部での仕事を見つけ、現在はそちらの企業にて英日翻訳やAmazon・eBayの広告管理、またメーカーとして法人企業へのアプローチするトレード部門の新規取引先開拓・問い合わせ対応やカタログ作成・メールでのご案内などを行っております。</p>
        </div>
    </section>




    <!-- SKILL SET-->
    <section class="container mt-5" id="skillset">
        <h2 class="display-4">使用言語</h2>
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
                <h3>ウェブデザイン & プログラミング言語</h3>
                <ul>
                    <li><img src="images/html.png" alt="html5" class="image-fluid icon"></li>
                    <li><img src="images/css.png" alt="css3" class="image-fluid icon"></li>
                    <li><img src="images/bs.png" alt="bootstrap4" class="image-fluid icon"></li><br>
                    <li><img src="images/js.png" alt="javascript" class="image-fluid icon"></li>
                    <li><img src="images/jq.png" alt="jquery" class="image-fluid icon"></li>
                    <li><img src="images/php.png" alt="php" class="image-fluid icon"></li>
                </ul>
            </div>
            <div class="col-lg-6 mt-3">
                <h3>Adobe</h3>
                <ul>
                    <li><img src="images/xd.png" alt="" class="image-fluid icon"></li>

                </ul>
            </div>
        </div>
    </section>


    <!-- ORIGINAL PROJECTS-->
    <section class="container-fluid my-5 project text-center" id="projects">
        <h2 class="display-4">オリジナルプロジェクト作品</h2>
        <p class="col-lg-8 col-md-12 mx-auto font2">
        これらは私のオリジナルのプロジェクトです。コードファイルは<a href="https://github.com/suzuran7053/PHP_projects" class="font-weight-bold text-warning">私のGithubページ</a>にあります。
        各プロジェクトのデモスクリーンショットは「demo-screenshots」という名前のディレクトリからご覧いただけます。</p>
        <div class="row justify-content-between mx-auto">
            <div class="col-lg-6 mt-3">
                <a href="https://github.com/suzuran7053/PHP_projects/tree/main/Wrestling_Nonsense">
                    <img src="images/wrestlingnonsense.png" alt="" class="image-fluid pro">
                </a>
            </div>
            <div class="col-lg-6 mt-3">
                <a href="https://suzuran.epizy.com/">
                    <img src="images/translation.jpg" alt="" class="image-fluid pro">
                </a>
            </div>
            <div class="col-lg-6 mt-3">
                <a href="https://github.com/suzuran7053/PHP_projects/tree/main/Dialang">
                    <img src="images/dialang.png" alt="" class="image-fluid pro">
                </a>
            </div>
            <div class="col-lg-6 mt-3">
                <a href="https://github.com/suzuran7053/PHP_projects/tree/main/notebook">
                    <img src="images/notebook.jpg" alt="" class="image-fluid pro">
                </a>
            </div>
        </div>
    </section>


    <!-- WEBSITES-->
    <section class="container-fluid websites mt-5 text-center bottom">
        <h2 class="display-4">サンプルWebサイト作品集</h2>
        <p class="font2">オリジナルデザインのWebサイト作品や、サンプルサイトを元に再現して作った作品集です。実際に私が書いたコードは<a href="https://github.com/suzuran7053/suzuran7053.github.io" class="font-weight-bold text-warning">Githubページ</a>からご覧いただけます。</p>
        <div class="row justify-content-between mx-auto">
            <div class="col-lg-4 my-3 site">
                <a href="https://suzuran.me/shop_icecream/"><img src="images/ice.jpg" alt="" class="image-fluid"></a>
            </div>
            <div class="col-lg-4 my-3 site">
                <a href="https://suzuran.me/BAZAAR/"><img src="images/bazaar2.jpg" alt="" class="image-fluid"></a>
            </div>
            <div class="col-lg-4 my-3 site">
                <a href="https://suzuran.me/api_get_current_marketcup/"><img src="images/api_get_current_marketcup.jpg" alt="" class="image-fluid"></a>
            </div>
        </div>
    </section>


    

    <!-- LANGUAGES -->
    <section class="container mt-5 bottom" id="languages">
        <h2 class="display-4">語学</h2>
        <p class="font2">イギリスに住んで約3年になりますが、毎日英語環境での実務のなかで本場の英語に触れながら、学習を続けています。</p>
        <div class="text-right" id="translation">
            <a href="https://suzuran.epizy.com/" class="text-warning"><i class="fas fa-angle-right mr-2 text-warning"></i>翻訳作品集</a>
        </div>
        <div class="row mx-auto">
            <div class="col-lg-6 mt-3">
                <h3>English</h3>
                <div class="mt-3 progress" style="border-radius: 20px;">
                    <div class="progress-bar" style="width:75%; background-color:#2593FE;"></div>
                </div>
                <div>
                    <span class="badge text-dark" style="background-color:#D0F51F;">TOEIC 855</span>
                    <span class="badge text-dark" style="background-color:#D0F51F;">IELTS Score 7.5相当</span>
                </div>

            </div>
            <div class="col-lg-6 mt-3">
                <h3>日本語</h3>
                <div class="mt-3 progress" style="border-radius: 20px;">
                    <div class="progress-bar" style="width:100%; background-color:#E20BFA;">母国語</div>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <hr class="mx-auto my-5">
    <footer class="text-center">
        <nav class="container">
            <ul class="row font">
                <li class="col-md m-1"><a href="#aboutme">自己紹介</a></li>
                <li class="col-md m-1"><a href="#projects">プロジェクト集</a></li>
                <li class="col-md m-1"><a href="#skillset">使用言語</a></li>
                <li class="col-md m-1"><a href="#languages">語学</a></li>
                <li class="col-md m-1"><a href="mailto:naoko.morris1210@gmail.com">問い合わせ</a></li>
            </ul>
            <div class="text-center m-3">
                <a href="https://github.com/suzuran7053" class="mx-2"><i class="fab fa-github"></i></a>
                <a href="https://codepen.io/suzuran7053/pens/" class="mx-2"><i class="fab fa-codepen"></i></a>
            </div>
            <div class="text-center mb-3 font2"><small>&copy;Naoko Morris</small></div>
        </nav>
    </footer>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>