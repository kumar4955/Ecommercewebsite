<?php
$id=$_GET['ID'];
$con= new mysqli('localhost','root','','ecommerce');
if(mysqli_query($con, "DELETE FROM `usertable` WHERE id=$id")){
    echo '<script>alert("The item is deleted")</script>';
}
else{
    echo"thank u";
}

header('location:user.php');


?>


$sql = "INSERT INTO blog(title, content) VALUES('$title', '$content')";