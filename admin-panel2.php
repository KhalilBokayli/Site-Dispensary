<!DOCTYPE html>
<?php
include('func.php');
include('newfunc.php');
$con = mysqli_connect("localhost", "root", "", "myhmsdb");


//$pid = $_SESSION['pid'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$gender = $_SESSION['gender'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];



if (isset($_POST['app-submit'])) {
    $pid = $_SESSION['pid']; // Assuming you set this session variable somewhere
    $typetest = $_POST['typetest'];
    $appdate = $_POST['appdate'];
    $apptime = $_POST['apptime'];
    $cur_date = date("Y-m-d");
    date_default_timezone_set('Asia/Kolkata');
    $cur_time = date("H:i:s");
    $apptime1 = strtotime($apptime);
    $appdate1 = strtotime($appdate);

    if (date("Y-m-d", $appdate1) >= $cur_date) {
        if ((date("Y-m-d", $appdate1) == $cur_date and date("H:i:s", $apptime1) > $cur_time) or date("Y-m-d", $appdate1) > $cur_date) {
            $check_query = mysqli_query($con, "SELECT apptime FROM appointmentlab WHERE appdate='$appdate' AND apptime='$apptime'");

            if (mysqli_num_rows($check_query) == 0) {
                $query = mysqli_query($con, "INSERT INTO appointmentlab (pid, fname, lname, gender, email, contact, typetest, appdate, apptime, userStatus, LabStatus) VALUES ('$pid', '$fname', '$lname', '$gender', '$email', '$contact', '$typetest', '$appdate', '$apptime', '1', '1')");

                if ($query) {
                    echo "<script>alert('Your appointment successfully booked');</script>";
                } else {
                    echo "<script>alert('Unable to process your request. Please try again!');</script>";
                }
            } else {
                echo "<script>alert('We are sorry to inform that the lab is not available in this time or date. Please choose different time or date!');</script>";
            }
        } else {
            echo "<script>alert('Select a time or date in the future!');</script>";
        }
    } else {
        echo "<script>alert('Select a time or date in the future!');</script>";
    }
}

if (isset($_GET['cancel'])) {
    $query = mysqli_query($con, "UPDATE appointmentlab SET userStatus='0' WHERE ID = '" . $_GET['ID'] . "'");
    if ($query) {
        echo "<script>alert('Your appointment successfully cancelled');</script>";
    }
}




// function get_specs()
// {
//     $con = mysqli_connect("localhost", "root", "", "myhmsdb");
//     $query = mysqli_query($con, "select username,spec from doctb");
//     $docarray = array();
//     while ($row = mysqli_fetch_assoc($query)) {
//         $docarray[] = $row;
//     }
//     return json_encode($docarray);
// }

?>
<!---------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------->
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />


    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <style>
        .bg-primary {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #342ac1;
            border-color: #007bff;
        }

        .text-primary {
            color: #342ac1 !important;
        }

        .btn-primary {
            background-color: #3c50c1;
            border-color: #3c50c1;
        }
    </style>


    </nav>
</head>
<style type="text/css">
    button:hover {
        cursor: pointer;
    }

    #inputbtn:hover {
        cursor: pointer;
    }
