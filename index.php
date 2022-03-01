<?php 
session_start(); include_once 'header.php'; 
    if(isset($_SESSION["user"])){
        
        header("Location: http://localhost/project/home.php");
    } ?>

<section class="py-50">
	<div class="container">
		<div class="row justify-content-center g-0">
			<div class="col-lg-5 col-md-5 col-12">
				<div class="box box-body">
					<div class="content-top-agile pb-0 pt-20">
						<h2 class="text-primary">Let's Get Started</h2>
						<p class="mb-0">Sign in to continue to Freelance.</p>		
						
					</div>
					<div class="p-40">
					    
						<?php if($error != ''){ ?>
						    <div class="alert alert-danger" role="alert">
                              Please check Email or password
                            </div>
						<?php } ?>
						<form action="" method="post">
							<div class="form-group">
								<div class="input-group mb-15">
									<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
									<input type="text" name='email' class="form-control ps-15 bg-transparent" required placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-15">
									<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
									<input type="password" name='password' class="form-control ps-15 bg-transparent"  required placeholder="Password">
								</div>
							</div>
								<div class="row">
								<div class="col-6">
									<div class="checkbox ms-5">
									<input type="checkbox" id="basic_checkbox_1">
									<label for="basic_checkbox_1" class="form-label">Remember Me</label>
									</div>
								</div>
								<!-- /.col -->
								<div class="col-6">
									<div class="fog-pwd text-end">
									<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
									</div>
								</div>
								<!-- /.col -->
								<div class="col-12 text-center">
									<button type="submit" name='login' value='login' class="btn btn-info w-p100 mt-15">SIGN IN</button>
								</div>
								<!-- /.col -->
								</div>
						</form>	
						<div class="text-center">
							<p class="mt-15 mb-0">Don't have an account? <a href="register.php" class="text-warning ms-5">Register</a></p>
						</div>	
					</div>
				</div>								
<!-- 
				<div class="text-center">
					<p class="mt-20">- Login With -</p>
					<p class="d-flex gap-items-2 mb-0 justify-content-center">
						<a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
					</p>	
				</div> -->
			</div>
		</div>
	</div>
</section>


	<?php include_once 'footer.php'; ?>