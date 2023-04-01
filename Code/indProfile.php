<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Profile</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />

    <link href="css/styles.css?v=<?php echo time();?>" rel="stylesheet" />
    <link href="css/common.css?v=<?php echo time();?>" rel="stylesheet" />
    <link href="css/indProfile.css?v=<?php echo time();?>" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger">Profile</a>


            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="indHome.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" name="logout" href="SignOut.php">Log
                            Out</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- <section>
        <div class="div_Profile">
            <p class="h_Lable"> Name: <span style="color: black"> <?php echo ($_SESSION['user']); ?></span> </p>
            <p class="h_Lable"> Age: <span style="color: black"><?php echo ($_SESSION['age']); ?></span></p>
            <p class="h_Lable"> E-mail: <span style="color: skyblue"> <?php echo ($_SESSION['email']); ?></span></p>
            <p class="h_Lable"> Location: <span style="color: skyblue"> <?php echo ($_SESSION['location']); ?></span>
            </p>
        </div>

        <div class="row h-100 align-items-center justify-content-center  text-center">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="EditIndProfile.php">Edit Profile</a>
        </div>

        <br>
        <div class=" align-items-center justify-content-center pad text-center">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="DeleteAccount.php">DELETE ACCOUNT</a>
        </div>
    </section> -->

    <section class="profile" style="margin: 9rem 15rem;">
        <header class="header">
            <div class="details">
                <img src="assets/img/indiv.png" alt="John Doe" class="profile-pic">
                <h1 class="heading"><span style="color: black"> <?php echo ($_SESSION['user']); ?></span></h1>
                <div class="location">
                    <p><span style="color: skyblue"> <?php echo ($_SESSION['email']); ?></span></p>
                </div>
                <p class="h_Lable"> Age: <span style="color: black"><?php echo ($_SESSION['age']); ?></span></p>
                <p class="h_Lable"> Location: <span style="color: skyblue">
                        <?php echo ($_SESSION['location']); ?></span></p>

                <div class="row h-100 align-items-center justify-content-center  text-center">
                    <a class="btn btn-primary btn-profile js-scroll-trigger" href="EditIndProfile.php">Edit Profile</a>
                </div>

                <br>
                <div class=" align-items-center justify-content-center text-center">
                    <a class="btn btn-primary btn-profile js-scroll-trigger" href="DeleteAccount.php">DELETE ACCOUNT</a>
                </div>
            </div>
        </header>
    </section>

</body>

</html>