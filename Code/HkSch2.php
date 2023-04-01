<?php
session_start();
require('connection.php');
$id=$_SESSION['id'];
if(isset($_POST['submitAM'])){
   $days = $_POST['days'];
   foreach($_POST['days'] as $selected) {
    $array[] = $selected; }

    for ($i=0; $i <count($array) ; $i++) { 
      
   
    
    $query = "INSERT INTO hksch(Day,Date,Time,hkId,Status) VALUES ('$array[$i]','0000-00-00','08:00:00','$id','Available')";
    $run=mysqli_query($connection,$query)
     or die("Could not insert".mysqli_error($connection));
}
 }

if(isset($_POST['submitPM'])){
   $days = $_POST['days'];
   foreach($_POST['days'] as $selected) {
    $array[] = $selected; }

    for ($i=0; $i <count($array) ; $i++) { 
      
   
    
    $query = "INSERT INTO hksch(Day,Date,Time,hkId,Status) VALUES ('$array[$i]','0000-00-00','16:00:00','$id','Available')";
    $run=mysqli_query($connection,$query)
     or die("Could not insert".mysqli_error($connection));
     
    
}

 }
 ?>
 ?>
<script>
    alert("Your slots has been saved successfully!");
    window.location.replace("HKsch.php");
    </script>