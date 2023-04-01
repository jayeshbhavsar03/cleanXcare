  <?php


                 
                       
          include('connection.php');
          $coID = $_REQUEST['id'];
          $COMID=str_replace("'", "", $coID);

          
    
       
        
      //execute the SQL query and return records
          $query="SELECT * FROM `comments` WHERE CommID=$coID";
           $select = mysqli_query($connection, $query)
           or die("Could not find".mysqli_error($connection)); 
           

           $row = mysqli_fetch_assoc( $select );

            $commentID =   $row['CommID'];
              $name = $row['name'];
              $comment = $row['Comment'];
              $ResID = $row['ResID'];
              $HKID = $row['hkID'];
              $indID = $row['indID'];

              

      
      $insert_query = "UPDATE comments SET Status = 'Accepted' WHERE CommID =$commentID";
              
              $insert = mysqli_query($connection, $insert_query) 
              or die("Could not update".mysqli_error($connection));
              
if ($insert)
         //  header("location: adminHome.php");
              ?>
              <script>
             window.location.replace("adminHome.php");
          </script>
          <?php
          mysqli_close($connection);
          Exit;
          ?>