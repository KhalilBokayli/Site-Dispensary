<!DOCTYPE html>
<?php
include('func1.php');
$pid = '';
$ID = '';
$appdate = '';
$apptime = '';
$fname = '';
$lname = '';
$doctor = $_SESSION['dname'];
if (isset($_GET['pid']) && isset($_GET['ID']) && ($_GET['appdate']) && isset($_GET['apptime']) && isset($_GET['fname']) && isset($_GET['lname'])) {
    $pid = $_GET['pid'];
    $ID = $_GET['ID'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $appdate = $_GET['appdate'];
    $apptime = $_GET['apptime'];
}



if (isset($_POST['prescribe']) && isset($_POST['pid']) && isset($_POST['ID']) && isset($_POST['appdate']) && isset($_POST['apptime']) && isset($_POST['lname']) && isset($_POST['fname'])) {
    $appdate = $_POST['appdate'];
    $apptime = $_POST['apptime'];
    $disease = $_POST['disease'];
    $allergy = $_POST['allergy'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pid = $_POST['pid'];
    $ID = $_POST['ID'];
    $prescription = $_POST['prescription'];

    $query = mysqli_query($con, "insert into prestb(doctor,pid,ID,fname,lname,appdate,apptime,disease,allergy,prescription) values ('$doctor','$pid','$ID','$fname','$lname','$appdate','$apptime','$disease','$allergy','$prescription')");

    if ($query) {
        echo "<script>alert('Prescribed successfully!');</script>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "<script>alert('GET is not working!');</script>";
    } else {
        echo "<script>alert('Unable to process your request. Try again!');</script>";
    }
}

?>

<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, -scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">



    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
   <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Global Hospital </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

<body style="padding-top:0px;">
    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        barja , Lebanon
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            ...@....com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/icons/pharmacy.png" class="logo img-fluid" alt="">
                <span>
                    DISPENSARY

                </span>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="logout1.php">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i><strong>Logout</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="doctor-panel.php">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><strong>Back</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>



            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.html#section_7">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    </nav>

    </head>
    <style type="text/css">
        button:hover {
            cursor: pointer;
        }

        #inputbtn:hover {
            cursor: pointer;
        }

        .text-center {
            text-align: center;
            margin-top: -30px;

            /* Espace supplémentaire au-dessus du bouton si nécessaire */
        }
    </style>

    <!-- <body style="padding-top:50px;"> -->
    <div class="container-fluid" style="margin-top:50px;">
        <!-- <h3 style="margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome
            &nbsp<?php echo $doctor ?>
        </h3> -->

        <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
            <form class="form-group" name="prescribeform" method="post" action="prescribe.php">

                <div class="row">
                    <div class="col-md-4"><label style="color: #5bc1ac; font-size: 20px;"><strong>Disease:</strong></label></div>
                    <div class="col-md-8">
                        <!-- <input type="text" class="form-control" name="disease" required> -->
                        <textarea id="disease" cols="86" rows="3" name="disease" required></textarea>
                    </div><br><br><br>

                    <div class="col-md-4"><label style="color: #5bc1ac;font-size: 20px;"><strong>Allergies:</strong></label></div>
                    <div class="col-md-8">
                        <!-- <input type="text"  class="form-control" name="allergy" required> -->
                        <textarea id="allergy" cols="86" rows="4" name="allergy" required></textarea>
                    </div><br><br><br>
                    <div class="col-md-4"><label style="color: #5bc1ac;font-size: 20px;"><strong>Prescription:</strong></label></div>
                    <div class="col-md-8">
                        <!-- <input type="text" class="form-control"  name="prescription"  required> -->
                        <textarea id="prescription" cols="86" rows="5" name="prescription" required></textarea>
                    </div><br><br><br>
                    <input type="hidden" name="fname" value="<?php echo $fname ?>" />
                    <input type="hidden" name="lname" value="<?php echo $lname ?>" />
                    <input type="hidden" name="appdate" value="<?php echo $appdate ?>" />
                    <input type="hidden" name="apptime" value="<?php echo $apptime ?>" />
                    <input type="hidden" name="pid" value="<?php echo $pid ?>" />
                    <input type="hidden" name="ID" value="<?php echo $ID ?>" />
                    <br><br><br><br>
                    <div class="text-center">
                        <input type="submit" name="prescribe" value="Prescribe" class="btn btn-primary" style="background-color: #5bc1ac;">
                    </div>


            </form>
            <br>

        </div>
    </div>