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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about-us.php">About</a></li>
                        <li><a href="./speaker.php">Speakers</a>
                            <ul class="dropdown">
                                <li><a href="#">Jayden</a></li>
                                <li><a href="#">Sara</a></li>
                                <li><a href="#">Emma</a></li>
                                <li><a href="#">Harriet</a></li>
                            </ul>
                        </li>
                        <li><a href="./booking.php">booking</a></li>
                        <li><a href="./blog.php">Blog</a></li>
                        

                        <li class="active"><a href="./contact.php">Contacts</a></li>
                    </ul>
                </nav>
                <a href="#" class="primary-btn top-btn"><i class="fa fa-ticket"></i> Ticket</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->


    <!-- Contact Top Content Section End -->

    <!-- Contact Form Section Begin -->
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
                <form action="" method="post" class="form-control m-0" id="form">
        <label>Name:
            <input type="text" name="client_name" class="form-control lg" required>
        </label><br><br>

        <label>Password:
            <input type="password" name="client_password" class="form-control lg" required>
        </label><br><br>
        <label>price:
            <input type="number" name="price" class="form-control  lg" required>
        </label><br><br>
        <label>ID Number:
            <input type="number" name="ID_number" class="form-control lg" required>
        </label><br><br>

        <button type="submit" name="submit" class="btn btn-info btn btn-lg">submit</button>

    </form>
</div>
</div>


                    <?php
                    include("conn.php");
if(isset($_POST['submit'])){
    $client_name=$_POST['client_name'];
    $client_password=$_POST['client_password'];

    $price=$_POST['price'];
    $ID_number=$_POST['ID_number'];


    $insert=mysqli_query($conn, "INSERT INTO `client` (`client_name`, `client_password`, `price`, `ID_number`)
     VALUES('$client_name','$client_password','$price','$ID_number')");

     if($insert==true){
        echo "<script>window.location.href='index.php'</script>";
     }else{
        echo "<script>window.alert('data not inserted')</script>";

     }
}

?>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End -->

    <!-- Footer Section Begin -->


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