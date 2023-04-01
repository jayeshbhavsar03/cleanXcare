 <?php

 include('connection.php');
          $id1 = $_REQUEST['id'];
          $HKId=str_replace("'", "", $id1);
          //$id=$_SESSION['id'];
          $id2 = $_REQUEST['indID'];
          $indID=str_replace("'", "", $id2);
         $DeleteQuery = "DELETE FROM favlist WHERE HkID='$HKId' AND indID='$indID'";
         $run=mysqli_query($connection,$DeleteQuery)
          or die("Could not delete".mysqli_error($connection));

         if ($run) {
        ?>
          <script>
          alert("House keeper has been deleted successfully!");
          window.location.replace("FavoriteList.php");
          </script>
        
         <?php
     }
         mysqli_close($connection);
            exit;
     


     ?>