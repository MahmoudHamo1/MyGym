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


<!---------------------------------------------------------{SignUp test1}------------------------------------------------------------>
<?php
//if (isset($_POST['txtFirstName'])  && isset($_POST['txtLastName'])&& isset($_POST['txtIdentificationNumber'])&& isset($_POST['txtPhoneNumber'])&& isset($_POST['txtBirthOfDate'])&& isset($_POST['txtGender'])&& isset($_POST['txttypeOfVechils'])&& isset($_POST['txtEmail'])&& isset($_POST['txtPassword'])&& isset($_POST['txtConfirmPassword']) )
//{
////    $uname=$_POST['txtNewUserLogin'];
////    $upass=$_POST['txtNewUserPass'];
//
//    $FirstName=$_POST['txtFirstName'];
//    $LastName=$_POST['txtLastName'];
//    $IdentificationNumber=$_POST['txtIdentificationNumber'];
//    $PhoneNumber=$_POST['txtPhoneNumber'];
//    $BirthOfDate=$_POST['txtBirthOfDate'];
//    $Gender=$_POST['txtGender'];
//    $typeOfVechils=$_POST['txttypeOfVechils'];
//    $Email=$_POST['txtEmail'];
//    $Password=$_POST['txtPassword'];
//    $ConfirmPassword=$_POST['txtConfirmPassword'];
//
//
//
//    try
//    {
//        $db = new mysqli('localhost','root','','drivingschool');
//        $qriStr="INSERT INTO `studentstable` (`FirstName`, `LastName`, `IdentificationNumber`, `PhoneNumber`, `BirthOfDate`, `Gender`, `typeOfVechils`, `Email`, `Password`, `ConfirmPassword`) VALUES ('".$FirstName."','".$LastName."','".$IdentificationNumber."','".$PhoneNumber."','".$BirthOfDate."','".$Gender."','".$typeOfVechils."','".$Email."', SHA1('".$Password."'), SHA1('".$ConfirmPassword."');";
//        $rs=$db->query($qriStr);
//        $db->commit();
////             $db->close();
//
//        if ($rs==0)
//        {
//            header('location:StudentLogin.php');
//        }
//        else
//        {
////            array_push($errors,"UserName is shoosed !!!");
////            echo "User Name is shoosed";
//        }
//
//    }
//    catch (Exception $e)
//    {
//
//    }
//
//
//
//}
//
//
//?>



<!---------------------------------------------------------{SignUp test}------------------------------------------------------------>

<?php
session_start();
$con = mysqli_connect("localhost","root","","drivingschool");

if(isset($_POST['Sign_Up']))
{
    $FirstName=$_POST['txtFirstName'];
    $LastName=$_POST['txtLastName'];
    $IdentificationNumber=$_POST['txtIdentificationNumber'];
    $PhoneNumber=$_POST['txtPhoneNumber'];
    $BirthOfDate = date('Y-m-d',strtotime($_POST['txtBirthOfDate']));
    $Gender=$_POST['txtGender'];
    $typeOfVechils=$_POST['txttypeOfVechils'];
    $Email=$_POST['txtEmail'];
    $Password=$_POST['txtPassword'];
    $ConfirmPassword=$_POST['txtConfirmPassword'];



    $query = "INSERT INTO studentstable (FirstName,LastName,IdentificationNumber,PhoneNumber,BirthOfDate,Gender,typeOfVechils, Email, Password, ConfirmPassword) VALUES ('$FirstName','$LastName','$IdentificationNumber','$PhoneNumber','$BirthOfDate','$Gender','$typeOfVechils','$Email',SHA1('".$Password."'),SHA1('".$ConfirmPassword."'))";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {

        header('location:StudentLogin.php');
    }
    else
    {

        header('location:StudentLogin.php');
    }
}




?>


<!---------------------------------------------------------{SignUp test}------------------------------------------------------------>

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

    <!--    ------------------------------------>
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

    <!--    ------------------------------------>
</head>

<body>
<!-------------------------------------------------------------------------------------------------------------------->
<!--<div id="menu"  >-->
<!--    <a href="mainPage.html"><img src="../pic/logo.png" alt="" width="230" height="40" ></a>-->
<!--    <ul>-->
<!--        <li>-->
<!--            <a href="../mainPage.html"><i class="fa fa-home"></i> Home</a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#About"><i class="fa fa-address-card"></i>  About us</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#Courses"><i class="fas fa-book"></i> Courses</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#Service"><i class="fa fa-address-card"></i> Service</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#Contact"><i class="fa fa-phone"></i>   Contact</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#Login"><i class="fa fa-sign-in"></i>      Login</a>-->
<!--            <div class="Login-menu-1">-->
<!--                <ul>-->
<!--                    <li><a href="StudentLogin.php"> Student </a> </li>-->
<!--                    <li><a href="EmployeeLogin.php"> Employee </a> </li>-->
<!--                    <li><a href="AdminLogin.php"> Admin </a> </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->
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
                        <a href="../mainPage.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
