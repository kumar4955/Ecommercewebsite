<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.container{box-sizing: border-box;
width:80%;
margin-left:90px;
margin-top:30px;}

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
<body>
<?php

echo $id=$_GET['id']; 
include 'connet.php';

$result= mysqli_query($con, "SELECT * FROM `tableeco` WHERE id=$id");

$data = mysqli_fetch_array($result);

?>
<h3>Product Update</h3>

<div class="container">
    <div class="subcontainer">
  <form action="update.php"   method="POST" enctype="multipart/form-data">
  <label for="product" >Product Type</label>
    <select id="product"   name="ptype">

    <option >Quiling</option>
      <option >Sketch</option>
      <option >Stone</option>
      <option >Bottle Art</option>
      <option>Mandala</option>
      <option >Painting</option>
    </select>
    <label for="lname">Product Code</label>
    <input type="text" id="lname"value="<?php echo $data['pcode'] ?>" name="pcode" placeholder="Enter a product code">

    <label for="country">Product price</label><br>
    <input type="number" id="lname"  value="<?php echo $data['pprice'] ?>" name="pprice" placeholder="Enter a product price"><br>
<br><br>
<label for="country">Upload Image of Product</label><br>
<input type="file" name="pimage" id="fileToUpload"><br><br>
<img src="<?php echo $data['pimage']?>" alt="" Style="height:100px"><br>
   <input type="" value="<?php echo $data['id'] ?>" name="id"><br><br>
    <input type="submit" value="Update" name="update"><br>
    <br>
  </form>
</div>
</div>
<?php
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $product_Type=$_POST['ptype'];
    $product_code=$_POST['pcode'];
    $product_price=$_POST['pprice'];
    $product_image=$_FILES['pimage'];
 
$image_loc=$_FILES['pimage']['tmp_name'];
$image_name=$_FILES['pimage']['name'];

$img_des="upload_images/".$image_name;

move_uploaded_file($image_loc, "upload_images/".$image_name);
include 'connet.php';

mysqli_query($con, "UPDATE 'tableeco' SET 'ptype'=[' $product_Type'],'pcode'=['$product_code'],'pprice'=[' $product_price'],'pimage'=['$image_loc'] WHERE 
id=$id");

}


?>
</body>





