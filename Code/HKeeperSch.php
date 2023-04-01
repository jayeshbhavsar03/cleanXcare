<?php
session_start();

?>

<!DOCTYPE html>  
 <html>  
<head>
           <title>YOUR SCHEDULE</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body> 
            <head>  
<link href="css/styles.css" rel="stylesheet" />
         <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#">CleanXCare</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="HKHome.php">Home</a></li>
                     
                    </ul>
                </div>
               
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
             <div class="form-box">
    <div class="head">YOUR SCHEDULE </div>        

        <div class="form-group">
            
<div class="container-r1">
  
           <br />  
    <form method="post" action="HkSch2.php">
           <div class="container" style="width:500px;">  
            <h3 class="text-center">CHECK YOUR AVAILABLE DAYS AT MORNING <br>
            FROM 8AM to 11:30 AM</h3>  
                <div class="checkbox">  
                     <input type="checkbox" name="days[]" class="get_value" value="Sunday" />Sunday <br />  
                     <input type="checkbox" name="days[]" class="get_value" value="Monday" />Monday <br />  
                     <input type="checkbox" name="days[]" class="get_value" value="Tuesday" />Tuesday <br />  
                     <input type="checkbox" name="days[]" class="get_value" value="Wednesday" />Wednesday <br /> 
                     <input type="checkbox" name="days[]" class="get_value" value="Thursday" />Thursday <br />
                     <input type="checkbox" name="days[]" class="get_value" value="Friday" />Friday <br />                     
                </div>  

           <input type="submit" name="submitAM" value="UPDATE" class="btn btn-info" id="submitAM"> 
               
                <h3 class="text-center">CHECK YOUR AVAILABLE DAYS AT EVENING <br>
            FROM 4PM TO 7:30 PM</h3>  
                <div class="checkbox">  
                     <input type="checkbox" name="days[]" class="get_value" value="Sunday" />Sunday <br />  
                     <input type="checkbox" name="days[]" class="get_value" value="Monday" />Monday <br />  
                     <input type="checkbox" name="days[]" class="get_value" value="Tuesday" />Tuesday <br />  
                     <input type="checkbox" name="days[]" class="get_value" value="Wednesday" />Wednesday <br /> 
                     <input type="checkbox" name="days[]" class="get_value" value="Thursday" />Thursday <br />
                     <input type="checkbox" name="days[]" class="get_value" value="Friday" />Friday <br />                     
                </div>  
                <input type="submit" name="submitPM" value="UPDATE" class="btn btn-info" id="submitPM">   
                <br />  

                <div id="result"></div>  
           </div> 
    </form>
    </div>
</header>
      </body>  
 </html>  
  <script> 
      /*
 $(document).ready(function(){  
      $('#submitAM').click(function(){  
           var AM = [];  
           $('.get_value').each(function(){  
                if($(this).is(":checked"))  
                {  
                     AM.push($(this).val());  
                }  
           });  
           AM = AM.toString();  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{AM:AM},  
                success:function(data){  
                     $('#result').html(data);  
                }  
           });  
      });  
 });  
 (document).ready(function(){  
      $('#submitPM').click(function(){  
           var PM = [];  
           $('.get_value').each(function(){  
                if($(this).is(":checked"))  
                {  
                     PM.push($(this).val());  
                }  
           });  
           PM = PM.toString();  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{PM:PM},  
                success:function(data){  
                     $('#result').html(data);  
                }  
           });  
      });  
 }); */ 
 </script>  