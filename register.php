<?php 
session_start(); include_once 'header.php'; 
    if(isset($_SESSION["user"])){
        
        header("Location: http://localhost/project/home.php");
    }
?>
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Get started with Us</h2>
							<p class="mb-0">Register a New Membership</p>							
						</div>
						<div class="p-40">
							<form action="" method="post">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" name='fullname' class="form-control ps-15 bg-transparent" placeholder="Full Name">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
										<input type="email" name='email' class="form-control ps-15 bg-transparent" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" name='password' class="form-control ps-15 bg-transparent" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" name='cpassword' class="form-control ps-15 bg-transparent" placeholder="Retype Password">
									</div>
								</div>
								
								
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
										<select  name='select' class="form-control ps-15 bg-transparent" placeholder="Retype Password">
									        <option value='2'>Seller</option>
									        <option value='1'>Buyer</option>
									    </select>
									</div>
								</div>
								
								  <div class="row">
									<div class="col-12">
									  <div class="checkbox ms-5">
										<input type="checkbox" id="basic_checkbox_1">
										<label for="basic_checkbox_1" class="form-label">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info w-p100 mt-15" name='regoster' value='register'>Register</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>				
							<div class="text-center">
								<p class="mt-15 mb-0">Already have an account?<a href="index.php" class="text-danger ms-5"> Log In</a></p>
							</div>
						</div>
					</div>								

					
				</div>
			</div>
		</div>
	</section>	
	
	
<?php include_once 'footer.php'; ?>