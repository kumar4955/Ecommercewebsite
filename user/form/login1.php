<?php
$username=$_POST['username'];
$password=$_POST['userpassword'];

$con= new mysqli('localhost','root','','ecommerce');
$res= mysqli_query($con, "SELECT * FROM `usertable` WHERE  useremail='$username' AND password='$password'");
session_start();
if($res){
    $row=mysqli_num_rows($res);

}

if($row){
    $_SESSION['user']=$username;
   
    echo"
    <script>
    alert('Login sucessfully');
    window.location.href='../index.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('Invalid Username or password');
    window.location.href='login.php';
    </script>
    ";
}

?>