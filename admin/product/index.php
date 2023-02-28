<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.container{box-sizing: border-box;
width:80%;
margin-left:80px;
margin-top:30px;
}

input[type=text], select, textarea {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.subcontainer{
    margin-left:10px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

.container {
  
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  
  margin-top:20px;
  
  
}
.table{
  margin:20px;
  margin-left:5px;
}
</style>
</head>
<body>

<h3>Product Upload Form</h3>

<div class="container">
    <div class="subcontainer">
  <form action="insert.php"   method="POST" enctype="multipart/form-data">
  <label for="country">Product Type</label>
    <select id="country" name="ptype">
      <option >Quiling</option>
      <option >Sketch</option>
      <option >Stone</option>
      <option >Bottle Art</option>
      <option>Mandala</option>
      <option >Painting</option>
    </select>
    <label for="lname">Product Code</label>
    <input type="text" id="lname" name="pcode" placeholder="Enter a product code">

    <label for="country">Product price</label><br>
    <input type="number" id="lname" name="pprice" placeholder="Enter a product price"><br>
<br><br>
<label for="country">Upload Image of Product</label><br>
<input type="file" name="pimage" id="fileToUpload"><br><br>
   
    <input type="submit" value="Submit" name="submit"><br>
    <br>
  </form>
</div>
</div>


</body>
<table class="table">
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
  text:center;
}
.table th{
  background:black;
}
.btn {
  color:red;
}
.btn1 {
  color:blue;
}
.img{
  margin-button:10px;
}
</style>
<body>



<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Product Type</th>
    <th>Product Code</th>
    <th>Product Price</th>
    <th>Product Image</th>
    <th>Update</th>
    <th>Delete</th>
    <tr>
  

<?php
include 'connet.php';
$sql="Select*from  tableeco ";
$result=mysqli_query($con, $sql);


if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id']; 
        $product_Type=$row['ptype'];
        $product_code=$row['pcode'];
        $product_price=$row['pprice'];
        $product_image=$row['pimage'];
        echo '<tr>
        <td>' . $row['id'] . '</td>
        <td >'.    $product_Type.'</td>
        <td>'. $product_code.'</td>
        <td>'.$product_price.'</td>
        <td><img src='.$product_image.' height="60px" width="120px" ></td>
        <td><button><a href="update.php? id= ' . $row['id'] . '" class ="btn1 btn-danger">Update</a></button></td>
        <td><button><a href="delete.php? id= ' . $row['id'] . '" class ="btn btn-danger">Delete</a></button></td>

      </tr>';
     
    }
  }

?>

</table>
</html>