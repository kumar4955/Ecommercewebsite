<htmL>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head></head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-3">
              <h3 class="text-uppercase text-center mb-3">LOGIN FROM HERE</h3>
              <form id="login-form" class="form" action="login1.php" method="post">

                <div class="form-outline mb-3">
                  <input type="email"  name="username" id="form3Example1cg" class="form-control form-control-lg"/>
                  <label class="form-label"   for="form3Example1cg" >User Name</label>
                </div>
                
                <div class="form-outline mb-3">
                  <input type="password" name="userpassword" id="form3Example4cdg" class="form-control form-control-lg"  />
                  <label class="form-label"  for="form3Example4cdg" >Password</label>
                </div>

                

                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit"
                    class="btn btn-danger btn-block btn-lg gradient-custom-4 text-body">LOGIN</button>
                </div>

                <p class="text-center text-black fw-bold mt-5 mb-0">NO ACCOUNT? <a href="register.php"
                    class="fw-bold text-body"><u>Register here</u></a><b></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>