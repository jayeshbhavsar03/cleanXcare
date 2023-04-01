<?php 
session_start();
if (isset($_POST['signUp'])){
include('connection.php');
 // Get Data
$email = $_POST["email"];
$psw   = $_POST["Password"];
$fname = $_POST["Fname"];
$age = $_POST["age"];
$loc = $_POST["location"];
// Check If The User Signed-up Before
$userCheck1 = "SELECT * FROM individual WHERE Email ='$email'";
$result1    = mysqli_query($connection, $userCheck1);
$userCheck2 = "SELECT * FROM housekeeper WHERE Email ='$email'";
$result2    = mysqli_query($connection, $userCheck2);
$userCheck3 = "SELECT * FROM Admin WHERE Email ='$email'";
$result3    = mysqli_query($connection, $userCheck3);
$userCheck4 = "SELECT * FROM hkaccount WHERE Email ='$email'";
$result4    = mysqli_query($connection, $userCheck4);
if (mysqli_num_rows($result1)>0 || mysqli_num_rows($result2)>0 || mysqli_num_rows($result3)>0 || mysqli_num_rows($result4)>0){
      ?>
    <script>
    alert("You Are Already Signed-up, Pleese Log-in");
    window.location.replace("Login.php");
    </script>
    <?php  
}
// Add New User
else {
  $userAdd = "INSERT INTO individual (FullName,Age,Password,Email,location)
  VALUES('$fname','$age','$psw','$email','$loc')";
  if (mysqli_query($connection, $userAdd)) {
    echo "New record created successfully";
    $query="SELECT IndID FROM individual WHERE Email ='$email'";
    $result    = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $fname;
    $_SESSION['email'] = $email;
    $_SESSION['age'] = $age;
    $_SESSION['location'] = $loc;
    $_SESSION['id']=$row['IndID'];
    header("Location: indHome.php");
     mysqli_close($connection);
            exit;    
} else {
    echo "Error: ". mysqli_error($connection);     
}          
}
}
?>
