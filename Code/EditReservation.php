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

    $query1="Delete from reservations WHERE ResID='$ResID'";
    $Delete=mysqli_query($connection, $query1);

    $query2="UPDATE hksch SET Status='Available' WHERE SchID=$SchID";
    $UPDATE=mysqli_query($connection, $query2);

     $InsertQuery="INSERT INTO reservations(indID,HKId,SchID,Status) VALUES ('$id','$HKId','$SchID','Confirmed')";
     $Insert=mysqli_query($connection,$InsertQuery)
     or die("Could not insert".mysqli_error($connection));

     $UpdateQuery="UPDATE hksch SET Status='Unavailable' WHERE SchID=$SchID";
     $Update=mysqli_query($connection,$UpdateQuery)
     or die("Could not insert".mysqli_error($connection));

     if ($Delete&&$UPDATE&&$Insert&&$Update) {
        $query="SELECT Email FROM individual WHERE IndID='$id'";
        $run = mysqli_query($connection, $query)
        or die("Could not update".mysqli_error($connection));
        $result = mysqli_fetch_row($run);
        $indE= $result['0'];
        $to_email = "$indE";
        $subject = "Reservation Edited!";
        $body = "Your reservation has been Edited and Confirmed Successfully!";
        $headers = "From: noreply@CleanXCare.com";
        include('sendMail.php');
        
        $query="SELECT Email FROM housekeeper WHERE HkID='$HKId'";
        $run = mysqli_query($connection, $query)
        or die("Could not update".mysqli_error($connection));
        $result = mysqli_fetch_row($run);
        $indE= $result['0'];
        $to_email = "$indE";
        $subject = "Reservation Edited!";
        $body = "Your reservation has been edited by the individual. Check please!";
        $headers = "From: noreply@CleanXCare.com";
        include('sendMail.php');
        ?>
        <script>
          alert("Your reservation has been Edited and Confirmed Successfully!!");
          window.location.replace("indReservations.php");
          //window.history.back();
          </script>
        
         <?php
     }
         mysqli_close($connection);
            exit;

?>
