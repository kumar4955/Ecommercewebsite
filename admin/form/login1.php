<?php



$con= new mysqli('localhost','root','','ecommerce');

$A_name=$_POST['username'];
$A_password=$_POST['password'];

$result=mysqli_query($con,"Select*from admin where username='$A_name' AND password='$A_password'");
session_start();
if(mysqli_num_rows($result)){
	$_SESSION['admin']=$A_name;
	echo"
<script>
alert('login successfully');
 window.location.href='../store.php';
</script>
";
}
else{
echo"
<script>
alert('invalid username or pass');
window.location.href='login.php';
 </script>
 ";
}
