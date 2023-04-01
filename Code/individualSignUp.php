<?php session_start();
if(isset($_SESSION['email']))
        header("Location: indHome.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
         <title>Sign Up</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" >
        <link href="css/styles.css?v=<?php echo time();?>" rel="stylesheet" />
        <link href="css/common.css?v=<?php echo time();?>" rel="stylesheet" />
        <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       
    </head>
    <body id="page-top">     
        <!-- Form -->
               <header class="masthead1">         
       <div class="form-box">
    <div class="head login-head">Individual Sign up!</div>        
    <form  ... onsubmit="return checkForm(this);" action="indSignUp.php" method="post" id="login-form">
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
<div class="row justify-content-center">
  <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" name="signUp" value="signUp" >
        </div>  
</div>
    </form>
  </div>
        </header>
         <!-- End Form -->
     <script >
       function checkForm(form)
  {
    if(form.email.value == "") {
      alert("Error: Email cannot be blank!");
      form.email.focus();
      return false;
    }
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
    } else {
      alert("Error: Password cannot be blank!");
      form.Password.focus();
      return false;
    }     
    if(form.Fname.value == "") {
      alert("Error: Name cannot be blank!");
      form.Fname.focus();
      return false;
    }
    // check if name only contains letters and whitespace
    syntax= /^[a-zA-Z-' ]*$/;
    if(!syntax.test(form.Fname.value)) {
        alert("Error: Name accept Only letters and white spaces!");
        form.Fname.focus();
        return false;
      }
    if(form.age.value == "") {
      alert("Error: Age cannot be blank!");
      form.age.focus();
      return false;
     }
    syntax= /^[0-9]*$/;
    if(!syntax.test(form.age.value)) {
        alert("Error: Age accept only positive numbers!");
        form.age.focus();
        return false;
      }
      if(form.location.value == "") {
      alert("Error: Address cannot be blank!");
      form.location.focus();
      return false;
     }
       return true;
     }
     </script>
    </body>
</html>