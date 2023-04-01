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

      
      $insert_query = "INSERT INTO housekeeper (FullName, Age, Password, Email, location, Years, HourPrice, TypeOfExp, Bio) VALUES ('$fname', '$age', '$pswd', '$email', '$location', '$years', '$hp', '$exp', '$bio')";
              
              $insert = mysqli_query($connection, $insert_query) 
              or die("Could not update".mysqli_error($connection));
              
              $delete_query = "DELETE FROM hkaccount WHERE AccountID = '$acID'";
              
              $delete = mysqli_query($connection, $delete_query)
              or die("Could not delete".mysqli_error($connection));
               
           if ($insert&&$delete)
           //header("location: ApplicationInfo.php");
           ?>
           <script>
          //alert("House keeper has been deleted successfully!");
          window.location.replace("ApplicationInfo.php");
          </script>
          <?php

   

      //$delete_query = "DELETE FROM hkaccount WHERE AccountID = '$id'";
              
            //  $delete = mysqli_query($connection, $delete_query)
            //  or die("Could not delete".mysqli_error($connection));

            //  if ($delete)
          // header("location: ApplicationInfo.php");


              
              ?>