  <?php


                 
                       
          include('connection.php');
          $coID = $_REQUEST['id'];
          $COMID=str_replace("'", "", $coID);

          
    
       
        
      //execute the SQL query and return records
           /*$query="SELECT * FROM `comments` WHERE CommID=$coID";
           $select = mysqli_query($connection, $query)
           or die("Could not find".mysqli_error($connection)); 
           

           $row = mysqli_fetch_assoc( $select );

            $commentID =   $row['CommID'];
              $name = $row['name'];
              $comment = $row['Comment'];
              $ResID = $row['ResID'];
              $HKID = $row['hkID'];
              $indID = $row['indID'];
              */

      
      $delete_query = "DELETE FROM comments WHERE CommID ='$COMID'";
              
              $delete = mysqli_query($connection, $delete_query) 
              or die("Could not update".mysqli_error($connection));
              
             /* $delete_query = "DELETE FROM hkaccount WHERE AccountID = '$acID'";
              
              $delete = mysqli_query($connection, $delete_query)
              or die("Could not delete".mysqli_error($connection));
               
           if ($insert&&$delete)
           header("location: ApplicationInfo.php"); */

   

      //$delete_query = "DELETE FROM hkaccount WHERE AccountID = '$id'";
              
            //  $delete = mysqli_query($connection, $delete_query)
            //  or die("Could not delete".mysqli_error($connection));

             if ($delete)
           //header("location: adminHome.php");
           ?>
           <script>
          window.location.replace("adminHome.php");
          </script>


              
              