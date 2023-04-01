<?php
session_start();
if(!isset($_SESSION['email']))
    header("location: Login.php");

if (isset($_POST['Edit'])){
    include('connection.php');

    $ID= $_SESSION['id'];
    $email= $_SESSION['email'];
    $ind="select * from individual WHERE Email='$email'"; 
    $HK="select * from housekeeper WHERE Email='$email'";
    $admin= "select * from admin WHERE Email='$email'";  

     $run1=mysqli_query($connection, $ind);
     $run2=mysqli_query($connection, $HK);
     $run3=mysqli_query($connection, $admin);

     if (mysqli_num_rows($run1)>0){

if( !empty($_POST['email']) ){

    $newEmail= $_POST['email'];
    $sql  = "UPDATE individual SET Email='$newEmail' WHERE IndID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
 }

if( !empty($_POST['Password'])){

    $newPass= $_POST['Password'];
    $sql  = "UPDATE individual SET Password='$newPass' WHERE IndID='$ID'";
    $res = mysqli_query($connection,$sql); 
                               
}

if( !empty($_POST['Fname']) ){

   $newName= $_POST['Fname'];
    $sql  = "UPDATE individual SET FullName='$newName' WHERE IndID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['age']) ){

    $newAge= $_POST['age'];
    $sql  = "UPDATE individual SET Age='$newAge' WHERE IndID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['location']) ){

    $newLoc= $_POST['location'];
    $sql  = "UPDATE individual SET location='$newLoc' WHERE IndID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

} // End Individual Edit

elseif (mysqli_num_rows($run2)>0) {

    if( !empty($_POST['email']) ){

    $newEmail= $_POST['email'];
    $sql  = "UPDATE housekeeper SET Email='$newEmail' WHERE HkID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
 }

if( !empty($_POST['Password'])){

    $newPass= $_POST['Password'];
    $sql  = "UPDATE housekeeper SET Password='$newPass' WHERE HkID='$ID'";
    $res = mysqli_query($connection,$sql); 
                               
}

if( !empty($_POST['Fname']) ){

   $newName= $_POST['Fname'];
    $sql  = "UPDATE housekeeper SET FullName='$newName' WHERE HkID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['age']) ){

    $newAge= $_POST['age'];
    $sql  = "UPDATE housekeeper SET Age='$newAge' WHERE HkID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['location']) ){

    $newLoc= $_POST['location'];
    $sql  = "UPDATE housekeeper SET location='$newLoc' WHERE HkID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['HPrice']) ){

    $newHP= $_POST['HPrice'];
    $sql  = "UPDATE housekeeper SET HourPrice='$newHP' WHERE HkID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['ExpYears']) ){

    $newExpY= $_POST['ExpYears'];
    $sql  = "UPDATE housekeeper SET Years='$newExpY' WHERE HkID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['service']) ){

    $newExpT= $_POST['service'];
    $sql  = "UPDATE housekeeper SET TypeOfExp='$newExpT' WHERE HkID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['bio']) ){

    $newBio= $_POST['bio'];
    $sql  = "UPDATE housekeeper SET Bio='$newBio' WHERE HkID='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

}// End HK Edit

if (mysqli_num_rows($run3)>0){

    if( !empty($_POST['email']) ){

    $newEmail= $_POST['email'];
    $sql  = "UPDATE admin SET Email='$newEmail' WHERE AdminId='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
 }

if( !empty($_POST['Password'])){

    $newPass= $_POST['Password'];
    $sql  = "UPDATE admin SET Password='$newPass' WHERE AdminId='$ID'";
    $res = mysqli_query($connection,$sql); 
                               
}

if( !empty($_POST['Fname']) ){

   $newName= $_POST['Fname'];
    $sql  = "UPDATE admin SET FullName='$newName' WHERE AdminId='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['BDate']) ){

   $newBDate= $_POST['BDate'];
    $sql  = "UPDATE admin SET BDate='$newBDate' WHERE AdminId='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}

if( !empty($_POST['PNum']) ){

   $newPNum= $_POST['PNum'];
    $sql  = "UPDATE admin SET PhoneNum='$newPNum' WHERE AdminId='$ID'";
    $res    = mysqli_query($connection,$sql)
    or die("Could not update".mysqli_error($connection));
}


} // Edit Admin Profile

?>
<script>
 alert('Your information has been updated. You have to Re-login to see profile changes!'); 
  window.location.replace('Login.php');
</script>
<?php
            //session_start();
            session_destroy();
            exit;
//include ('SignOut.php');


}
?>
