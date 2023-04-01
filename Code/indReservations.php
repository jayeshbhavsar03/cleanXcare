<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
  //include ("UpdateResStatus.php");
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Reservations</title>

         <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" >
         <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
       
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

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
        <!-- Masthead-->
        <header class="masthead">
         <?php
         $id=$_SESSION['id'];
           
         
  include('connection.php');

 // Confirmed Res
$query1 = "SELECT FullName, HourPrice, TypeOfExp, Day, Date, Time, reservations.Status, housekeeper.hkID, ResID,hksch.SchID From housekeeper inner JOIN hksch ON housekeeper.HkID=hksch.HkId INNER JOIN reservations ON hksch.SchID =reservations.SchID WHERE reservations.indID='$id' AND reservations.Status='Confirmed'";

$result1 = mysqli_query($connection, $query1);
$rows1 = mysqli_num_rows($result1);

// Completed Res
$query2 = "SELECT FullName, HourPrice, TypeOfExp, Day, Date, Time, reservations.Status, housekeeper.hkID, ResID,hksch.SchID From housekeeper inner JOIN hksch ON housekeeper.HkID=hksch.HkId INNER JOIN reservations ON hksch.SchID =reservations.SchID WHERE reservations.indID='$id' AND reservations.Status='Completed'";

$result2 = mysqli_query($connection, $query2);
$rows2 = mysqli_num_rows($result2);



if ($rows1==0&&$rows2==0){
    ?>
    <script>
    alert("You Do Not Have Any Reservations Yet!");
    window.location.replace("indHome.php");
    </script>
    <?php 
     mysqli_close($connection);
            exit;  
}
 else {
    $RowsT=$rows1+$rows2;
    ?>
    <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold"><?php echo ($RowsT) ?> Reservations Found!</h2>
                        <hr class="divider my-4" />
                    </div>
                     <div class="text-center">
          <div class="mt-0">
            <?php
            if($rows1>0){
            while ($rows1=mysqli_fetch_array($result1)) {
                ?>
                <div class="rectangle">    <a class = "active" class ="block" style ="text-decoration: underline" > <i  class ="far fa-user fa-1x" > </i>  <?php echo($rows1['FullName']) ?>  </a> <h6>Hourly Price: <?php echo($rows1['HourPrice']) ?>| Type: <?php echo($rows1['TypeOfExp']) ?> | Day: <?php echo($rows1['Day']) ?> | Date: <?php echo($rows1['Date']) ?>| Time: <?php echo($rows1['Time']) ?> | Status: <?php echo($rows1['Status']) ?></h6>  <a class="btn Search btn-light js-scroll-trigger" href="cancelAction.php?RID='<?php echo($rows1['ResID']) ?>'&HID='<?php echo($rows1['hkID']) ?>'&SID='<?php echo($rows1['SchID']) ?>'">Cancel</a> <a class="btn btn-light  js-scroll-trigger" href="EditResSch.php?RID='<?php echo($rows1['ResID']) ?>'&HID=''<?php echo($rows1['hkID']) ?>'">Edit </a>   </div>
                 <?php
             }
            }
           if($rows2>0){
            while ($rows2=mysqli_fetch_array($result2)) {
                ?>
                <div class="rectangle">    <a class = "active" class ="block" style ="text-decoration: underline" > <i  class ="far fa-user fa-1x" > </i>  <?php echo($rows2['FullName']) ?>  </a> <h6>Hourly Price: <?php echo($rows2['HourPrice']) ?>| Type: <?php echo($rows2['TypeOfExp']) ?> | Day: <?php echo($rows2['Day']) ?> | Date: <?php echo($rows2['Date']) ?>| Time: <?php echo($rows2['Time']) ?> | Status: <?php echo($rows2['Status']) ?></h6>  <a class="btn search btn-light  js-scroll-trigger" href="Rate.php?RID='<?php echo($rows2['ResID']) ?>'&HID=''<?php echo($rows2['hkID']) ?>'">Rate </a> <a class="btn btn-light  js-scroll-trigger" href="Comment.php?RID='<?php echo($rows2['ResID']) ?>'&HID=''<?php echo($rows2['hkID']) ?>'">Comment </a>   </div>
                 <?php
             }
            }
           }

           ?>
        
         </div>
                   
                </div>
            </div>


  
        </header>

      
              
    </body>
</html>


  

