<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Profile</title>
        
     <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
       
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
       
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        
        <link href="css/styles.css" rel="stylesheet" />
        <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     
     <style>

       .body{
           margin: 0;
           padding: 0;
           background: #2A2A2E;

    }
       .rat {
        display: flex;
        margin: auto;
        position: absolute;
        top: 90px;
        left: 200px;
    
    }
       .rat input{
         display: none;
    }
       .rat label{
        display: block;
        cursor: pointer;
        width: 50px;
      
    }
       .rat label:before{
         content: '\f005';
            font-family: fontAwesome;
            position: relative;
            display: block;
            font-size: 50px;
            color: #101010;

    }
       .rat label:after{
         content: '\f005';
            font-family: fontAwesome;
            position: absolute;
            display: block;
            font-size: 50px;
            color: #E7D632 ;
            top: 0;
            opacity: 0;
            transition: 0.5s;

    }
       .rat label:after, .rate input:checked ~ label:after{
      opacity: 1;
    }  
       .fixed {
         position: absolute;
             top: 100px;
             left: -40px;} 

     </style>
     
     
    </head>
    
    
    <body>
     <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" >Profile</a> 
                
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="indHome.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="SignOut.php">Log Out</a></li>
                        
                    </ul>
                </div>
            </div>
         </nav>
    
          <section class="page-section bg-primary" id="Profile">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" text-center">
                        
                        <div class="img_Profile">
                            
                       <img src="assets/img/indiv.png" style = "width: 100px" "height: 100px" >
                        </div>
                
                        
                    </div>
                </div>
                
              </div>
              
        </section>
        <section>

          <?php
                 
          include('connection.php');
          $id1 = $_REQUEST['id'];
          $id=str_replace("'", "", $id1);
          $query="SELECT * from housekeeper WHERE HkID=$id";
          $run=mysqli_query($connection,$query);
          $result=mysqli_fetch_assoc($run);

          ?>
        
               <div  class= "div_Profile"> 
             <p class="h_Lable" > Name: <span style="color: black"> <?php echo ($result['FullName']); ?> </span> </p> 
               <p class="h_Lable">Age:  <span style="color: black"> <?php echo ($result['Age']); ?> </span></p>
               <p class="h_Lable"> E-mail:  <span style="color: black"> <?php echo ($result['Email']); ?></span></p>
               <p class="h_Lable">Location:  <span style="color: black"> <?php echo ($result['location']); ?> </span></p>
             <p class="h_Lable"> Hours Price:  <span style="color: black"> <?php echo ($result['HourPrice'])?></span></p>
               <p class="h_Lable"> Service:  <span style="color: black"> <?php echo ($result['TypeOfExp'])?> </span></p>
               <p class="h_Lable"> Years of experience:  <span style="color: black"> <?php echo ($result['Years'])?> </span></p>
                              <?php
               //include('connection.php');
               $query="SELECT AVG(Rate) FROM ratings where hkid='$id'";
               $run=mysqli_query($connection, $query);
               $result=mysqli_fetch_row($run);
               ?>
                <p class="h_Lable"> Rate:  <span style="color: black"> <?php echo ($result['0'])?>  </span></p>
                </div>
                </div>
               
            
                <div class=" align-items-center justify-content-center text-center">
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="otherComments.php?id='<?php echo($id) ?>'">View Other Individuals Comments</a>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="otherRatings.php?id='<?php echo($id) ?>'">View Other Individuals Ratings</a> 
                </div>
        
          

      <div class="fixed">
    <div class="rat"> 
    <input type="radio" name="star" id="star1">
      <label for="star1"></label>
      
    <input type="radio" name="star" id="star2">
      <label for="star2"></label>
      
    <input type="radio" name="star" id="star3">
      <label for="star3"></label>
      
    <input type="radio" name="star" id="star4">
      <label for="star4"></label>
      
    <input type="radio" name="star" id="star5">
      <label for="star5"></label>
  </div>   
        </div>
        
        
        
        </section>
    
    </body>
</html>