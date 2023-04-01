<?php
session_start();
include('connection.php');
          $id1 = $_REQUEST['HID'];
          $HKId=str_replace("'", "", $id1);
          $id2 = $_REQUEST['SID'];
          $SchID = str_replace("'", "", $id2);
          $id=$_SESSION['id'];

          $InsertQuery="INSERT INTO reservations(indID,HKId,SchID,Status) VALUES ('$id','$HKId','$SchID','Confirmed')";
         $Insert=mysqli_query($connection,$InsertQuery)
          or die("Could not insert".mysqli_error($connection));
          $UpdateQuery="UPDATE hksch SET Status='Unavailable' WHERE SchID=$SchID";
          $Update=mysqli_query($connection,$UpdateQuery)
          or die("Could not insert".mysqli_error($connection));

          if ($Insert&&$Update) {
        $query="SELECT Email FROM individual WHERE IndID='$id'";
        $run = mysqli_query($connection, $query)
        or die("Could not update".mysqli_error($connection));
        $result = mysqli_fetch_row($run);
        $indE= $result['0'];
        $to_email = "$indE";
        $subject = "Reservation Confirmed!";
        $body = "Congrats! Your reservation has been confirmed.";
        $headers = "From: noreply@CleanXCare.com";
        include('sendMail.php');
        
        $query="SELECT Email FROM housekeeper WHERE HkID='$HKId'";
        $run = mysqli_query($connection, $query)
        or die("Could not update".mysqli_error($connection));
        $result = mysqli_fetch_row($run);
        $indE= $result['0'];
        $to_email = "$indE";
        $subject = "New Reservation!";
        $body = "You have got a new reservation. Check please!";
        $headers = "From: noreply@CleanXCare.com";
        include('sendMail.php');
              
        ?>
          <script>
          alert("Congrats! Your reservation has been confirmed Successfully!!");
          window.location.replace("searchOptions.php");
          //window.history.back();
          </script>
        
         <?php
     }
         mysqli_close($connection);
            exit;

?>