<?php
@$db = new mysqli(localhost, root, "", drivingschool);
if (mysqli_connect_errno())
{
    echo "error";
    die();
}


$Jan = 0;
$Feb = 0;
$Mar=0;
$Apr=0;

$May = 0;
$Jun = 0;
$Jul=0;
$Auq=0;

$Sept = 0;
$Oct = 0;
$Nov=0;
$Dec=0;


if(isset($_GET["txtButton"]))
{
    $strQry = 'SELECT * FROM `students` where  YearOfRegistration = "' . $_GET["txtButton"] . '"';
    $res = $db->query($strQry);
    for ($i = 0; $i < $res->num_rows; $i++)
    {
        $row = $res->fetch_array();
        if ($row[4] == "January")
            $Jan ++;
        elseif ($row[4] == "February")
            $Feb ++;
        elseif ($row[4] == "March")
            $Mar ++;
        elseif ($row[4] == "April")
            $Apr ++;
        elseif ($row[4] == "May")
            $May ++;
        elseif ($row[4] == "June")
            $Jun ++;
        elseif ($row[4] == "July")
            $Jul++;
        elseif ($row[4] == "August")
            $Auq ++;
        elseif ($row[4] == "September")
            $Sept ++;
        elseif ($row[4] == "October")
            $Oct ++;
        elseif ($row[4] == "November")
            $Nov ++;
        elseif ($row[4] == "December")
            $Dec ++;
    }
}

$values=$Jan.",".$Feb.",".$Mar.",".$Apr.",".$May.",".$Jun.",".$Jul.",".$Auq.",".$Sept.",".$Oct.",".$Nov.",".$Dec;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mohammad Halaweh Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <style>
        .vertical-center
        {
            margin: 20px;position: absolute;left: 40%;-ms-transform: translateY(-50%); transform: translateY(-50%);
        }
        body{
            /*background-color: ivory;*/
        }
    </style>
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
</head>
<body >




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




















































<h1 style="text-align:center;font-family: 'Bold Italic Art';border-radius: 90px"> Distribution number of students registered in the driving school in the months of the year
    <?php if (isset($_GET["txtButton"])){echo  $_GET['txtButton'];}else echo "(.....)" ?> </h1>
<!--<img  style="margin-left: 1200px; position: relative;position: absolute;height: 580px" width="300" src="images/Chartimg2.png" alt="">-->


<img  style="margin-left: 1100px; position: relative;position: absolute;padding:10px "height="350" width="370" src="../images/MyChart3.svg" alt="">


<div class=vertical-center style="padding-left: 500px;margin-top: 400px">
    <div class="container">
        <form action="" method="get">
            <br><br><br>
            <input style="border-radius: 50px;height: 30px;width: 280px" type="text" name="txtButton" style="height: 33px" size="25">
            <br><br>
            <input style="font-family: 'Bold Italic Art';font-size: 17px;border-radius: 50px;width: 280px;height: 35px;background-color: #172035 " type="submit" value="Enter The Year" class="btn btn-primary">
        </form>
    </div>
</div>




<div style="width:500px;margin: 0 auto">
    <canvas id="myChart" width="600" height="600"></canvas>
</div>







<br><br><br><br><br><br><br><br>

<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx,
        {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb','Mar','Apr','May','June','July','Auq','Sept','Oct','Nov','Dec'],
                datasets: [{
                    label: '# of Reservation of students in mounths per year ',
                    data: [<?php
                        echo $values;
                        ?>],
                    backgroundColor:
                        [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'


                        ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'

                    ],
                    borderWidth: 5
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
</script>







<!---------------------------------------------------------------------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<br>

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