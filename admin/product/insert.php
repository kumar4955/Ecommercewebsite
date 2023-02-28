<?php
include 'connet.php';
if(isset($_POST['submit'])){
    $product_Type=$_POST['ptype'];
    $product_code=$_POST['pcode'];
    $product_price=$_POST['pprice'];
    $product_image=$_FILES['pimage'];
 
$image_loc=$_FILES['pimage']['tmp_name'];
$image_name=$_FILES['pimage']['name'];

$img_des="upload_images/".$image_name;

move_uploaded_file($image_loc, "upload_images/".$image_name);

$sql="INSERT INTO tableeco(ptype, pcode, pprice,pimage) VALUES ( '$product_Type','$product_code','$product_price','$img_des')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  //$con->close();


}




?>
<table class="table">
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>
<body>



<table style="width:80%">
  <tr>
    <thead>
    <th>ID</th>
    <th>Product Type</th>
    <th>Product Code</th>
    <th>Product Price</th>
    <th>Product Image</th>
    <thead>
      <tbody>
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
        <th scope="row">'.$id.'</th>
        <th >'.    $product_Type.'</th>
        <th>'. $product_code.'</th>
        <th>'.$product_price.'</th>
        <th>'. $product_image.'</th>

      </tr>';

    }
  }

?>



</table>

  

