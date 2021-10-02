<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>/public/admin/assets/img/favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/css/style.css">
    </head>

<body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form method="POST">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Name" name="username">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" name="password">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Confirm Password" name="repassword">
									</div>
									<div class="form-group mb-0">
										<p name="message" style="color:red; font-size:70%; text-align:center;"><?php echo $message?></p>
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								<div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
								</div>
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="login">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->
		
		<!-- Bootstrap Core JS -->
        <!-- <script src="assets/js/popper.min.js"></script> -->
        <!-- <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
		
		<!-- Custom JS -->
		<!-- <script src="assets/js/script.js"></script> -->
		
    <!-- Bootstrap Core JS -->
    <script src="<?= base_url() ?>/public/admin/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Slimscroll JS -->
    <script src="<?= base_url() ?>/public/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    
    <!-- Chart JS -->
    <script src="<?= base_url() ?>/public/admin/assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/plugins/apexchart/chart-data.js"></script>
    
    <!-- Custom JS -->
    <script  src="<?= base_url() ?>/public/admin/assets/js/script.js"></script>
</body>

</html>