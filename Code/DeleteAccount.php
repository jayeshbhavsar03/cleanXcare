<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Delete Account</title>
       
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
      
        <link href="css/styles.css?v=<?php echo time();?>" rel="stylesheet" />
        <link href="css/common.css?v=<?php echo time();?>" rel="stylesheet" />
        
        <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
  
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">CleanXCare</a>
          
          
          
               <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">??????</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> -->
                
          
          
           
        </nav>
  
     
     
     
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase color-1 font-weight-bold">DELETE ACCOUNT</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">

                 <p class="color-1 font-weight-bold mb-5">Are You Sure You Want To Delete Your Account?</p>
               <p class="color-1 font-weight-light mb-5">Sorry to see you Go! Complete Your Deletion Request By Clicking On The Button Below </p>
     <form  action="DeleteAccount.php" method="Post">
          

                <br> <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" name="delete" value="Delete">
       </form>
                       
                    </div>
                </div>
            </div>
        </header>
    
     
    </body>
</html>

<?php 
if (isset($_POST['delete'])){

include('connection.php');

$email=$_SESSION['email'];

$ind="select * from individual WHERE Email='$email'"; 
$HK="select * from housekeeper WHERE Email='$email'";

$run1=mysqli_query($connection, $ind);
$run2=mysqli_query($connection, $HK);

if (mysqli_num_rows($run1)>0){
     
          $query="Delete from individual WHERE Email='$email'";
          $run=mysqli_query($connection, $query);
          if ($run){
            ?>
            <script> alert('Your account has been deleted. Good Bye!'); 
            window.location.replace('index.php'); 
            </script>
            <?php
            session_start();
           session_destroy();
           exit;
        }
          
          
     
    }

    else {
           $query="Delete from housekeeper WHERE Email='$email'";
          $run=mysqli_query($connection, $query);
          if ($run) {
             ?>
            <script> alert('Your account has been deleted. Good Bye!'); 
            window.location.replace('index.php'); 
            </script>
            <?php
            session_start();
            session_destroy();
            exit;
          }       
    
    }
  
  }
  ?>