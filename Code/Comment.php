<?php


session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");

    $id1 = $_REQUEST['HID'];
    $HKId=str_replace("'", "", $id1);
    $id2 = $_REQUEST['RID'];
    $ResID = str_replace("'", "", $id2);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>New Comment</title>
        <link href="css/styles.css" rel="stylesheet" />
          <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
                  
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
                        <h2 class="text-uppercase text-white font-weight-bold">Comment</h2>
                        <hr class="divider my-4">
                          </div>
                         
                    <div class="col-lg-8 align-self-baseline">

              <div id="demo"></div>
                  <form method="POST" action="Comment.php?RID='<?php echo($ResID) ?>'&HID=''<?php echo($HKId) ?>'" name="form" id="form">
                <label><strong>Name:</strong></label><br>
               <input type="text" name="name" placeholder="Your Name" id="name"><br>
                 <label><strong>Comment:</strong></label><br> 
               <textarea cols="45" rows="5" name="comments" placeholder="please write your comment here..." id="comment"></textarea><br>
                <input class="btn btn-primary btn-xl js-scroll-trigger" value="POST" type="submit" name="post">
                  </form>
          
 

                    </div>
                </div>
            </div>
        </header>
    
         
    </body>
</html>
 <?php
include ('connection.php');
if ($_POST['post'])
{
    
    $id=$_SESSION['id'];
    
   
    $comm=$_POST['comments'];
    $Name=$_POST['name'];

    
 
 $sql = "INSERT INTO comments (name, Comment, Status, ResID, hkID, indID) VALUES('$Name','$comm','New','$ResID','$HKId','$id')";
    $result = mysqli_query($connection, $sql)
    or die("Could not update".mysqli_error($connection));
    if ($result)
    {
        ?>
        <script >
        alert("Comment has been sent successfully!");
        </script>
        <?php
    }
    else
    {
        header("location: indHome.php");
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>
                 
