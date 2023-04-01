<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Favourite List</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>

        .Search {
          background-color: #FF7F50; 
        } 
      
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
    $id=$_SESSION['id'];     
         
  include('connection.php');

 $query = "SELECT FullName, Bio, favlist.HkID FROM housekeeper INNER JOIN favlist ON favlist.HkID=housekeeper.HkID  WHERE favlist.indID='$id'";
            
  $result = mysqli_query($connection, $query);

  $rows = mysqli_num_rows($result);
            
    if ($rows==0){
    ?>
    <script>
    alert("You Do Not Have Any Favorites!");
    window.location.replace("indHome.php");
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
                    <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                        <h3 class="text-uppercase text-white font-weight-bold"> You have <?php echo ($rows) ?> Favorites of House-Keepers</h3>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        
                        <div class="mt-0">
                    <?php
                    while ($rows=mysqli_fetch_array($result)) {
                     ?>
                       <div class="rectangle">    <a class = "active" class ="block" style ="text-decoration: underline" > <i  class ="far fa-user fa-1x" > </i>  <?php echo($rows['FullName']) ?>  </a> <h6>Bio: <?php echo($rows['Bio']) ?></h6>  <a class="btn btn-light  js-scroll-trigger" href="indHKProfile.php?id='<?php echo($rows['HkID']) ?>'" name="add">View </a> <a class="btn Search btn-light js-scroll-trigger" href="DeleteFav.php?id='<?php echo($rows['HkID']) ?>'&indID='<?php echo($id) ?>'" name="delete">Delete</a>    </div>
                       <?php
                    }
                    ?>
                     </div>      
 
                      
                    </div>
                </div>
            </div>
        </header>
           </body>
</html>
<?php
}

?>

