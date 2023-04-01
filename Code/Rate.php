<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");
?>
<!DOCTYPE html>
<html>
<head>
    
     <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <title>
        RATE</title>
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    
        
        
        
    
        
        
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
       
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
       
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        
        <link href="css/styles.css" rel="stylesheet" />
        <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
      
        .rateyo{
            margin-right:auto;
            width: 100%;
        }
        .result{
            margin: auto;
        }
        .C{
            margin: auto;
        }
        .W{
            margin: auto;
        }
       
    </style>
</head>


    
    <body>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" >CleanXCare</a> 
                
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
               <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="indHome.php">Home</a></li>
                     
                    </ul>
                </div>
            </div>
         </nav>
    
        
            
          <header class="page-section bg-primary" >
            <div class="">
                <div class="row justify-content-center">
                    <div class=" text-center">
                        
                           
                               
                       <div class="align-self-baseline">
                        <h3 style="color: blanchedalmond">Please rate the service!</h3>
                        
                    </div>
                
                        
                    </div>
                </div>
              </div>
        </header>
        
      
        <section style ="background-color: blanchedalmond">
         
        </section>
        <?php
    $id1 = $_REQUEST['HID'];
    $HKID = str_replace("'", "", $id1);
        $id2 = $_REQUEST['RID'];
    $ResID = str_replace("'", "", $id2);
    ?>
        
        <form action="Rate.php?RID='<?php echo($ResID) ?>'&HID='<?php echo($HKID) ?>'" method="post">
            
        <div class="W">
            <label><strong>Name:</strong></label>
        <input type="text" name="name">
    </div>
            
        <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 <div class="C">
    <span class='result'>0</span>
    <input type="hidden" name="rating">
            </div>
     
            <button class="btn btn-primary btn-xl js-scroll-trigger butt_RATE" href="" name="add" type="submit">SUBMIT</button>
            
            
        </form>
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>     
    <script>
   $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
</body>
 
</html>

<?php
//session_start();
require 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $id=$_SESSION['id'];
    
 
    $sql = "INSERT INTO ratings (rate,name,ResID,indID,hkId) VALUES ('$rating','$name','$ResID','$id','$HKID')";
    if (mysqli_query($connection, $sql))
    {?>
        <script language="javascript">
        alert("Rate has been added successfully!");
        window.location.replace("indReservations.php");
        </script>;

        <?php
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>
