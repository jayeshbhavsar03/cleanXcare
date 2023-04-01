<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>New Complaint</title>
        <link href="css/styles.css" rel="stylesheet" />
          <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    </head>
    
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                    
                <!--<a class="navbar-brand js-scroll-trigger" href="#page-top">??????</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>-->
                
                     <a class="navbar-brand js-scroll-trigger" href="#">CleanXCare</a>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="indHome.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  
         
         
         
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h2 class="text-uppercase text-white font-weight-bold">Complaint</h2>
                        <hr class="divider my-4">
                          </div>
                         
                    <div class="col-lg-8 align-self-baseline">
                        
                              
                          <form action="indComplaints.php" method="POST">
                        
                    <!--<label><strong>Complaint:</strong></label><br>-->
             <textarea name="complaint" rows="12" cols="55" placeholder="If you encounter any issue,do not hesitate to inform us"></textarea> <br>
                        
                              <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" name="send" value="Send"></input>
                        </form>
                        
                    </div>
                </div>
            </div>
        </header>
    
         
    </body>
</html>

<?php
include ('connection.php');
if ($_POST['send'])
{
    $complaint = $_POST["complaint"];
    $id=$_SESSION['id'];
    $email=$_SESSION['email'];
 
    $sql = "INSERT INTO indcomp(Comp,Status,indID,Email) VALUES ('$complaint','New', '$id','$email')";
    $result = mysqli_query($connection, $sql)
    or die("Could not update".mysqli_error($connection));
    if ($result)
    {   $query="SELECT * FROM admin";
        $run = mysqli_query($connection, $query)
        or die("Could not update".mysqli_error($connection));
        $result = mysqli_fetch_row($run);
        $adminE= $result['3'];
        $to_email = "$adminE";
        $subject = "New Complaint!";
        $body = "New individual complaint was raised. Check please!";
        $headers = "From: noreply@CleanXCare.com";
        include('sendMail.php');
        echo '<script language="javascript">';
        echo 'alert("Complaint has been sent successfully!")';
        echo '</script>';
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>