
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
<?php
session_start();
if(!$_SESSION['admin']){
	header("location:form/login.php");
}

?>

<body>
	<nav class="navbar navbar-expand-md
				bg-primary navbar-dark">
		<div class="container">
			<h1>
				<a href="#" class="navbar-brand">
					My Store
				</a>
               
			</h1>
            
				
			<button class="navbar-toggler"
					data-toggle="collapse"
					data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav ml-auto text-center ">
					<li class="nav-item">
						<a class="nav-link active" href="#"> Hello, admin 
						</a> 
                 
                        
					</li>
                    
					<li class="nav-item">
						<a class="nav-link active" href="form/logout.php">Logout  |</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active " href="#"> Userpanel </a>
					
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<br>
	<div class="das text-center"><h1 >Welcome To Dashboard</h1></div><br>
	<div class ="col-md-6 bg-danger text-center m-auto">
	<a href="product\index.php" class="text-white  text-decoration-none fs-4 fw-bold px-5 ">Add product</a>
	<a href="user.php" class="text-white  text-decoration-none fs-4 fw-bold px-5 ">User</a>
</div>
</body>

</html>

<style>


</style>