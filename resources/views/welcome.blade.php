<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Education</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">

    <!-- FLEXSLIDER CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider.css"
        integrity="sha512-qBiimfUzq2jSxkiqjm4ocfN2TdlUz9/8OGwZkptLBbXSISmjvLnMqIIAC9if9Pfdv7xZjuTjgfIgAlzCPRWJDA=="
        crossorigin="anonymous" />

    <!-- Google	Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */

        /* =============================================================
   GENERAL STYLES
 ============================================================ */
        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 30px;
            font-size: 14px;
        }

        .set-pad {
            padding-top: 35px;
        }

        .set-row-pad {
            padding-top: 30px;
            padding-bottom: 50px;
        }

        /*=====================================
  NAVBAR STYLES 
    ===================================*/

        .logo-custom {
            max-height: 50px;
            max-width: 60px;
        }

        #menu {
            background-color: rgba(28, 43, 75, 1);
            color: #fff;
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 1px;
            min-height: 70px;
        }


        .navbar-inverse {
            border-color: transparent;
        }

        .navbar-inverse .navbar-nav>li>a,
        .navbar-inverse .navbar-nav>li>a:hover {
            color: #FFF;
            padding: 22px 10px;
        }


        /*=====================================
  HOME STYLES 
    ===================================*/
        .home-sec {
            padding-top: 10px;
            padding-bottom: 60px;
            background: url(../img/header.jpg) no-repeat center center;
            padding: 0;
            -webkit-background-size: cover;
            background-size: cover;
            color: #fff;
            background-attachment: fixed;
        }

        .home-sec .overlay {
            background: rgba(38, 57, 88, 0.89);
            min-height: 500px;
        }

        .home-sec h1 {
            color: #fff;
            font-weight: 900;
            font-size: 50px;
            text-transform: uppercase;
            padding-bottom: 35px;
        }

        .home-sec h3 {
            text-transform: uppercase;
        }



        .set-flexi {
            -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0);
            -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0);
            -o-box-shadow: 0 1px 4px rgba(0, 0, 0, 0);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0);
            background-color: transparent;
            border: 0px solid #000;
            padding-top: 120px;
        }

        .flex-control-nav {
            display: none !important;
        }

        .set-flexi a {
            margin: 5px;
        }

        /*=====================================
  TAG LINE STYLES 
    ===================================*/

        .tag-line {
            background: #E9E9E9;
            color: #000;
        }

        .tag-line h2 {
            font-size: 20px;
            font-weight: 900;
            padding: 5px 10px 10px 5px;
            color: #005E5A;
        }

        .tag-line h2>i {
            margin-left: 8px;
            margin-right: 8px;
        }

        /*=====================================
  HEADER LINE STYLES 
    ===================================*/
        .header-line {
            font-weight: 900;
            font-size: 25px;
            padding-bottom: 5px;
            padding-top: 25px;
            color: #000;
        }

        h1::after {
            content: " ";
            border: solid 2px #2f9484;
            display: block;
            width: 200px;
            margin: 12px auto;
        }

        /*=====================================
  ABOUT STYLES 
  ===================================*/
        .about-div {
            padding: 30px;
        }

        .icon-round-border {
            border: 10px double #1A94C4;
            color: #2f9484;
            text-align: center;
            padding-top: 15px;
            height: 100px;
            width: 100px;
            border-radius: 50%;
            cursor: pointer;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        .icon-round-border:hover {
            color: #fff;
            border: 10px double #fff;
            background-color: #1A94C4;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        .about-div hr {
            border: 1px solid #1A94C4;
        }

        .about-div h3 {
            font-size: 25px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .about-div p {
            padding-top: 10px;
        }

        .btn-set {
            border-radius: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            margin-bottom: 20px;
        }

        /*=====================================
  FACULTY STYLES 
  ===================================*/
        #faculty-sec {
            background-color: #000;
            color: #fff;
        }

        #faculty-sec .header-line {
            color: #fff;
        }

        .faculty-div h4 {
            line-height: 30px;
            font-weight: 700;
        }

        .faculty-div {
            padding: 30px;
        }

        .faculty-div hr {
            border: 1px solid #1A94C4;
        }

        .faculty-div h3 {
            font-size: 25px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .faculty-div p {
            padding-top: 10px;
            padding-bottom: 15px;
        }

        .faculty-div img {
            border: 10px double #fff;
        }

        /*=====================================
  CONTACT STYLES 
  ===================================*/
        #contact-sec {
            padding-top: 10px;
            padding-bottom: 60px;
            background: url(../img/contact.jpg) no-repeat center center;
            padding: 0;
            -webkit-background-size: cover;
            background-size: cover;
            color: #fff;
            background-attachment: fixed;
        }

        #contact-sec .overlay {
            background: rgba(0, 0, 0, 0.76);
            min-height: 600px;
        }

        #contact-sec h1 {
            color: #fff;
        }

        #contact-sec .form-control {
            background-color: rgba(255, 255, 255, 0);
            color: #fff;
        }

        /*=====================================
  Footer STYLES 
  ===================================*/
        #footer {
            padding: 5px 20px;
            background-color: #2d3d5a;
            text-align: right;
            color: #fff;
            font-size: 15px;
        }

    </style>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="img/wenzhou_logo.jpg" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse move-me">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#features-sec">FEATURES</a></li>
                    <li><a href="#faculty-sec">FACULTY</a></li>
                    <li><a href="#course-sec">COURSES</a></li>
                    <li><a href="#contact-sec">CONTACT</a></li>
                    <li>
                        <div class="login-content">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!--NAVBAR SECTION END-->
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>THE UNIQUE METHOD</h1>
                                    <a href="#features-sec" class="btn btn-info btn-lg">
                                        GET AWESOME
                                    </a>
                                    <a href="#features-sec" class="btn btn-success btn-lg">
                                        FEATURE LIST
                                    </a>
                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>UNMATCHED APPROACH</h1>
                                    <a href="#features-sec" class="btn btn-primary btn-lg">
                                        GET AWESOME
                                    </a>
                                    <a href="#features-sec" class="btn btn-danger btn-lg">
                                        FEATURE LIST
                                    </a>
                                </li>
                                <!-- End Slider 02 -->

                                <!-- Slider 03 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>AWESOME FACULTY PANEL</h1>
                                    <a href="#features-sec" class="btn btn-default btn-lg">
                                        GET AWESOME
                                    </a>
                                    <a href="#features-sec" class="btn btn-info btn-lg">
                                        FEATURE LIST
                                    </a>
                                </li>
                                <!-- End Slider 03 -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--HOME SECTION END-->
    <div class="tag-line">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 data-scroll-reveal="enter from the bottom after 0.1s">
                        <i class="fa fa-circle-o-notch"></i> WELCOME TO THE EDU-CENTER
                        <i class="fa fa-circle-o-notch"></i>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!--HOME SECTION TAG LINE END-->
    <div id="features-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">
                    FEATURE LIST
                </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <i class="fa fa-paper-plane-o fa-4x icon-round-border"></i>
                    <h3>Quality Education</h3>
                    <hr />
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo .
                    </p>
                    <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="about-div">
                    <i class="fa fa-bolt fa-4x icon-round-border"></i>
                    <h3>SYSTEMATIC APPROACH</h3>
                    <hr />
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo .
                    </p>
                    <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="about-div">
                    <i class="fa fa-magic fa-4x icon-round-border"></i>
                    <h3>ONE TO ONE STUDY</h3>
                    <hr />
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo .
                    </p>
                    <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURES SECTION END-->
    <div id="faculty-sec">
        <div class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                        OUR FACULTY
                    </h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                    </p>
                </div>
            </div>
            <!--/.HEADER LINE END-->

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                    <div class="faculty-div">
                        <img src="img/faculty/1.jpg" class="img-rounded" />
                        <h3>ROXI CHI LUENA</h3>
                        <hr />
                        <h4>
                            Desigining <br />
                            Department
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="faculty-div">
                        <img src="img/faculty/2.jpg" class="img-rounded" />
                        <h3>JANE DEO ALEX</h3>
                        <hr />
                        <h4>
                            Enginering <br />
                            Department
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                    <div class="faculty-div">
                        <img src="img/faculty/3.jpg" class="img-rounded" />
                        <h3>RUBY DECORSA</h3>
                        <hr />
                        <h4>
                            Management <br />
                            Department
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FACULTY SECTION END-->
    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                    OUR COURSES
                </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <div class="row set-row-pad">
            <div class="col-lg-6 col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="img/building.jpg" class="img-thumbnail" />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                    <strong> 350+</strong> DESIGNING COURSES
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" style="height: 0px">
                            <div class="panel-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac
                                    orci ac aliquam. Nulla eget condimentum mauris, eget
                                    tincidunt est.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                    <strong> 250+</strong> ENGINEERING COURSES
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" style="height: 0px">
                            <div class="panel-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac
                                    orci ac aliquam. Nulla eget condimentum mauris, eget
                                    tincidunt est.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                    <strong> 153+</strong> MANAGEMENT COURSES
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" style="height: 0px">
                            <div class="panel-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac
                                    orci ac aliquam. Nulla eget condimentum mauris, eget
                                    tincidunt est.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s">
                    <span style="font-size: 40px">
                        <strong> 2500 + </strong>
                        <hr />
                        Centers
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- COURSES SECTION END-->
    <div id="contact-sec">
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                            CONTACT US
                        </h1>
                        <p data-scroll-reveal="enter from the bottom after 0.3s">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo. Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit. Aenean commodo.
                        </p>
                    </div>
                </div>
                <!--/.HEADER LINE END-->
                <div class="row set-row-pad" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <textarea name="message" required="required" class="form-control"
                                    style="min-height: 150px" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-block btn-lg">
                                    SUBMIT REQUEST
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row set-row-pad">
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1"
                data-scroll-reveal="enter from the bottom after 0.4s">
                <h2><strong>Our Location </strong></h2>
                <hr />
                <div>
                    <h4>DongLu , New Street,</h4>
                    <h4>WenZhou.</h4>
                    <h4><strong>Call:</strong> + 86-1558797310 </h4>
                    <h4><strong>Email: </strong>muafar15@yahoo.com</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1"
                data-scroll-reveal="enter from the bottom after 0.4s">
                <h2><strong>Social Connectivity </strong></h2>
                <hr />
                <div>
                    <a href="#">
                        <img src="img/Social/facebook.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="img/Social/google-plus.png" alt="" /></a>
                    <a href="#"> <img src="img/Social/twitter.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT SECTION END-->
    <div id="footer">
        2021 Wenzhou-University-information-system.com | All Rights Reserved |
    </div>
    <!-- FOOTER SECTION END-->

    <!--  Jquery Core Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.js"
        integrity="sha512-ntfq5A52mYIK2b3eHD6EisHq5+wanA/FW2UJS28iOqhJPXhLG/2wdUbBqOFfiAzm2QjJrUE04FZAS5MsCWjvYA=="
        crossorigin="anonymous"></script>
    <!--  Core Bootstrap Script -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
    <!--  Flexslider Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/jquery.flexslider.js"
        integrity="sha512-fERPSoaGITByr9uRRkkCJRWVfO+uouKLoJkcZsg08yUeahYNVDOjoIMo5TprTK15REbCIUf/E+NJk6g6ksxORg=="
        crossorigin="anonymous"></script>

    <!--  Scrolling Reveal Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.js"
        integrity="sha512-XJgPMFq31Ren4pKVQgeD+0JTDzn0IwS1802sc+QTZckE6rny7AN2HLReq6Yamwpd2hFe5nJJGZLvPStWFv5Kww=="
        crossorigin="anonymous"></script>
    <!--  Scroll Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js"
        integrity="sha512-brrjTp9G6MkKX5QjXwwAQkscfFpKi3okjyZ/M3vGwwg9qI1msoz7z+EbQBLXsTnVK3POjYBGHcQvX34GFKr/7A=="
        crossorigin="anonymous"></script>
    <!--  Custom Scripts -->
    @push('scripts')
        <script>
            (function($) {
                "use strict";
                var mainApp = {
                    scrollAnimation_fun: function() {

                        /*====================================
                         ON SCROLL ANIMATION SCRIPTS 
                        ======================================*/


                        window.scrollReveal = new scrollReveal();

                    },
                    scroll_fun: function() {

                        /*====================================
                             EASING PLUGIN SCRIPTS 
                            ======================================*/
                        $(function() {
                            $('.move-me a').bind('click', function(
                                event) { //just pass move-me in design and start scrolling
                                var $anchor = $(this);
                                $('html, body').stop().animate({
                                    scrollTop: $($anchor.attr('href')).offset().top
                                }, 1000, 'easeInOutQuad');
                                event.preventDefault();
                            });
                        });

                    },

                    top_flex_slider_fun: function() {
                        /*====================================
                         FLEX SLIDER SCRIPTS 
                        ======================================*/
                        $('#main-section').flexslider({
                            animation: "fade", //String: Select your animation type, "fade" or "slide"
                            slideshowSpeed: 3000, //Integer: Set the speed of the slideshow cycling, in milliseconds
                            animationSpeed: 1000, //Integer: Set the speed of animations, in milliseconds
                            startAt: 0, //Integer: The slide that the slider should start on. Array notation (0 = first slide)

                        });
                    },

                    custom_fun: function() {
                        /*====================================
                         WRITE YOUR   SCRIPTS  BELOW
                        ======================================*/

                    },

                }
                $(document).ready(function() {
                    mainApp.scrollAnimation_fun();
                    mainApp.scroll_fun();
                    mainApp.top_flex_slider_fun();
                    mainApp.custom_fun();
                });
            }(jQuery));

        </script>

    @endpush
</body>

</html>
