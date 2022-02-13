<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Login - Todo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<!-- <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100"> -->
						<h1>TODO</h1>
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" id="login" action="validateuser.php" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="forgot.html" class="float-end">
											Forgot Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="register.php" class="text-dark">Create One</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<script src="js/login.js"></script>

<script type="text/javascript">
  $(function() {

     $("#email_error_message").hide();
     $("#password_error_message").hide();

     var error_email = false;
     var error_password = false;

     $("#email").focusout(function() {
        check_email();
     });
     $("#password").focusout(function() {
        check_password();
     });

     function check_password() {
        var password_length = $("#password").val().length;
        if (password_length < 8) {
           $("#password_error_message").html("Please Enter Atleast 8 Characters");
           $("#password_error_message").show();
           $("#password").css("border-bottom","2px solid #F90A0A",);
           error_password = true;
        } else {
           $("#password_error_message").hide();
           $("#password").css("border-bottom","2px solid #34F458");
        }
     }

     function check_email() {
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $("#email").val();
        if (pattern.test(email) && email !== '') {
           $("#email_error_message").hide();
           $("#email").css("border-bottom","2px solid #34F458");
        } else {
           $("#email_error_message").html("Invalid Email Address");
           $("#email_error_message").show();
           $("#email").css("border-bottom","2px solid #F90A0A");
           error_email = true;
        }
     }

     $("#login").submit(function() {
        error_email = false;
        error_password = false;

        check_email();
        check_password();

        if (error_email === false && error_password === false) {
           alert("Login Sucessful");
           return true;
        } else {
           alert("Please Enter Valid Email and password");
           return false;
        }
     });
  });
</script>
</body>
</html>
