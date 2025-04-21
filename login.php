
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
   
    <div id="preloder">
        <div class="loader"></div>
    </div>

   
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.php">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about-us.php">About</a></li>
                        <li><a href="./event.php">Events</a>
                            <ul class="dropdown">
                                <li><a href="booking.php">igisope</a></li>
                                <li><a href="booking.php">swimming in pool</a></li>
                                <li><a href="booking.php">wedding</a></li>
                                <li><a href="booking.php">concert</a></li>
                            </ul>
                        </li>
                        <li><a href="./booking.php">booking</a></li>
                        
                        

                        <li class="active"><a href="./contact.php">Contacts</a></li>
                    </ul>
                </nav>
                <a href="#" class="primary-btn top-btn"><i class="fa fa-ticket"></i> Login</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Login</h2>
                        <p>Fill out the credentials to log in and start booking your events now.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" method="post" class="comment-form contact-form">
                        <div class="row">
                            
                        <div class="col-lg-4">
                                <input type="text" placeholder="Name" name="client_name">
                            </div>
                            
</div>
<div class="row">


                            <div class="col-lg-4">
                                <input type="password" placeholder="Password" name="client_password">
                            </div>
</div>
<div class="row">
<div class="col-lg-4">
                                <button class="btn btn-primary" type="submit" name="login">LOGIN</button><br><br>
                                <span>If not have account <a href="client.php" style="color:color: rgb(56, 3, 71);;font: size 20px;font-weight:bold;">sinup</a></span>
                            </div>
                            
                        

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer-section">
        <div class="container">
            <div class="partner-logo owl-carousel">
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/partner-logo/logo-1.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/partner-logo/logo-2.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/partner-logo/logo-3.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/partner-logo/logo-4.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/partner-logo/logo-5.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/partner-logo/logo-6.png" alt="">
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="ft-logo">
                            <a href="#" class="footer-logo"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Speakers</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="ft-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>



<?php
include "conn.php";


if (isset($_POST['login'])) {
    
    $name = $_POST['client_name'];
    $password = $_POST['client_password']; 
    $name = $conn->real_escape_string($name);
    $password = $conn->real_escape_string($password);
    $sql = "SELECT * FROM client WHERE client_name = '$name' AND client_password = '$password'";
    $result = mysqli_query($conn, $sql);
    $result1=mysqli_fetch_array($result);
    if (!empty($result1)) {
        echo "<script>window.location.href='booking.php';</script>";
    } else {
        echo "Invalid name or password!";
    echo "<script>alert('Invalid credentials')</script>";

    }
}

?>










