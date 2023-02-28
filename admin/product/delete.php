<?php
 $id=$_GET['id'];
include 'connet.php';
if(mysqli_query($con, "DELETE FROM `tableeco` WHERE id=$id")){
    echo '<script>alert("The item is deleted")</script>';
}
else{
    echo"thank u";
}

header('location:index.php');


?>