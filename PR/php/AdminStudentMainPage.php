<?php
//if($_SERVER["REQUEST_METHOD"] =="POST")
//{
//
//    $errors=[];
//
//    if(!isset($_POST["Username"]))
//    {
//        array_push($errors,"Username is required .");
//    }
//    elseif (strlen($_POST["Username"]) < 6)
//    {
//        array_push($errors,"Username should be more than 6 charactar.");
//    }
//    elseif (strlen($_POST["Username"]) > 100)
//    {
//        array_push($errors,"Username should be more than 100 charactar.");
//    }
//
//
//
//    if(!isset($_POST["Password"]))
//    {
//        array_push($errors,"Password is required .");
//    }
//    elseif (strlen($_POST["Password"]) < 6)
//    {
//        array_push($errors,"Password should be more than 6 charactar.");
//    }
//    elseif (strlen($_POST["Password"]) > 100)
//    {
//        array_push($errors,"Password should be more than 100 charactar.");
//    }
//
//
//    if (count($errors)<=0)
//    {
//
//        $Username = $_POST["Username"];
//        $Password = $_POST["Password"];
//
//        print_r($Username);
//        echo "<br>";
//        print_r($Password);
//        echo "<br>";
//
//    }
//
//
//
//}
//
//?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="Staylesheets/StudentLogin.css">
    <title>Bootstrap Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Staylesheets/mainCss.css">

    <!------------------------------{To link the Footer}------------------------------------->
    <link rel="stylesheet" href="../Staylesheets/Icon.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--------------------------------------------------------------------------------------->

    <!--    --------------------------------------------------------------------------------------------------------------->

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

    <!--    --------------------------------------------------------------------------------------------------------------->
</head>

<body>





<!------------------------------------------------------------------------------------------------------------------->



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

</head>
<body>
<!--------------------------------------------------------------------------------------------------------------------->

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
                        <a href="../admin.html" class="nav-item nav-link active">Home</a>
                        <a href="AdminEmployeeMainPage.php" class="nav-item nav-link">Employee</a>
                        <a href="AdminStudentMainPage.php" class="nav-item nav-link">Student</a>
                        <a href="AdminVehicleMainPage.php" class="nav-item nav-link">Vehivle</a>
                        <a href="../mainPage.html" class="nav-item nav-link">Logout</a>
                        <!--                        <div class="nav-item dropdown">-->
                        <!--                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>-->
                        <!--                            <div class="dropdown-menu">-->
                        <!--                                <a href="AdminLogin.php" class="dropdown-item">Admin</a>-->
                        <!--                                <a href="EmployeeLogin.php" class="dropdown-item">Employee</a>-->
                        <!--                                <a href="StudentLogin.php" class="dropdown-item">Student</a>-->

                        <!--                            </div>-->
                        <!--                        </div>-->

                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!--------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------->
    <div class="menu-btn">
        <i class="fas fa-bars" style="background: #172035" > </i>
    </div>

    <div class="side-bar" style="background: #172035">
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <div class="menu" >
            <div class="item"><a href="../admin.html"><i class="fas fa-desktop"></i>Home</a></div>
            <div class="item">
                <a href="AdminEmployeeMainPage.php" class="sub-btn"><i class="fas fa-table"></i>Emploee</a>
            </div>
            <div class="item"><a href="AdminStudentMainPage.php"><i class="fas fa-th"></i>Student</a></div>
            <div class="item">
                <a href="AdminVehicleMainPage.php" class="sub-btn"><i class="fas fa-cogs"></i>Vehicle</i></a>

            </div>
            <div class="item"><a href="mainPage.html"><i class="fas fa-info-circle"></i>Logout</a></div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------->

    <script type="text/javascript">
        $(document).ready(function(){
            //jquery for toggle sub menus
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            //jquery for expand and collapse the sidebar
            $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
            });

            $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
            });
        });
    </script>

</body>
</html>

















<!---------------------------------------------------------------------------------------------------------------->


<html>
<head><title>Responsive Table Design - Easy Tutorials</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Staylesheets/EmployeeMeetingTable.css">

    <!--------------------------------------------{ Style}-------------------------------------------------------------->

    <style type="text/css">
        table
        {

            border-collapse: collapse;

            width: 65%;

            color:#172035;
            font-family: "Bold Italic Art";
            font-size: 12px;
            text-align: center;

        }
        th{
            background:#172035 ;
            height: 60px;
            color: white;

        }

        tr:nth-child(even)
        {
            background-color:#f9fafb ;


        }


    </style>
    <!--------------------------------------------{End Style}-------------------------------------------------------------->


</head>
<body>
<img  style="margin-left: 930px; position: relative;position: absolute;padding:10px " width="580" src="../images/AddStudent2.gif" alt="">

<div class="table-box" >

    <!--    ---------------------------------------------------------------------------------------->
    <!--------------------------------------{table}---------------------------------------------------->
    <div class="table-box" >
        <div style="padding-left: 0px">
            <table >
                <tr>
                    <th>Full Name</th>
                    <th>Student ID</th>
                    <th>Phone Number</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Type Of License</th>
                    <th>Email</th>
                    <!--                    <th>Password</th>-->
                    <!--                    <th>Confirm Password</th>-->
                </tr>
                <?php
                $conn = mysqli_connect("localhost","root","","drivingschool");
                $sql ="SELECT * FROM `studentstable2`";

                $result = $conn->query($sql);

                if($result->num_rows >0)
                {
                    while ($row=$result-> fetch_assoc())
                    {
                        echo "<tr><td>" . $row["FullName"] . "</td><td>".$row["ID"] . "</td><td>".$row["PhoneNumber"] . "</td><td>".$row["BirthOfDate"] . "</td><td>".$row["Gender"]. "</td><td>".$row["TypeOfLicense"]. "</td><td>".$row["Email"] . "</td><tr>";
                    }
                }
                else
                {
                    echo "no Result";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </div>
    <!--------------------------------------{End table}---------------------------------------------------->
    <br><br><br><br>

    <div align="right">

        <button class="btn btn-primary" type="submit" style="border-radius: 50px;width: 150px;background-color: #172035;border: none">
            <a href="DeleteStudent.php" style="text-decoration:none ;color: white">Delete Student </a>
        </button>

        <button class="btn btn-primary" type="submit" style="border-radius: 50px;width: 150px;background-color: #172035;border: none">
            <a href="AddStudent.php" style="text-decoration:none ;color: white">    Add    Student  </a>
        </button>

    </div>





</div>
</body>
</html>











<!---------------------------------------------------------------------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>



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
</body>

</html>


<!---------------------------------------------------------------------------------------------------------------------->

