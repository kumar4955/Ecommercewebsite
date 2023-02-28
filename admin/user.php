<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!DOCTYPE html>
<html>

<head>
	<title>My Store</title>
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/
bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>

</head>
<style>
.table{
	margin-top:30px;
}
	</style>
<body>

	<?php
	include 'store.php';
$con= new mysqli('localhost','root','','ecommerce');
$record=mysqli_query($con, "SELECT * FROM `usertable`");

?>
<div class="container-fluid">
<div class="row justify-content-around">
    <div class="col-sm-12 col-md-6 col-lg-9 ">
        <table class="table table-bordered  text-center ">
            <thead class="bg-danger text-white fs-5 mt-6">
<th>S.N</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Password</th>
<th>Delete</th>



</thead>
<tbody class="text-center text-danger">
<?php
if($record){
    while($row=mysqli_fetch_assoc($record)){

	echo"
	<tr> 
	<td>$row[id]</td>
	<td>$row[username]</td>
	<td>$row[useremail]</td>
	<td>$row[userphone]</td>
	<td>$row[password]</td>
<td>	<a href='delete.php? ID=$row[id]' class='btn btn-danger'>Delete </td>
	</tr>
	";
}
}

?>


</tbody>



</table>

</body>


<?php



?>