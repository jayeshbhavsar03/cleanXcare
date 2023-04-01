<?php

include('connection.php');
          $id1 = $_REQUEST['RID'];
          $ResID=str_replace("'", "", $id1);

          $query="UPDATE reservations SET Status='Completed' WHERE ResID='$ResID'";
               $run=mysqli_query($connection,$query)
               or die("Could not update".mysqli_error($connection));

               if ($run) {
               ?>
          <script>
          alert("Your reservation status has been updated successfully!");
          window.location.replace("hkReservations.php");
          </script>
        
         <?php
     }
         mysqli_close($connection);
            exit;
     


     ?>