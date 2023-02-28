
<!DOCTYPE html>
<html>

<head>
	

	<!--Include latest bootstrap, CSS, jQuery CDN-->
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src=
	"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
    <style>
   




  
        </style>
        <?php
include 'heder.php';

    ?>
    </div>
<body>
</head>
<div class="container ">
    <div class="row">
<div class="col-lg-12 text-center bg-white mb-5 rounded">
<h1 class="text-danger font-monospace text-center tw-bold my-3">View My Cart</h1>

</div>
</div>
</div>
    
       
    
<div class="container-fluid">
<div class="row justify-content-around">
    <div class="col-sm-12 col-md-6 col-lg-9">
        <table class="table table-bordered  text-center">
            <thead class="bg-danger text-white fs-5">
            <th>Index no</th>
            <th>Product Type</th>
            <th>Product Price</th>
            <th>Product Code</th>
            <th>Total Price</th>
            <th>Delete</th>
</thead>
<tbody>
<?php

$ttotal=0;
if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key=> $value){
        $ttotal+= $value['ProductPrice'];
        echo"
        <form action='InsertCard.php' method='post'>
        <tr>
        <td>$key</td>
        <td>$value[ProductType]</td>
        <td>$value[ProductPrice]</td>
        <td>$value[ProductCode]</td>
        <td>$value[ProductPrice]</td>
     
         <td><button  name='remove' class='btn-danger' >Delete</button></td>
         <td><input type='hidden' name='item' value='$value[ProductCode]'></td>
</tr>
</form>

";
    }
}


?>
<div class="col-lg-3 ml-8">
    <h4>Grand Total</h4>
    <h2><?php echo $ttotal ?></h2>
</tbody>

</table> 




</body>

</html>





</html>
        
