<?php  
    session_start();
    if(isset($_SESSION['name1']))
        header("Location: indHome.php");
    if(isset($_SESSION['name2']))
        header("Location: HKHome.php");
    if(isset($_SESSION['name3']))
        header("Location: adminHome.php");
?> 
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>    
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
        <!-- Form -->
               <header class="master-head"> <?php  
    // session_start();
    if(isset($_SESSION['name1']))
        header("Location: indHome.php");
    if(isset($_SESSION['name2']))
        header("Location: HKHome.php");
    if(isset($_SESSION['name3']))
        header("Location: adminHome.php");
?> 
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>    
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
        <!-- Form -->
               <header class="master-head"> 
        <div class="form-box">
    <div class="login-head">Welcome Back</div>        
    <form ... onsubmit="return checkForm(this);" action="Login.php" method="post" id="login-form">
        <div class="form-group">
          <label class="label-control">  Email </label>
          <input type="email" name="email" class="form-control" autofocus>
        </div>
        <div class="form-group">
          <label class="label-control"> Password </label> 
          <input type="password" name="password" class="form-control">
        </div>
         <div class="row justify-content-center">
        <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" name="signIn" value="signIn" >
</div>
        <p class="text-p">Don't have an account? <a href="signUpOptions.php" class="color-2">Sign up</a> </p>
    </form>
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
    // Check login pass
    if(form.password.value == "") {
      alert("Error: Password cannot be blank!");
      form.password.focus();
      return false;
    }
    return true;
  }
         </script>      
    </body>
</html>
<?php 
if (isset($_POST['signIn'])){
include('connection.php');
        $email=$_POST['email'];  
        $password=$_POST['password'];  
        $ind="select * from individual WHERE Email='$email'"; 
        $HK="select * from housekeeper WHERE Email='$email'";
        $admin= "select * from admin WHERE Email='$email'";
        $hkaccount = "SELECT * FROM hkaccount WHERE Email ='$email'";
        $run1=mysqli_query($connection, $ind);
        $run2=mysqli_query($connection, $HK);
        $run3=mysqli_query($connection, $admin);
        $run4    = mysqli_query($connection, $hkaccount); 
        if (mysqli_num_rows($run1)>0){
            $query="select * from individual WHERE Email='$email'AND Password='$password'";
            $run=mysqli_query($connection, $query);
            if($row=mysqli_fetch_row($run)) {  
            //header("location: indHome.php");
            $_SESSION['user']=$row[0];
            $_SESSION['name1']=$row[0];
            $_SESSION['email']=$email;
            $_SESSION['age']=$row[1];
            $_SESSION['location']=$row[5];
            $_SESSION['id']=$row[4];
             echo "<script>window.location.replace('indHome.php');</script>";
             }
            else echo "<script>alert('Password is incorrect!')</script>"; 
        }
        elseif (mysqli_num_rows($run2)>0) {
             $query="select * from housekeeper WHERE Email='$email'AND Password='$password'";
            $run=mysqli_query($connection, $query);
            if($row=mysqli_fetch_row($run)) {  
            //header("location: HKHome.php");
            $_SESSION['user']=$row[0];
            $_SESSION['name2']=$row[0];
            $_SESSION['email']=$email;
            $_SESSION['age']=$row[1];
            $_SESSION['location']=$row[4];
            $_SESSION['HPrice']=$row[7];
            $_SESSION['ExpT']=$row[8];
            $_SESSION['ExpY']=$row[6];
            $_SESSION['id']=$row[5];
             echo "<script>window.location.replace('HKHome.php');</script>";
             }
            else echo "<script>alert('Password is incorrect!')</script>"; 
        }
        elseif (mysqli_num_rows($run3)>0) {
            $query="select * from admin WHERE Email='$email'AND Password='$password'";
            $run=mysqli_query($connection, $query);
            if($row=mysqli_fetch_row($run)) {  
            $_SESSION['user']=$row[0];
            $_SESSION['name3']=$row[0];
            $_SESSION['email']=$email;
            $_SESSION['BDate']=$row[1];
            $_SESSION['PHNum']=$row[5];
            $_SESSION['id']=$row[4];
           // header("location: adminHome.php");
            echo "<script>window.location.replace('adminHome.php');</script>"; 
             }
            else echo "<script>alert('Password is incorrect!')</script>"; 
        }
        elseif (mysqli_num_rows($run4)>0) {?>
          <script>
          alert("You cannot login now. Pleese Wait For Admin Approval!");
          window.location.replace("index.php");
          </script>
    <?php  
        }
        else {
         ?>
          <script>
           alert("This Email have not Signed-up before, Pleese Sign-up");
          </script>
         <?php  
         }        
    }  
