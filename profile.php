<?php
include_once "includes/config.php";
?>
html
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
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="">
    <nav class="black">
        <div class="nav-wrapper" >
            <a href="#" data-target="nav-mobile" class="sidenav-trigger">menu</a>

            <ul class="right hide-on-med-and-down">
                <li><a href="Home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>


        </div>
    </nav>
</div>
<ul id="nav-mobile" class="sidenav">
    <li><a href="Home.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul>

<section class="container">
    <div class="table-responsive">
        <?php

        $query = "SELECT * FROM users";
        $query_run = mysqli_query($conn, $query);
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

            <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {

                    ?>

                    <div>
                            <div>
                                <div class="col s12 m12 blue-grey" style="margin-top: 20px;">
                                    <div style="padding: 10px;">
                                        <div class="">
                                            <label>ID</label>
                                            <input type="text" value="<?= $row['id']; ?>" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Username</label>
                                            <input type="text" value="<?= $row['fname']; ?>" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Email</label>
                                            <input type="text" value="<?= $row['email']; ?>" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Password</label>
                                            <input type="text" value="<?= $row['password']; ?>" class="form-control">
                                        </div>
                                        <div class="col-lg-12 mb-5">
                                            <label>Course</label>
                                            <input type="text" value="<?= $row['course']; ?>" class="form-control">
                                        </div>
                                    </div>
                                </div><br><br>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo 'No Record Found';
            }
            ?>

<!--            <div class="row">-->
<?php
//$query = "SELECT * FROM users";
//$result = mysqli_query($connection, $query);
//while($row = mysqli_fetch_assoc($result)) {
//    echo "<div class='col s12 m6'>
//          <div class='card blue-grey darken-3'>
//              <div class='card-content white-text'>
//                  <span class='card-title'>User Profile</span>
/*                  <input type='text' value='<?= $row['username']; ?>'>*/
//              </div>
//              <div class='card-action'>
//                  <a href='#'>Start Course</a>
//                  <a href='#'>Preview Course</a>
//              </div>
//          </div>
//        </div>";
//}
//        ?>
<!--    </div>-->
</section>
<script src="js/jquery.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>