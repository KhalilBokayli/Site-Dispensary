<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "myhmsdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['docsub1'])) {

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $phone = mysqli_real_escape_string($con, $_POST['contact']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, md5($_POST['password']));
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $cpass = mysqli_real_escape_string($con, md5($_POST['cpassword']));
    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($conn, "SELECT * FROM patreg WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        $message[] = 'user already exist!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } else {
            mysqli_query($conn, "INSERT INTO patreg(fname, lname, gender, email, contact, password , cpassword) VALUES('$fname','$lname','$gender', '$email','$phone', '$pass','$cpass')") or die('query failed');
            $message[] = 'registered successfully!';
            // header('location:login.php');
        }
    }


} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="register.php" method="post" role="form">

                            <h3 class="mb-4">Register as Patient</h3>

                            <div class="row">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mt-2">
                                        <label><b>first-name</b></label>
                                        <input type="text" class="form-control" placeholder="First Name *" name="fname"
                                            onkeydown="return alphaOnly(event);" required />
                                    </div>
                                    <div class="col-lg-6 col-12 mt-2">
                                        <label><b>last-name</b></label>
                                        <input type="text" class="form-control" placeholder="Last Name *" name="lname"
                                            onkeydown="return alphaOnly(event);" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mt-2">
                                        <label><b>email</b></label>
                                        <input type="email" name="email" id="donation-email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="email@gmail.com" required>
                                    </div>
                                    <div class="col-lg-6 col-12 mt-2">
                                        <label><b>phone</b></label>
                                        <input type="tel" minlength="10" maxlength="10" name="contact"
                                            class="form-control" placeholder="Your Phone *" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mt-2">
                                        <label><b>password</b></label>
                                        <input type="password" class="form-control" placeholder="Password *"
                                            id="password" name="password" onkeyup='check();' required />
                                    </div>

                                    <div class="col-lg-6 col-12 mt-2">
                                        <label><b>confirmpass</b></label>
                                        <input type="password" class="form-control" id="cpassword"
                                            placeholder="Confirm Password *" name="cpassword" onkeyup='check();'
                                            required /><span id='message'></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-4 pt-1">Choose </h5>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefault9">
                                        <label class="form-check-label" for="flexRadioDefault9">
                                            <!--<i class="bi-credit-card custom-icon ms-1"></i>-->
                                            <b> ♀ female</b>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="Male"
                                            id="flexRadioDefault10">
                                        <label class="form-check-label" for="flexRadioDefault10">
                                            <!--<i class="bi-paypal custom-icon ms-1"></i>-->
                                            <b>♂ male</b>
                                        </label>
                                    </div>

                                    <a href="index1.php">Already have an account?</a>
                                    <input type="submit" class="form-control mt-4" name="docsub1" value="Login" />


                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

</body>

</html>