<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<html >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Search</title>

         <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" >
       
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        
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
    <div class="head">Find Your House Keeper</div>        
    <form ... onsubmit="return checkForm(this);" action="searchByName.php" method="POST" id="login-form">
        <div class="form-group">
           <p>  <label> House Keeper Name </label> 
      <input type="name" name="searchN" placeholder="Enter house keeper name here " class="form-control" autofocus > </p>
      
        </div>
       
         <div class="row justify-content-center">
        <input   class="btn btn-primary btn-xl js-scroll-trigger" type="submit" value="Search" name="Search">
</div>

    
    </form>
  
        </header>
        <script>
         function checkForm(form)
  {
       
 if(form.searchN.value == "") {
      alert("Error: Name cannot be blank!");
      form.searchN.focus();
      return false;
    }
        
      
        
        syntax= /^[a-zA-Z-' ]*$/;
    if(!syntax.test(form.searchN.value)) {
        alert("Error: Name accept Only letters and white spaces!");
        form.searchN.focus();
        return false;
      }

      return true;
  }
  </script>
       
    </body>
</html>

  
