<?php
session_start();
require 'connection.php';
    $id=$_SESSION['id'];

    $id1 = $_REQUEST['HID'];
    $HKId=str_replace("'", "", $id1);
    $id2 = $_REQUEST['RID'];
    $ResID = str_replace("'", "", $id2);
    $id3=$_REQUEST['SID'];
    $SchID=str_replace("'", "", $id3);
    
    $query="SELECT Email FROM individual INNER JOIN reservations ON reservations.indID=individual.IndID where reservations.ResID=$ResID";
        $run = mysqli_query($connection, $query)
        or die("Could not find".mysqli_error($connection));
        $result = mysqli_fetch_row($run);
         $indE= $result[0];

    $query1="Delete from reservations WHERE ResID='$ResID'";
    $Delete=mysqli_query($connection, $query1);

    $query2="UPDATE hksch SET Status='Available' WHERE SchID=$SchID";
    $UPDATE=mysqli_query($connection, $query2);

    if ($Delete&&$UPDATE) {
        $to_email = "$indE";
        $subject = "Cancelation!";
        $body = "Your Reservation has been cancelled by the House Keeper. Check please!";
        $headers = "From: noreply@CleanXCare.com";
        include('sendMail.php');
      ?>
           <script>
          alert("Your reservation has been deleted Successfully!");
          window.location.replace("hkReservations.php");
          </script>
          <?php
    }







?>