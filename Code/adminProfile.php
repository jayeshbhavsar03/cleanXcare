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
       
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
       
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        
        <link href="css/styles.css" rel="stylesheet" />
        <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
    
    
    <body>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" >Profile</a> 
                
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adminHome.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="SignOut.php">Log Out</a></li>
                        
                    </ul>
                </div>
            </div>
         </nav>
    
          <section class="page-section bg-primary" id="Profile">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" text-center">
                        
                        <div class="img_Profile">
                            
                        <img src="assets/img/admin.png" style = "width: 80px" "height: 80px" >
                        
                        </div>
                
                        
                    </div>
                </div>
              </div>
        </section>
        <section>
        
              
                <div  class= "div_Profile">
                        
                        <p class="h_Lable" > Name: <span style="color: black"> <?php echo ($_SESSION['user']); ?></span> </p> 
                    
                    
                        <p class="h_Lable"> E-mail:  <span style="color: skyblue"> <?php echo ($_SESSION['email']); ?></span></p>
                        
                    <p class="h_Lable"> Birth Date:  <span style="color: black"><?php echo ($_SESSION['BDate']); ?> </span></p>
                    
                        <p class="h_Lable"> Phone Number:  <span style="color: black"> <?php echo ($_SESSION['PHNum']); ?></span></p>
                    
                        
                        </div>
            
           <div class="row h-100 align-items-center justify-content-center text-center">
                          <a class="btn btn-primary btn-xl js-scroll-trigger" href="EditAdminProfile.php">Edit Profile</a> 
                    </div>
            
          
                        
        
        
        
        </section>
    
    </body>
</html>