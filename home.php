<?php
include_once "includes/config.php";
$msg = $fname = $email = $password = $select_course = '';
if(isset($_POST['fname'])){
    extract($_POST);
    if (empty($fname) or empty($email) or empty($select_course)) {
        $msg = "<div class='alert alert-danger'>All fields must be filled</div>";
    }
    else{
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (fname,email,password,course) VALUES ('$fname','$email','$password','$select_course')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            header('location:profile.php');
        }
        else{
            echo "error";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<body>
<div class="opening-slide row">
    <div class="logo center-on-small-only col s12 l12">
        <img src="images/logo-header.png" alt="">
    </div>
    <div class="col s12 m12 l6">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="opening-slide-icons" style="width: 100%;">
                    <i class="fa fa-html5"></i>
                    <i class="fa fa-css3"></i>
                    <i class="fa fa-wordpress"></i>
                </div>
            </div>
            <div class="col s12 m12 l12">
                <div class="opening-slide-text">
                    <h3><b>Learning Great Skills Now</b></h3>
                    <h1>Online Courses to Learn</h1>
                    <p>This should be used to tell a story and
                        let your users know a little more about your product or service.
                        How can you benefit them?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m12 l6 opening-slide-form center-align offset-l2">
        <h2>Grab Your Course Now</h2>
        <h6><?=$msg?></h6>
        <h5>Supporting Call to Action Goes Here</h5>
        <form action="index.php" method="post">
            <input type="text" name="fname" placeholder="Your Fullname">
            <input type="email" name="email" placeholder="Your Email">
            <input type="password" name="password" placeholder="Your Password">
            <select name="select_course" id="">
                <option value="">Your Course</option>
                <?php

                $query = "SELECT * FROM courses";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    echo"$outside";

                }

                ?>
            </select>
            <button name="submit_btn">GRAB YOUR COURSE</button>
        </form>
    </div>
</div>
<div>
    <div class="welcome-title">
        <p>Let’s Begin</p>
        <h4><b>Welcome to LeadEduco</b></h4>
        <img src="images/section-title-separator.png" alt="">
    </div>
    <div class="welcome-stages-ball-container">
        <img src="images/arrow-right-top.png" alt="" style="top: 60px; left: 430px;">
        <img src="images/arrow-right-bottom.png" alt="" style="bottom: 60px; right: 435px;">
        <div class="welcome-stages">
            <div class="welcome-stages-ball beginner">
                <i class="fa fa-home white-text fa-2x"></i>
                <p class="white-text">Beginner</p>
                <span>1</span>
            </div>
            <div class="welcome-stages-ball intermediate">
                <i class="fa fa-trophy white-text fa-2x"></i>
                <p class="white-text">Intermediate</p>
                <span>2</span>
            </div>
            <div class="welcome-stages-ball expert">
                <i class="fa fa-rebel white-text fa-2x"></i>
                <p class="white-text">Expert</p>
                <span>3</span>
            </div>
        </div>
    </div>
</div>
<div class="grey lighten-3">
    <div class="welcome-title">
        <p>Unlimited Courses</p>
        <h4>Choose Your Courses</h4>
        <img src="images/section-title-separator.png" alt="">
    </div>
    <div>
        <div class="choose-courses container">
            <ul class="owl-carousel owl-theme">
                <li>
                    <div class=" z-depth-1-half item-holder hoverable">
                        <div class="inner-carousel">
                            <img src="images/course1.jpg" alt="">
                            <div class="playbutton">
                                <a href="https://vimeo.com/45830194" class="pop"><i class="fa fa-play-circle fa-4x white-text"></i></a>
                            </div>
                            <p class="price">$180</p>
                            <p class="category">video</p>
                        </div>
                        <div class="white center-align details">
                            <h5>Financial Accounting</h5>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=" z-depth-1-half item-holder hoverable">
                        <div class="inner-carousel">
                            <img src="images/course2.jpg" alt="">
                            <div class="playbutton">
                                <a href="https://vimeo.com/45830194" class="pop"><i class="fa fa-play-circle fa-4x white-text"></i></a>
                            </div>
                            <p class="price">$180</p>
                            <p class="category">video</p>
                        </div>
                        <div class="white center-align details">
                            <h5>Financial Accounting</h5>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=" z-depth-1-half item-holder hoverable">
                        <div class="inner-carousel">
                            <img src="images/course3.png" alt="">
                            <div class="playbutton">
                                <a href="https://vimeo.com/45830194" class="pop"><i class="fa fa-play-circle fa-4x white-text"></i></a>
                            </div>
                            <p class="price">$180</p>
                            <p class="category">video</p>
                        </div>
                        <div class="white center-align details">
                            <h5>Financial Accounting</h5>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=" z-depth-1-half item-holder hoverable">
                        <div class="inner-carousel">
                            <img src="images/course4.jpg" alt="">
                            <div class="playbutton">
                                <a href="https://vimeo.com/45830194" class="pop"><i class="fa fa-play-circle fa-4x white-text"></i></a>
                            </div>
                            <p class="price">$180</p>
                            <p class="category">video</p>
                        </div>
                        <div class="white center-align details">
                            <h5>Financial Accounting</h5>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=" z-depth-1-half item-holder hoverable">
                        <div class="inner-carousel">
                            <img src="images/course5.jpg" alt="">
                            <div class="playbutton">
                                <a href="https://vimeo.com/45830194" class="pop"><i class="fa fa-play-circle fa-4x white-text"></i></a>
                            </div>
                            <p class="price">$180</p>
                            <p class="category">video</p>
                        </div>
                        <div class="white center-align details">
                            <h5>Financial Accounting</h5>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>
<div>
    <div class="welcome-title">
        <p>Great Team</p>
        <h4><b>Our Instructors</b></h4>
        <img src="images/section-title-separator.png" alt="">
    </div>
    <div>
        <div class="choose-courses container">
            <ul class="owl-carousel owl-theme">
                <li>
                    <div class="teams-holder">
                        <div>
                            <img src="images/inst1.jpg" alt="">
                            <div class="overlay-links">
                                <ul>
                                    <li><i class="fa fa-facebook white-text"></i></li>
                                    <li><i class="fa fa-twitter white-text"></i></li>
                                    <li><i class="fa fa-instagram white-text"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="center-align">
                            <h6><b>Financial Accounting</b></h6>
                            <p>This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="teams-holder">
                        <div>
                            <img src="images/inst2.jpg" alt="">
                            <div class="overlay-links">
                                <ul>
                                    <li><i class="fa fa-facebook white-text"></i></li>
                                    <li><i class="fa fa-twitter white-text"></i></li>
                                    <li><i class="fa fa-instagram white-text"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="center-align">
                            <h6><b>Financial Accounting</b></h6>
                            <p>This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="teams-holder">
                        <div>
                            <img src="images/inst3.jpg" alt="">
                            <div class="overlay-links">
                                <ul>
                                    <li><i class="fa fa-facebook white-text"></i></li>
                                    <li><i class="fa fa-twitter white-text"></i></li>
                                    <li><i class="fa fa-instagram white-text"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="center-align">
                            <h6><b>Financial Accounting</b></h6>
                            <p>This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="teams-holder">
                        <div>
                            <img src="images/inst2.jpg" alt="">
                            <div class="overlay-links">
                                <ul>
                                    <li><i class="fa fa-facebook white-text"></i></li>
                                    <li><i class="fa fa-twitter white-text"></i></li>
                                    <li><i class="fa fa-instagram white-text"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="center-align">
                            <h6><b>Financial Accounting</b></h6>
                            <p>This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="teams-holder">
                        <div>
                            <img src="images/inst1.jpg" alt="">
                            <div class="overlay-links">
                                <ul>
                                    <li><i class="fa fa-facebook white-text"></i></li>
                                    <li><i class="fa fa-twitter white-text"></i></li>
                                    <li><i class="fa fa-instagram white-text"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="center-align">
                            <h6><b>Financial Accounting</b></h6>
                            <p>This should be used to tell a story and let your users know about your product or service.</p>
                        </div>
                    </div>
                </li>
             </ul>
        </div>
    </div>
</div>
</div>
<div class="grey lighten-3" style="padding-bottom: 30px;">
    <div class="welcome-title">
        <p>Best Clients</p>
        <h4>Great Testimonials</h4>
        <img src="images/section-title-separator.png" alt="">
    </div>
    <div class="">
        <div class="choose-courses container">
            <ul class="owl-carousel owl-theme">
                <li>
                    <div class="testimonials z-depth-1-half hoverable">
                        <div>
                            <img src="images/testi1.jpg" alt="">
                        </div>
                        <div class="center-align">
                            <h6><b>Mark Smith</b></h6>
                            <p class="grey-text" style="font-size: 13px;">Envato Inc.</p>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonials z-depth-1-half hoverable">
                        <div>
                            <img src="images/testi2.jpg" alt="">
                        </div>
                        <div class="center-align">
                            <h6><b>Jane Jones</b></h6>
                            <p class="grey-text" style="font-size: 13px;">Envato Inc.</p>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonials z-depth-1-half hoverable">
                        <div>
                            <img src="images/testi3.jpg" alt="">
                        </div>
                        <div class="center-align">
                            <h6><b>Angela Max</b></h6>
                            <p class="grey-text" style="font-size: 13px;">Envato Inc.</p>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonials z-depth-1-half hoverable">
                        <div>
                            <img src="images/testi2.jpg" alt="">
                        </div>
                        <div class="center-align">
                            <h6><b>Mary James</b></h6>
                            <p class="grey-text" style="font-size: 13px;">Envato Inc.</p>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonials z-depth-1-half hoverable">
                        <div>
                            <img src="images/testi1.jpg" alt="">
                        </div>
                        <div class="center-align">
                            <h6><b>James Luke</b></h6>
                            <p class="grey-text" style="font-size: 13px;">Envato Inc.</p>
                            <p class="grey-text">This should be used to tell a story and let your users know about your product or service.</p>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="grey lighten-3 partners">
    <div class="carousel">
        <div class="divider"></div>
        <div class="partners-link">
            <a class="carousel-item" href="#one!"><img src="images/img-1.png"></a>
        </div>
        <div class="partners-link">
            <a class="carousel-item" href="#two!"><img src="images/img-2.png"></a>
        </div>
        <div class="partners-link">
            <a class="carousel-item" href="#three!"><img src="images/img-3.png"></a>
        </div>
        <div class="partners-link">
            <a class="carousel-item" href="#four!"><img src="images/img-4.png"></a>
        </div>
        <div class="partners-link">
            <a class="carousel-item" href="#five!"><img src="images/img-5.png"></a>
        </div>
    </div>
</div>
<div class="center-align white-text bottom-bg">
    <h6>Learn Great Skills Now</h6>
    <h3><b>Online Courses to Learn</b></h3>
    <p class="text-bt">
        This should be used to tell a story and let your users know a little more about your product or service. How can you benefit them?
    </p>
    <div class="row center">
        <div class="col s6 m6 l2 offset-l2">
            <h4>-231</h4>
            <p>Days</p>
        </div>
        <div class="col s6 m6 l2">
            <h4>11</h4>
            <p>Hours</p>
        </div>
        <div class="col s6 m6 l2">
            <h4>48</h4>
            <p>Minutes</p>
        </div>
        <div class="col s6 m6 l2">
            <h4>31</h4>
            <p>Seconds</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 center">
            <button><b>GRAB YOUR COURSE</b></button>
        </div>
    </div>
</div>
<div class="page-footer white grey-text">
    <div class="container footer">
        <div style="width: 50%;">  <script>document.write(new Date().getFullYear());</script>&copy;<a href="#" target="_blank" class="red-text">_Sirbobbi</a> All Rights Reserved.</div>
        <div class="right-align" style="width: 50%;">
            <ul class="right">
                <li><i class="fa fa-facebook grey-text"></i></li>
                <li><i class="fa fa-twitter grey-text"></i></li>
                <li><i class="fa fa-instagram grey-text"></i></li>
            </ul>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>