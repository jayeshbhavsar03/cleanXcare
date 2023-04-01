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
        <title>Ratings</title>

         <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" >
         <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
       
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>

        
      
</style>

        
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
         <?php
         include('connection.php');
          $id1 = $_REQUEST['id'];
          $id=str_replace("'", "", $id1);
           $query="SELECT FullName from housekeeper WHERE hkID=$id";
          $run=mysqli_query($connection,$query);
          $result=mysqli_fetch_assoc($run);
          $HKName=$result['FullName'];


          //$ind=$_SESSION['id'];
          $query="SELECT * from ratings WHERE hkID='$id'";
          $run=mysqli_query($connection,$query);
          $rows=mysqli_num_rows($run);
          //$result=mysqli_fetch_assoc($run);
          //$indID=$result['indID'];

          //while ($rows=mysqli_fetch_array($run)) {
             // $indID=$rows['indID'];
             // $query="SELECT FullName from individual WHERE IndID='$indID'";
             // $run=mysqli_query($connection,$query);
              //$ind=mysqli_fetch_assoc($run);
              //$indName=$rows[0];
            

        
 

if ($rows==0){
    ?>
    <script>
    alert("<?php echo($HKName) ?>"+ " Does Not Have Any Ratings Yet!");
    //window.location.replace("indHKProfile.php");
    window.history.back();
    </script>
    <?php 
     mysqli_close($connection);
            exit;  
}
 else {
    ?>
    <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold"><?php echo ($rows) ?> Ratings Found!</h2>
                        <hr class="divider my-4" />
                    </div>
                     <div class="text-center">
          <div class="mt-0">
            <?php 
            while ($rows=mysqli_fetch_array($run)) {
                   
                ?>
                <div class="rectangle"> <a class = "active" class ="block" style ="text-decoration: underline" > <i  class ="far fa-user fa-1x" > </i>  <?php echo($rows['Name'])?>  </a> <br> <br>
                 <h6>Rate: <?php echo($rows['Rate']) ?></h6> </div>
                 <?php
            }

        }
           ?>
        
         </div>
                   
                </div>
            </div>

 </div>
                   
                </div>
            </div>
  
        </header>

      
              
    </body>
</html>


