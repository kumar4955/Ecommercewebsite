
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


<body>
	<?php
	$count=0;
	if(isset($_SESSION['cart'])){
		$count=count($_SESSION['cart']);
	}


?>
	<nav class="navbar navbar-expand-md
				bg-danger navbar-dark">
		<div class="container">
       
       
    </a>
			<h1> <img id="logo"  src="" width=30% height=30% />
                <class="navbar-brand">
				<a href="#" class="navbar-brand">
					Samaanta Fundraiser
				</a>
               
			</h1>
            <a href ="" class="text-light text-decoration-none pe-2  ml-5"><i class="fas fa-home"></i>Home<a>

            <a href ="" class="text-light text-decoration-none pe-2 ml-4 "><i class="fas fa-shopping-cart"></i>Add to cart(<?php echo $count ?>)<a>
				
			<button class="navbar-toggler"
					data-toggle="collapse"
					data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav ml-auto text-center ">
					<li class="nav-item">
						
                 
                        
					</li>
					<li class="nav-item">
					<a class="nav-link active" href="form/logout.php">Hello,  |

					<?php
					session_start();
					if(isset($_SESSION['user'])){
					echo $_SESSION['user'];
					echo"
					<ul>
					<li class='nav-item md-3'>
						<a class='nav-link active' href='form/logout.php'>Logout</a>
						</a>
					</li>
					</ul>
					";

				}
				else{
					echo"
					<ul>
					<li class='nav-item'>
						<a class='nav-link active' href='form/login.php'>Login </a>
						</a>
					</li>
					</ul>
					";
				}
?>
					
					
                    
					</li>
					<li class="nav-item">
						<a class="nav-link active text-white " href="../admin/store.php">| Admin </a>
					
				</ul>
			</div>
		</div>
		
	</nav>
</div>
<br>
	<div class="bg-primary  width:3px">
		<ul class="list-unstyled d-flex justify-content-center width:3px">
			<li><a href="index.php" class="font-weight-bold text-decoration-none text-white fw-bold fs-4 px-5">QUILING</a></li>
			<li><a href="Mandala.php" class="font-weight-bold text-decoration-none text-white fw-bold fs-4 px-5">MANDALA</a></li>
		<li><a href="Bottel.php" class="font-weight-bold text-decoration-none text-white fw-bold fs-4 px-5">BOTTLE </a></li>
		<li><a href="Stone.php" class="font-weight-bold text-decoration-none text-white fw-bold fs-4 px-5">STONE </a></li>
<li><a href="Sketch.php" class="font-weight-bold text-decoration-none text-white fw-bold fs-4 px-5">SKETCH</a></li></h1> <br>
<li><a href="Paintin.php" class="font-weight-bold text-decoration-none text-white fw-bold fs-4 px-5">PAINTING</a></li></h1> <br>

</ul>



	
    <style>
.text{
    margin:10px;
}


</style>