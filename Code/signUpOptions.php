<?php session_start();

if(isset($_SESSION['email']))
        header("Location: Login.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CleanXCare</title>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <link href="css/styles.css?v=<?php echo time();?>" rel="stylesheet" />
    <link href="css/common.css?v=<?php echo time();?>" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top">

    <!-- Form -->
    <header class="masthead">



        <div class="form-box">


            <div class="head  login-head"> What are you looking for? </div>

            <div class="row h-100 align-items-center justify-content-center text-center">
                <a href="HKeeperSignUp.php">
                    <button class="btn option">I am looking for a house clener job<br></button></a>
                <br>
                <a href="individualSignUp.php">
                    <button class="btn option">I am looking for a house cleaning services.</h6><br></button></a>


            </div>
        </div>
    </header>

    <!-- Form -->







</body>

</html>