<!--                        <a href="team.html" class="nav-item nav-link">Courses</a>-->
                        <a href="portfolio.html" class="nav-item nav-link">Contact</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu">
                                <a href="AdminLogin.php" class="dropdown-item">Admin</a>
                                <a href="EmployeeLogin.php" class="dropdown-item">Employee</a>
                                <a href="StudentLogin.php" class="dropdown-item">Student</a>

                            </div>
                        </div>

                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!--------------------------------------------------------------------------------------------------------------------->
<div class="container my-5">
    <img  style="margin-left: 920px; position: relative;position: absolute"height="400"  width="260" src="../images/StudentSignUp1.png" alt="">

    <div class="row">
        <div class="col-12 col-md-6 offset-0 offset-md-3">
            <div class="card shadow border shadow-lg">
                <div class="card-body">
                    <h2 class="text-center" style="color: #172035 ;font-family: 'Bold Italic Art'">
                        Sign Up
                    </h2>
<!--                    --><?php //if(isset($errors) &&count($errors)>0) {?>
<!---->
<!--                        <div class="alert-danger alert">-->
<!---->
<!--                            <ul class="my-0 list-unstyled">-->
<!--                                --><?php //foreach ($errors as $error){ ?>
<!--                                    <li>-->
<!--                                        --><?php //echo $error ;?>
<!--                                    </li>-->
<!--                                --><?php //} ?>
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!--                    --><?php //   }     ?>











                    <?php
                    if(isset($_SESSION['status']))
                    {
                        echo "<h4>".$_SESSION['status']."</h4>";
                        unset($_SESSION['status']);
                    }
                    ?>

                    <form action="signUpStudent.php" method="post">



                        <div class="from-group row">

                            <label for="First Name" class="col-form-label col-12">
                                First Name
                            </label>

                            <div class="col-12">
                                <input type="text" name="txtFirstName" class="form-control">
                            </div>

                        </div>



                        <div class="from-group row">

                            <label for="Last Name" class="col-form-label col-12">
                                Last Name
                            </label>

                            <div class="col-12">
                                <input type="text" name="txtLastName" class="form-control">
                            </div>

                        </div>



                        <div class="from-group row">

                            <label for="Identification Number" class="col-form-label col-12">
                                Identification Number
                            </label>

                            <div class="col-12">
                                <input type="text" name="txtIdentificationNumber" class="form-control">
                            </div>

                        </div>



                        <div class="from-group row">

                            <label for="Phone Number" class="col-form-label col-12">
                                Phone Number
                            </label>

                            <div class="col-12">
                                <input type="text" name="txtPhoneNumber" class="form-control">
                            </div>

                        </div>




                        <div class="from-group row">

                            <label for="BirthOfDate" class="col-form-label col-12">
                                BirthOfDate
                            </label>

                            <div class="col-12">
                                <input type="date" name="txtBirthOfDate"  class="form-control">
                            </div>

                        </div>






                        <div class="from-group row">

                            <label for="Gender" class="col-form-label col-12">
                                Gender
                            </label>

                            <div class="col-12">
                                <select name="txtGender" id="Gender" class="form-control">
                                    <option selected disabled></option>
                                    <option >Male</option>
                                    <option >Female</option>
                                    <option >Prefer not to say</option>

                                </select>
                            </div>

                        </div>

                        <div class="from-group row">

                            <label for="Gender" class="col-form-label col-12">
                                type of vechils
                            </label>

                            <div class="col-12">
                                <select name="txttypeOfVechils" id="Gender" class="form-control">
                                    <option  selected disabled></option>
                                    <option >Car</option>
                                    <option >Bus</option>
                                    <option >Motor</option>
                                    <option >Kabena</option>
                                    <option >Taxi</option>
                                    <option >Heavy Truck</option>

                                </select>
                            </div>

                        </div>


                        <div class="from-group row">

                            <label for="Email" class="col-form-label col-12">
                                Email
                            </label>

                            <div class="col-12">
                                <input type="text" name="txtEmail" class="form-control">
                            </div>

                        </div>


                        <div class="from-group row">
                            <label for="Password" class="col-form-label col-12">
                                Password
                            </label>

                            <div class="col-12">
                                <input type="password" name="txtPassword" class="form-control">
                            </div>
                        </div>

                        <div class="from-group row">
                            <label for="Confirm Password" class="col-form-label col-12">
                                Confirm Password
                            </label>

                            <div class="col-12">
                                <input type="password" name="txtConfirmPassword" class="form-control">
                            </div>
                        </div>





                        <br>
                        <div align="right">

                                <button class="btn btn-primary" type="submit" style="border-radius: 50px;width: 150px">
                                    <a href="StudentLogin.php" style="text-decoration:none ;color: white">   Cancel </a>
                                </button>


<!--                            <input class="btn btn-primary" type="submit" style="width: 150px;border-radius: 50px"  value="Register">-->

                            <button class="btn btn-primary" style="width: 150px;border-radius: 50px" type="submit" name="Sign_Up">Register</button>

<!--                                <button class="btn btn-primary" type="submit" style="border-radius: 50px;width: 150px">-->
<!--                                    <a href="StudentLogin.php"style="text-decoration:none ;color: white">    Register  </a>-->
<!--                                </button>-->



                        </div>




                    </form>

                </div>

            </div>

        </div>

    </div>
</div>



</div>


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
