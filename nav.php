
	<header class="top-bar">
		<div class="topbar">

		  <div class="container-fluid">
			<div class="row justify-content-end">
			  <div class="col-lg-6 col-12 d-lg-block d-none">
				<div class="topbar-social text-center text-md-start topbar-left">
				  <ul class="list-inline d-md-flex d-inline-block">
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-question-circle"></i> Ask a Question</a></li>
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-envelope"></i> info@abc.com</a></li>
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-phone"></i> +(1) 123-878-1649</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-lg-6 col-12 xs-mb-10">
				
			  
			  </div>
			 </div>
		  </div>
		</div>

		<nav hidden class="nav-white nav-transparent full-width">
			<div class="nav-header">
				<a href="http://localhost/project/home.php" class="brand">
					<img src="https://iqra.edu.pk/wp-content/uploads/2021/03/logo.jpg" alt=""/>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>								
			<ul class="menu">	
			
				<?php if($_SESSION["type"] == 1){ ?>
			    <li>
					<a href="home.php">Home</a>
				</li>
				<?php } ?>
				<li>
					<a href="dashboard.php">Dashboard</a>
				</li>	
				<?php if($_SESSION["type"] == 2){ ?>
				<li>
					<a href="form.php">Add Leads</a>
				</li>	
				<?php } ?>
				
				
				
			</ul>
			<ul class="attributes">
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>				
			</ul>

			<div class="wrap-search-fullscreen">
				<div class="container-fluid">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div>
		</nav>
	</header>
