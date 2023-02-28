<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/
bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
    <style>
        .card {
    min-height: 150px;
    margin-left:40px;
    margin-bottom:25px;
}
        
        </style>

    <title>Card</title>
    <?php
include 'heder.php';    
?>
    </head>
    </div>
    <body>
      
            
        <h1 class="text-danger font-monospace text-center my-3">Home</h1>
        <div class="container-fluid">

<div class="col-md-12">
<div class="row">

<?php
include 'connet.php';
$record= mysqli_query($con, "select *from tableeco");
while($row=mysqli_fetch_array($record)){
    $check_page=$row['ptype'];
    if($check_page==='Painting'){

echo "
<div class='col-md-5 col-lg-4  '>
<form action='InsertCard.php' method='post'>

    <div class='card' style='width: 18rem';>
  <img class='card-img-top' src='../admin/product/$row[pimage]'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fw-bold'>$row[ptype]</h5>
    <p class='card-text text-danger fw-bold'>RS: $row[pprice]</p>
    <p class='card-text text-danger fw-bold'>$row[pcode]</p>
    <input type='hidden' name='ptype' value='$row[ptype]'>
    <input type='hidden' name='pprice' value='$row[pprice]'>
    <input type='hidden' name='pcode' value='$row[pcode]'>
    <input type='submit' class='btn btn-danger' name='addCart' value='Add To Card'>
  </div>
</div>
</div>
";
}
}
?>
</div>
            </div>
            </div>

            <?php
include'footer.php';

?>
</body>


