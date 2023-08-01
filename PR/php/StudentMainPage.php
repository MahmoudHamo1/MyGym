<?php
 session_start();
 if (isset($_SESSION['IsMember']))
 {
    if ($_SESSION['IsMember']==1)
    {
         ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../Staylesheets/mainCss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <!------------------------------{To link the Footer}------------------------------------->
    <link rel="stylesheet" href="../Staylesheets/Icon.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <!--------------------------------------------------------------------------------------->

  <!-------------------------------------------------------------------------------------------------------------------->

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Staylesheets/mainCss.css" rel="stylesheet">

    <!-------------------------------------------------------------------------------------------------------------------->
</head>
<body>
<!--------------------------------------------------------------------------------------------------------------------->
<!--<div class="menu-btn">-->
<!--    <i class="fas fa-bars" style="background: #172035" > </i>-->
<!--</div>-->

<!--<div class="side-bar" style="background: #172035">-->
<!--    <div class="close-btn">-->
<!--        <i class="fas fa-times"></i>-->
<!--    </div>-->
<!--    <div class="menu" >-->
<!--        <div class="item"><a href="#"><i class="fas fa-desktop"></i>Home</a></div>-->
<!--        <div class="item">-->
<!--            <a href="php/AdminEmployeeMainPage.php" class="sub-btn"><i class="fas fa-table"></i>Driving Course</a>-->
<!--        </div>-->
<!--        <div class="item"><a href="php/AdminStudentMainPage.php"><i class="fas fa-th"></i>Signs and Signals</a></div>-->
<!--        <div class="item">-->
<!--            <a href="php/AdminVehicleMainPage.php" class="sub-btn"><i class="fas fa-cogs"></i>Road safety</i></a>-->

<!--        </div>-->
<!--        <div class="item"><a href="mainPage.html"><i class="fas fa-info-circle"></i>Exams</a></div>-->
<!--        <div class="item"><a href="mainPage.html"><i class="fas fa-info-circle"></i>Log Out</a></div>-->

<!--    </div>-->
<!--</div>-->
<!--------------------------------------------------------------------------------------------------------------------->

<!--<div id="menu" >-->

<!--    <a href="StudentMainPage.html"></a>-->

<!--    <ul>-->

<!--        <li>-->
<!--            <a href="StudentMainPage.html"><i class="fa fa-home"></i> Home</a>-->
<!--        </li>-->

<!--        <li>-->
<!--            <a href="DrivingCourse.html"><i class="fa fa-address-card"></i>  Driving Course</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="SignAndSignal1.html"><i class="fa fa-address-card"></i>Signs and Signals</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="RoadSafety.html"><i class="fa fa-address-card"></i> Road safety</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="Exams.html"> <i class="fa fa-address-card"></i> Exams</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="mainPage.html"><i class="fa fa-sign-in"></i>      Log Out</a>-->

<!--        </li>-->
<!--    </ul>-->

<!--</div>-->
<!--------------------------------------------------------------------------------------------------------------------->

<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="index.html">
                            <h1>Driving School </h1>
                            <!-- <img src="img/logo.jpg" alt="Logo"> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-calendar"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Opening Hour</h3>
                                    <p>sat - wed, 8:00 - 2:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Location</h3>
                                    <p>Nablus - sufian street</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="StudentMainPage.html" class="nav-item nav-link active">Home</a>
                        <a href="DrivingCourse.html" class="nav-item nav-link">Driving Course</a>
                        <a href="SignAndSignal1.html" class="nav-item nav-link">Signs and Signals</a>
                        <a href="RoadSafety.html" class="nav-item nav-link">Road safety</a>
                        <a href="Exams.html" class="nav-item nav-link">Exams</a>
                        <div class="nav-item dropdown">
                            <a href="mainPage.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Logout</a>
                            <!--                            <div class="dropdown-menu">-->
                            <!--                                <a href="blog.html" class="dropdown-item">Admin</a>-->
                            <!--                                <a href="single.html" class="dropdown-item">Employee</a>-->
                            <!--                                <a href="php/StudentLogin.php" class="dropdown-item">Student</a>-->

                            <!--                            </div>-->
                        </div>

                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Nav Bar End -->












<!--------------------------------------------------------------------------------------------------------------------->
<div>
    <img width="1519" height="638" src="../images/StudentMainPage.gif" alt="">
</div>











<!------------------------------------------------{Footer}------------------------------------------------------------->
<footer class="Footer">
    <div class="bottomMenuText" style="height: 100px">

        <div class="wrapper">

            <div class="button">
                <a href="https://www.facebook.com/mohammad.halaweh.526">
                    <div class="icon" style="color:#0a58ca"><i  class="fab fa-facebook-f"></i></div>
                    <span>Facebook</span>
                </a>
            </div>

            <div class="button">
                <a href="https://twitter.com/">
                    <div class="icon"style="color:#0e76a8"><i  class="fab fa-twitter"></i></div>
                    <span>Twitter</span>
                </a>
            </div>

            <div class="button">
                <a href="https://www.instagram.com/">
                    <div class="icon"style="color:#E1306C"><i  class="fab fa-instagram"></i></div>
                    <span>Instagram</span>
                </a>
            </div>

            <div class="button">
                <a href="https://www.youtube.com/channel/UC3gf4o1mZEBIuLFCLPDGRYQ">
                    <div class="icon"style="color:red"><i  class="fab fa-youtube"></i></div>
                    <span>YouTube</span>
                </a>
            </div>

        </div>
    </div>
</footer>
<!------------------------------------------------{End Footer}--------------------------------------------------------->


<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!--        //jquery for toggle sub menus-->
<!--        $('.sub-btn').click(function(){-->
<!--            $(this).next('.sub-menu').slideToggle();-->
<!--            $(this).find('.dropdown').toggleClass('rotate');-->
<!--        });-->

<!--        //jquery for expand and collapse the sidebar-->
<!--        $('.menu-btn').click(function(){-->
<!--            $('.side-bar').addClass('active');-->
<!--            $('.menu-btn').css("visibility", "hidden");-->
<!--        });-->

<!--        $('.close-btn').click(function(){-->
<!--            $('.side-bar').removeClass('active');-->
<!--            $('.menu-btn').css("visibility", "visible");-->
<!--        });-->
<!--    });-->
<!--</script>-->
</body>
</html>



















<!------------------------------------------------------------------------------------------------------------------>
<?php
    }
     else{
    header('StudentLogin.php');
     }
 }
 else{
   header('StudentLogin.php');
}



































