  <?php


                 
                       
          include('connection.php');
          $id1 = $_REQUEST['id'];
          $id=str_replace("'", "", $id1);

          
    
       
        
      //execute the SQL query and return records
          $query="SELECT * FROM `hkaccount` WHERE AccountID=$id";
           $select = mysqli_query($connection, $query)
           or die("Could not find".mysqli_error($connection)); 
           

           $row = mysqli_fetch_assoc( $select );

            $fname =   $row['FullName'];
              $age = $row['Age'];
              $pswd = $row['Password'];
              $email = $row['Email'];
              $location = $row['location'];
              $years = $row['Years'];
              $acID = $row['AccountID'];
              $hp =  $row['HourPrice'];
              $exp = $row['TypeOfExp'];
              $bio =  $row['Bio'];

              
              $delete_query = "DELETE FROM hkaccount WHERE AccountID = '$acID'";
              
              $delete = mysqli_query($connection, $delete_query)
              or die("Could not delete".mysqli_error($connection));
               
           if ($delete)
           //header("location: ApplicationInfo.php");
           ?>
           <script>
          window.location.replace("ApplicationInfo.php");
          </script>
          