</style>

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
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                    </ul>
                </div>

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
    <div class="container-fluid" style="margin-top:50px;">
        <h3 style="margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome
            &nbsp<?php echo $username ?>!
        </h3>
        <div class="row">
            <div class="col-md-4" style="max-width:25%; margin-top: 3%">

                <div class="gif-container">
                    <img src="images/icons/swipe-up.gif" alt="GIF" class="small-gif rotated-gif">
                </div>
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" style="background-color: #5bc1ac" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
                    <a class="list-group-item list-group-item-action" href="#app-hist" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">Appointment History</a>
                    <style>
                        .gif-container {
                            text-align: center;
                            margin-top: 20px;
                            /* Ajustez selon votre mise en page */
                        }

                        .small-gif {
                            width: 50px;
                            /* Ajustez la taille du GIF selon vos besoins */
                            height: auto;
                            /* Gardez le rapport hauteur/largeur d'origine */
                            display: block;
                            margin: auto;
                        }

                        .rotated-gif {
                            transform: rotate(180deg);
                            /* Changez l'angle de rotation selon vos besoins */
                        }
                    </style>
                </div><br>
            </div>
            <div class="col-md-8" style="margin-top: 3%;">
                <div class="tab-content" id="nav-tabContent" style="width: 950px;">


                    <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-sm-4" style="left: 5%">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                                            <div class="icon-container9">
                                                <img src="images/icons/clock.png" alt="Icone">
                                                <style>
                                                    .icon-container {
                                                        text-align: center;
                                                        margin-top: 0px;
                                                        /* Ajustez selon votre mise en page */
                                                    }

                                                    .icon-container9 img {
                                                        width: 50px;
                                                        /* Ajustez la taille de l'icône selon vos besoins */
                                                        height: 50px;
                                                        /* Ajustez la taille de l'icône selon vos besoins */
                                                    }
                                                </style>
                                            </div>
                                            <h4 class="StepTitle" style="margin-top: 5%;"> Book My Appointment</h4>
                                            <script>
                                                function clickDiv(id) {
                                                    document.querySelector(id).click();
                                                }
                                            </script>
                                            <p class="links cl-effect-1">
                                                <a href="#list-home" onclick="clickDiv('#list-home-list')">
                                                    Book Appointment
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4" style="left: 10%">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                                            <div class="icon-container10">
                                                <img src="images/icons/schedule.png" alt="Icone">
                                                <style>
                                                    .icon-container {
                                                        text-align: center;
                                                        margin-top: 0px;
                                                        /* Ajustez selon votre mise en page */
                                                    }

                                                    .icon-container10 img {
                                                        width: 50px;
                                                        /* Ajustez la taille de l'icône selon vos besoins */
                                                        height: 50px;
                                                        /* Ajustez la taille de l'icône selon vos besoins */
                                                    }
                                                </style>
                                            </div>
                                            <h4 class="StepTitle" style="margin-top: 5%;">My Appointments</h2>

                                                <p class="cl-effect-1">
                                                    <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                                                        View Appointment History
                                                    </a>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <h4>Appointment LABORATORY <span style="font-size: 20px;">🔬</span></h4>
                                    </center><br>
                                    <form class="form-group" method="post" action="admin-panel2.php">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="typetest">Type Test:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="typetest" id="typetest">
                                            </div>

                                            <br><br>
                                            <div class="col-md-4"><label>Appointment Date</label></div>
                                            <div class="col-md-8"><input type="date" class="form-control datepicker" name="appdate"></div>
                                            <br><br>

                                            <div class="col-md-4"><label>Appointment Time</label></div>
                                            <div class="col-md-8">
                                                <!-- <input type="time" class="form-control" name="apptime"> -->
                                                <select name="apptime" class="form-control" id="apptime" required="required">
                                                    <option value="" disabled selected>Select Time</option>
                                                    <option value="08:00:00">8:00 AM</option>
                                                    <option value="10:00:00">10:00 AM</option>
                                                    <option value="12:00:00">12:00 PM</option>
                                                    <option value="14:00:00">2:00 PM</option>
                                                    <option value="16:00:00">4:00 PM</option>
                                                </select>


                                            </div><br><br>

                                            <div class="col-md-4">
                                                <input type="submit" name="app-submit" value="Create new entry" class="btn btn-primary" id="inputbtn">
                                            </div>
                                            <div class="col-md-8"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><br>
                    </div>

                    <div class="tab-pane fade" id="app-hist" role="tabpanel" aria-labelledby="list-pat-list">

                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th scope="col">Appointment Date</th>
                                    <th scope="col">Appointment Time</th>
                                    <th scope="col">Current Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                                global $con;

                                $query = "select ID,appdate,apptime,userStatus,LabStatus from appointmentlab where fname ='$fname' and lname='$lname';";
                                $result = mysqli_query($con, $query);
                                while ($row = mysqli_fetch_array($result)) {

                                    #$fname = $row['fname'];   
                                    #$lname = $row['lname'];
                                    #$email = $row['email'];
                                    #$contact = $row['contact'];
                                ?>
                                    <tr>
                                        <td><?php echo $row['appdate']; ?></td>
                                        <td><?php echo $row['apptime']; ?></td>
                                        <td>
                                            <?php if (($row['userStatus'] == 1) && ($row['LabStatus'] == 1)) {
                                                echo "Active";
                                            }
                                            if (($row['userStatus'] == 0) && ($row['LabStatus'] == 1)) {
                                                echo "Cancelled by You";
                                            }

                                            if (($row['userStatus'] == 1) && ($row['LabStatus'] == 0)) {
                                                echo "Cancelled by lab";
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <?php if (($row['userStatus'] == 1) && ($row['LabStatus'] == 1)) { ?>


                                                <a href="admin-panel2.php?ID=<?php echo $row['ID'] ?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove"><button class="btn btn-danger">Cancel</button></a>
                                            <?php } else {

                                                echo "Cancelled";
                                            } ?>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <form class="form-group" method="post" action="func.php">
                            <label>Doctors name: </label>
                            <input type="text" name="name" placeholder="Enter doctors name" class="form-control">
                            <br>
                            <input type="submit" name="doc_sub" value="Add Doctor" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
    </script>



</body>

</html>