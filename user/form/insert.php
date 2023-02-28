<?php

$con= new mysqli('localhost','root','','ecommerce');
if(!$con){
    echo"connect successfully";
}

if(isset($_POST['submit'])){
$username=$_POST['username'];
$useremail=$_POST['useremail'];
$userphone=$_POST['userphone'];
$password=$_POST['userpassword'];
mysqli_query($con,"INSERT INTO `usertable`( `username`, `useremail`, `userphone`, `password`) 
VALUES ('$username','$useremail','$userphone','$password')");
$Dup_email=mysqli_query($con, "SELECT * FROM `usertable` WHERE useremail='$useremail'");
$Dup_phone=mysqli_query($con, "SELECT * FROM `usertable` WHERE userphone='$userphone'");

if(mysqli_num_rows($Dup_email)==0){
    echo"
    <script>
    alert('This email is already taken');
    window.location.href='register.php';
    </script>
    ";
}

else{
mysqli_query($con,"INSERT INTO `usertable`( `username`, `useremail`, `userphone`, `userpassword`) 
VALUES ('$username','$useremail','$userphone','$password')");
echo"
<script>
alert('Sucessfully registered');
window.location.href='login.php';
</script>
";
}

}



?>