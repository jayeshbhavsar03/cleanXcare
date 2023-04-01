<?php session_start();

if(!isset($_SESSION['email']))
        header("Location: Login.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title>Edit</title>
       
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
        
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" >
      
        <link href="css/styles.css" rel="stylesheet" />
        <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       
    </head>
    <body id="page-top">
     
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">CleanXCare</a>
              
            </div>
        </nav>

        <!-- Form -->
      

               <header class="masthead1">
          
 
       
<div class="form-box">
    <div class="head">Edit Profile: <h6>Fill What You Want To Edit</h6></div>
           
    <form  ... onsubmit="return checkForm(this);" action="EditAccount.php" method="post" id="login-form">
        <div class="form-group">
          <label class="label-control">Email</label>
          <input type="email" name="email" class="form-control" autofocus>
        </div>
        <div class="form-group">
          <label class="label-control">Password</label> 
          <input type="password" name="Password" class="form-control">
        </div>
        <div class="form-group">
          <label class="label-control">Full Name</label> 
          <input type="text" name="Fname" class="form-control">
        </div>
        <div class="form-group">
          <label class="label-control">Age</label> 
          <input type="number" name="age" class="form-control">
        </div>
       
         <div class="form-group">
         <label class="label-control">Address</label> 
         <input type="text" name="location" class="form-control" placeholder="Neighborhood, Street, House Number" />
          </div>

           <div class="form-group">
     <label class="label-control"> Price Per Hour </label>
     <label class = "h6color"> Must be at least 70 SR/HR (KSA minimum wage)</em></label>

   <input type="number" name="HPrice" class="form-control"> 
  
     </div>

        <div class="form-group">
          <label class="label-control">Years Of Experience </label> 
          <input type="number" name="ExpYears" class="form-control">
        </div>

       

         
        <div class="form-group">
           <label class="label-control">Your Type Of Experience:</label> <br> 
  <input type="radio" id="Cooking" name="service" value="cooking">
  <label for="male" class="label-control">Cooking</label>
  <input type="radio" id="Washing" name="service" value="washing">
  <label for="female">Washing</label>
  <input type="radio" id="Dusting" name="service" value="dusting">
  <label for="other">Dusting</label>
  <input type="radio" id="Baby-setting" name="service" value="baby-setting">
  <label for="other">Baby-setting</label>
     </div> 

     <div class="form-group">
   <label class="label-control">Please Introduce Yourself</label>
 <textarea  name="bio" cols="40" rows="5" class="form-control" placeholder="Enter text here..."></textarea>
</div>

<div class="row justify-content-center">
  <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" name="Edit" value="Edit" >
        </div>  
</div>
    </form>
  </div>

        </header>
         <!-- End Form -->
     <script >
       function checkForm(form)
  {
    
    // Check Sign Up Pass
    if(form.Password.value != "") {
      if(form.Password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.Password.focus();
        return false;
      }
      
      syntax = /[0-9]/;
      if(!syntax.test(form.Password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.Password.focus();
        return false;
      }

      syntax = /[a-z]/;
      if(!syntax.test(form.Password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.Password.focus();
        return false;
      }

      syntax = /[A-Z]/;
      if(!syntax.test(form.Password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.Password.focus();
        return false;
      }

    } 
     
    
    // check if name only contains letters and whitespace
    syntax= /^[a-zA-Z-' ]*$/;
    if(!syntax.test(form.Fname.value)) {
        alert("Error: Name accept Only letters and white spaces!");
        form.Fname.focus();
        return false;
      }

   

    syntax= /^[0-9]*$/;
    if(!syntax.test(form.age.value)) {
        alert("Error: Age accept only positive numbers!");
        form.age.focus();
        return false;
      }

      syntax= /^[0-9]*$/;
    if(!syntax.test(form.HPrice.value)) {
        alert("Error: Price per hour accept only positive numbers!");
        form.HPrice.focus();
        return false;
      }

      syntax= /^[0-9]*$/;
    if(!syntax.test(form.ExpYears.value)) {
        alert("Error: Years of experience accept only positive numbers!");
        form.ExpYears.focus();
        return false;
      }

     

       return true;
     }
     
     </script>
    </body>
</html>


