<?php

session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Search</title>

         <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" >
       <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <style>

        .Search {
          background-color: #FF7F50; 
        } 
      
</style>

        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#">CleanXCare</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="indHome.php">Home</a></li>
                     
                    </ul>
                </div>
               
            </div>
        </nav>
        <header class="masthead">
        <?php
include('connection.php');
          $id1 = $_REQUEST['id'];
          $HKId=str_replace("'", "", $id1);
          $id=$_SESSION['id'];

          $query="SELECT * from hksch WHERE hkid='$HKId' AND Status='Available'";
          $run=mysqli_query($connection,$query)
          or die("Could not find".mysqli_error($connection));
          $rows = mysqli_num_rows($run);

          if ($rows==0){ 
    ?>
    <script type="text/javascript">
    alert("Sorry this house keeper is busy now! No available slots!");
    window.location.replace("searchOptions.php");
    </script>
    <?php 
     mysqli_close($connection);
            exit; 
            }



else {
    ?>
    <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold"><?php echo ($rows) ?> Available Slots Found!</h2>
                        <hr class="divider my-4" />
                    </div>
                     <div class="text-center">
          <div class="mt-0">
            <?php
            while ($rows=mysqli_fetch_array($run)) {
                ?>
                <div class="rectangle">  <br><h6>Day: <?php echo($rows['Day']) ?> | Date: <?php echo($rows['Date']) ?>| Time: <?php echo($rows['Time']) ?></h6>  <a class="btn search btn-light js-scroll-trigger" href="ReserveAction.php?SID='<?php echo($rows['SchID']) ?>'&HID='<?php echo($rows['HkId']) ?>'">Reserve</a>     </div>
                 <?php
                  }
           ?>
        
         </div>
                   
                </div>
            </div>
<?php
}

?>

  
        </header>

      
              
    </body>
</html>