?>      
         <script>
           function checkForm(form)
  {
    if(form.email.value == "") {
      alert("Error: Email cannot be blank!");
      form.email.focus();
      return false;
    }
    // Check login pass
    if(form.password.value == "") {
      alert("Error: Password cannot be blank!");
      form.password.focus();
      return false;
    }
    return true;
  }
         </script>      
    </body>
</html>
<?php 
if (isset($_POST['signIn'])){
include('connection.php');
        $email=$_POST['email'];  
        $password=$_POST['password'];  
        $ind="select * from individual WHERE Email='$email'"; 
        $HK="select * from housekeeper WHERE Email='$email'";
        $admin= "select * from admin WHERE Email='$email'";
        $hkaccount = "SELECT * FROM hkaccount WHERE Email ='$email'";
        $run1=mysqli_query($connection, $ind);
        $run2=mysqli_query($connection, $HK);
        $run3=mysqli_query($connection, $admin);
        $run4    = mysqli_query($connection, $hkaccount); 
        if (mysqli_num_rows($run1)>0){
            $query="select * from individual WHERE Email='$email'AND Password='$password'";
            $run=mysqli_query($connection, $query);
            if($row=mysqli_fetch_row($run)) {  
            //header("location: indHome.php");
            $_SESSION['user']=$row[0];
            $_SESSION['name1']=$row[0];
            $_SESSION['email']=$email;
            $_SESSION['age']=$row[1];
            $_SESSION['location']=$row[5];
            $_SESSION['id']=$row[4];
             echo "<script>window.location.replace('indHome.php');</script>";
             }
            else echo "<script>alert('Password is incorrect!')</script>"; 
        }
        elseif (mysqli_num_rows($run2)>0) {
             $query="select * from housekeeper WHERE Email='$email'AND Password='$password'";
            $run=mysqli_query($connection, $query);
            if($row=mysqli_fetch_row($run)) {  
            //header("location: HKHome.php");
            $_SESSION['user']=$row[0];
            $_SESSION['name2']=$row[0];
            $_SESSION['email']=$email;
            $_SESSION['age']=$row[1];
            $_SESSION['location']=$row[4];
            $_SESSION['HPrice']=$row[7];
            $_SESSION['ExpT']=$row[8];
            $_SESSION['ExpY']=$row[6];
            $_SESSION['id']=$row[5];
             echo "<script>window.location.replace('HKHome.php');</script>";
             }
            else echo "<script>alert('Password is incorrect!')</script>"; 
        }
        elseif (mysqli_num_rows($run3)>0) {
            $query="select * from admin WHERE Email='$email'AND Password='$password'";
            $run=mysqli_query($connection, $query);
            if($row=mysqli_fetch_row($run)) {  
            $_SESSION['user']=$row[0];
            $_SESSION['name3']=$row[0];
            $_SESSION['email']=$email;
            $_SESSION['BDate']=$row[1];
            $_SESSION['PHNum']=$row[5];
            $_SESSION['id']=$row[4];
           // header("location: adminHome.php");
            echo "<script>window.location.replace('adminHome.php');</script>"; 
             }
            else echo "<script>alert('Password is incorrect!')</script>"; 
        }
        elseif (mysqli_num_rows($run4)>0) {?>
          <script>
          alert("You cannot login now. Pleese Wait For Admin Approval!");
          window.location.replace("index.php");
          </script>
    <?php  
        }
        else {
         ?>
          <script>
           alert("This Email have not Signed-up before, Pleese Sign-up");
          </script>
         <?php  
         }        
    }  
?> 