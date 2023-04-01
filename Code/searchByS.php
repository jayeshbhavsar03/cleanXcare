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

         <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
       
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css?v=<?php echo time();?>" rel="stylesheet" />
        <link href="css/common.css?v=<?php echo time();?>" rel="stylesheet" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

       
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
             <div class="form-box">
    <div class="head color-back-2">What services you want?</div>        
    <form ... onsubmit="return checkForm(this);" action="searchByService.php" method="POST" id="login-form">
        <div class="form-group">
          <p> <label> Services Price: </label> 
       <br>
      <input type="checkbox"  name="service[]" value="cooking" ><label>₹ 1000</label>
      <br> 
      <input type="checkbox"  name="service[]" value="washing"> <label>₹ 2000</label>
      <br>
      <input type="checkbox"  name="service[]" value="dusting"> <label>₹ 3000</label>
      <br>
      <input type="checkbox"  name="service[]" value="baby-setting"> <label>₹ 4000</label>
      </p>

        </div>
       
         <div class="row justify-content-center">
        <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" name="search" value="Search"> 
</div>

       
    </form>
  
        </header>
         <script>
         function checkForm(form)
  {
      var Checked = $('input[name="service[]"]:checked').length > 0; 
       if(!Checked){
         alert("Error: You have to select one service at least!");
         return false;
       }
      
       return true;

     }
       

        
      
        
        
        </script>
    </body>
</html>
