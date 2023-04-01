<?php session_start();
if(isset($_SESSION['user']))       
  header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign Up</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link href="css/styles.css?v=<?php echo time();?>" rel="stylesheet" />
        <link href="css/common.css?v=<?php echo time();?>" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    </head>
    <body id="page-top">
        <!-- Form -->
               <header class="masthead1">
<div class="form-box">
    <div class="head  login-head">House clener Sign up!</div>        
    <form  ... onsubmit="return checkForm(this);" action="HKSignUp.php" method="post" id="login-form">
        <div class="form-group">
          <label class="label-control">Email</label>
          <input type="email" name="email" class="form-control" autofocus>
        </div>
        <div class="form-group">
          <label class="label-control">Password</label> 
          <input type="password" name="Password" class="form-control">
        </div>
        <div class="form-group">
          <label class="label-control"> Full Name</label> 
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
    
   <input type="number" name="HPrice" class="form-control"> 
     </div>
        <div class="form-group">
          <label class="label-control">Years Of Experience </label> 
          <input type="number" name="ExpYears" class="form-control">
        </div>         
        <div class="form-group">
           <label class="label-control">Your Type Of Experience:</label> <br> 
  <input type="radio" id="Washing" name="service" value="washing">
  <label for="female">Washing</label>
  <input type="radio" id="Dusting" name="service" value="dusting">
  <label for="other">Dusting</label>
     </div> 
     <div class="form-group">
   <label class="label-control">Please Introduce Yourself</label>
 <textarea  name="bio" cols="40" rows="5" class="form-control" placeholder="Enter text here..."></textarea>
</div>     
        <div class="row justify-content-center">
        <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" name="signUp" value="signUp" >
          </div>        
    </form>
  </div>
        </header>
         <!-- End Form --> 
         <script>       
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
      if(form.HPrice.value == "") {
      alert("Error: Price per hour cannot be blank!");
      form.HPrice.focus();
      return false;
     }
    syntax= /^[0-9]*$/;
    if(!syntax.test(form.HPrice.value)) {
        alert("Error: Price per hour accept only positive numbers!");
        form.HPrice.focus();
        return false;
      }
      if(form.ExpYears.value == "") {
      alert("Error: Years of experience cannot be blank!");
      form.ExpYears.focus();
      return false;
     }
    syntax= /^[0-9]*$/;
    if(!syntax.test(form.ExpYears.value)) {
        alert("Error: Years of experience accept only positive numbers!");
        form.ExpYears.focus();
        return false;
      }    
    var Checked = $('input:radio[name="service"]:checked').length > 0; 
       if(!Checked){
         alert("Error: You have to select one type of experience!");
         return false;
       }
    if(form.bio.value == "") {
      alert("Error: You have to introduce your self!");
      form.bio.focus();
      return false;
     }  
    return true;
  }
  </script>
    </body>
</html>