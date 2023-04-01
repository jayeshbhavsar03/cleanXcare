 <?php
 //session_start();
          $id1 = $_REQUEST['id'];
          $HKId=str_replace("'", "", $id1);
          //$id=$_SESSION['id'];
           $id2 = $_REQUEST['indID'];
          $indID=str_replace("'", "", $id2);
           include('connection.php');
          //$id=$_GET['id'];
         //$DeleteQuery = "DELETE FROM favlist WHERE HkID='$HKId' AND indID='$indID'";
          $InsertQuery="INSERT INTO favlist(IndID,HkId) VALUES ('$indID','$HKId')";
         $run=mysqli_query($connection,$InsertQuery)
          or die("Could not insert".mysqli_error($connection));

         if ($run) {
        ?>
          <script>
          alert("House keeper has been added successfully!");
          window.location.replace("FavoriteList.php");
          </script>
        
         <?php
     }
         mysqli_close($connection);
            exit;
     


     ?>