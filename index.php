	<?php
	include 'login.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cozy Shelter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css">
	<!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <!-- main css -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 ml-2">
				<img src="resources/logo.png" width="350px" height="150px">
			</div>
			<div class="col-sm-8 mt-5 ml-2 ">
				<nav class="navbar navbar-expand-lg navbar-dark">
					  <div class="container-fluid">
					    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-icon"></span>
					    </button>
					    <div class="collapse navbar-collapse" id="navbarNav">
					      <ul class="navbar-nav">
					        <li class="nav-item">
							  <a class="nav-link" aria-current="page" href="">Home</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" aria-current="page" href="ourpets.php">Our Pets</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" aria-current="page" href="find a shelter.html">Find a shelter</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" aria-current="page" href="gallery.html">Gallery</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" aria-current="page" href="educational info.html">Educational Info</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" aria-current="page" href="about us.html">About Us</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" aria-current="page" href="community.php">Community</a>
							</li>
					      </ul>
					    </div>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#loginModal" id="login">Login</button>
						<button class="btn btn-info" id="logout" type="button"  style="display: none;" onclick="buttonset()"><a href="logout.php" style="text-decoration: none; color: #2A2424;">Logout</a> </button>
					  </div>
					</nav>

			</div>
			<!-- popup starts here -->
					  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header border-bottom-0">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <div class="form-title text-center">
						          <h4>Login</h4>
						        </div>
						        <div class="d-flex flex-column text-center">
						          <form id="form" class="form" action="login.php" method="post">
						            <div class="form-control">
						              <input type="email"  id="email" name="email" placeholder="Your email address...">
					
          								<small>Error message</small>
						            </div>
						            <div class="form-control">
						              <input type="password"  id="password" name="password" placeholder="Your password...">

								          <small>Error message</small>
						            </div>
						            <button type="submit" id="submit" name="submit" type="button" class="btn btn-info btn-block" onclick="">Login</button>
						          </form>
						        </div>
						      </div>
						      <div class="modal-footer d-flex justify-content-center">
						        <div class="signup-section">Not a member yet? <a href="registration.html" class="text-info"> Sign Up</a>.</div>
						      </div>
						    </div> 
						  </div>
						</div>
		</div>
		<div class="row mt-5 ">
			<div class="col-sm-4 p-5 offset-1">
					<p id="fn">
						THE BEST THERAPIST<br>HAS FUR AND<br>FOUR LEGS
					</p>
				<button type="button" id="signin" class="btn btn-info" onclick="document.location='registration.html'">MAKE A FRIEND</button>
			</div>
			<div class="col-sm-5 offset-1 p-5">
				<img src="resources/home.png">
			</div>
			
		</div>
	
	<!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
   <!-- Custom Script -->      
<!--   <script  src="js/script.js"></script> -->

	<script type="text/javascript">
				const form = document.getElementById('form');
        const email = document.getElementById('email');
        const password = document.getElementById('password');

        form.addEventListener('submit', e => {

          if (!checkInputs()) {
          e.preventDefault();
          e.stopPropagation();
          }
          
        });

        function checkInputs() {
          // trim to remove the whitespaces
          
          const emailValue = email.value.trim();
          const passwordValue = password.value.trim();
          
          let factor = true;

          
          if(emailValue === '') {
            setErrorFor(email, 'Email cannot be blank');
            factor = false;
          } else if (!isEmail(emailValue)) {
            setErrorFor(email, 'Not a valid email');
            factor = false;
          } else {
            setSuccessFor(email);
            factor = true;
          }
          
          if(passwordValue === '') {
            setErrorFor(password, 'Password cannot be blank');
            factor = false;
          } else {
            setSuccessFor(password);
            factor = true;
          }
          

          return factor;
        }

        function setErrorFor(input, message) {
          const formControl = input.parentElement;
          const small = formControl.querySelector('small');
          formControl.className = 'form-control error';
          small.innerText = message;
        }

        function setSuccessFor(input) {
          const formControl = input.parentElement;
          formControl.className = 'form-control success';
        }
          
        function isEmail(email) {
          return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        }

        function buttonset(){
        		var lgin = document.getElementById("login");
        		var lgout = document.getElementById("logout");
        		var sign=document.getElementById("signin");
					  if (lgout.style.display === "none") {
					    lgout.style.display = "block";
					    lgin.style.display = "none";
					    sign.style.display = "none";

					  } else {
					    lgout.style.display = "none";
					    lgin.style.display = "block";
					    sign.style.display = "block";
					  }
        }

        window.onload = function () {
        	var status = '<?php echo $_SESSION['status'];?>';
        	if (status==1) {
        		buttonset();
        	}
        	
        }

	</script>
<!-- 	<script type="text/javascript" src="js/sweet.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
</body>
</html>