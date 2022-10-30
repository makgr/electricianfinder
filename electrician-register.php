<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobnum = $_POST['mobnum'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "insert into tblelectrician(name,email,phone,password)values(:name,:email,:mobnum,:password)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':mobnum', $mobnum, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $LastInsertId = $dbh->lastInsertId();
    if ($LastInsertId > 0) {
        echo '<script>alert("Registration successfull. Now you cna log in and update your profile.")</script>';
        echo "<script>window.location.href ='electrician-register.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Electrician Finder web application|| Contact Us</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="js/jquery.min.js"></script>

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!---//End-css-style-switecher----->
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

        });
    </script>

</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <div class="contact content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Electrician Register</li>
            </ol>

            <div class="contact-grids">
                <div class="col-md-6 contact-left">
                    <p>Join as electrician</p>
                    <form method="post" action="">
                        <ul>
                            <li class="text-info">Name: </li>
                            <li><input type="text" class="text" name="name" required="true"></li>
                        </ul>
                        <ul>
                            <li class="text-info">Email: </li>
                            <li><input type="text" class="text" name="email" required="true"></li>
                        </ul>
                        <ul>
                            <li class="text-info">Mobile Number: </li>
                            <li><input type="text" class="text" name="mobnum" required="true" maxlength="11" pattern="[0-9]+"></li>
                        </ul>
                        <ul>
                            <li class="text-info">Password:</li>
                            <li><input type="password" class="text" name="password" required="true"></li>
                        </ul>
                        <input type="submit" name="submit" value="Register">
                    </form>
                </div>
                <div class="col-md-6 contact-right">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
    </div>
    </div>
    <!---->

    <!---->
</body>

</html>