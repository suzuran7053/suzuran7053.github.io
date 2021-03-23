<nav class="text-white">
    <div class="header_md">
        <nav class="navbar navbar-expand-md justify-content-center bg-dark fixed-top" style="width: 100%;">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-5"><a class="nav-link none" href="nao.en.php">HOME</a></li>
                <li class="nav-item mx-5"><a class="nav-link none" href="nao.en.php#aboutMe">ABOUT ME</a></li>
                <li class="nav-item mx-5"><a class="nav-link none" href="nao.en.php#portfolio">PORTFOLIO</a></li>
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
                            <li class="dropdown-item"><a href="index.php?la=en" class="none">ENGLISH</a></li>
                            <li class="dropdown-item"><a href="index.php?la=ja" class="none">日本語</a></li>
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
                            <li class="dropdown-item"><a href="index.php?la=en" class="none">ENGLISH</a></li>
                            <li class="dropdown-item"><a href="index.php?la=ja" class="none">日本語</a></li>
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
            <div><a href="nao.en.php#aboutMe" class="none">About Me</a></div>
        </li>
        <li class="menu_items py-3">
            <div><a href="nao.en.php#portfolio" class="none">Works</a></div>
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
        <div class="py-2 collapse lang"><a class="none" href="nao.en.php">English</a></div>
        <div class="py-2 collapse lang"><a class="none" href="nao.ja.php">日本語</a></div>

    </div>



    <div class="my-4">
        <a href="https://www.instagram.com/suzuran7053/" class="none" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
    </div>
</div>


<!-- 
<script src="nao.js"></script> -->