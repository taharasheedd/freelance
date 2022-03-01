<?php 
session_start(); include_once 'header.php'; 
    if(!isset($_SESSION["user"])){
        
        header("Location: http://localhost/project/");
    }else{
        if($_SESSION["type"] == 2){
            
            header("Location: http://localhost/project/dashboard.php");
        }
    }
?>
<?php include_once 'nav.php'; ?>

    <section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Leads List</h2>

                    </div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12">
					<div class="side-block px-20 py-10 bg-white">
						<div class="widget courses-search-bx placeholdertx mb-30">
							<div class="form-group">
								<div class="input-group">
									<label>Search Keywords</label>
									<input name="name" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="widget">
							<h4 class="mb-25">Location</h4>
							<div class="widget placeholdertx mb-10">
								<div class="form-group">
									<div class="input-group">
										<input name="name" type="text" required="" class="form-control" placeholder="Type Location">
									</div>
								</div>
							</div>
						</div>
						<div class="widget">
							<h4 class="mb-25">Category</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="basic_checkbox_6" class="filled-in">
									<label for="basic_checkbox_6" class="d-flex justify-content-between align-items-center form-label">
										Accounting / Finance
										<span class="badge badge-sm badge-secondary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_7" class="filled-in">
									<label for="basic_checkbox_7" class="d-flex justify-content-between align-items-center form-label">
										Construction / Facilities(
										<span class="badge badge-sm badge-secondary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_8" class="filled-in">
									<label for="basic_checkbox_8" class="d-flex justify-content-between align-items-center form-label">
										Design & Multimedia
										<span class="badge badge-sm badge-secondary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_1" class="filled-in">
									<label for="basic_checkbox_1" class="d-flex justify-content-between align-items-center form-label">
										Education Training
										<span class="badge badge-sm badge-secondary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_2" class="filled-in">
									<label for="basic_checkbox_2" class="d-flex justify-content-between align-items-center form-label">
										Health
										<span class="badge badge-sm badge-secondary-light">08</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_3" class="filled-in">
									<label for="basic_checkbox_3" class="d-flex justify-content-between align-items-center form-label">
										Restaurant / Food Service
										<span class="badge badge-sm badge-secondary-light">05</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_4" class="filled-in">
									<label for="basic_checkbox_4" class="d-flex justify-content-between align-items-center form-label">
										Telecommunications
										<span class="badge badge-sm badge-secondary-light">15</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_5" class="filled-in">
									<label for="basic_checkbox_5" class="d-flex justify-content-between align-items-center form-label">
										Estate Agency
										<span class="badge badge-sm badge-secondary-light">02</span>
									</label>
								</li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Skills</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="levels_1" class="filled-in">
									<label for="levels_1" class="d-flex justify-content-between align-items-center form-label">
										Wordpress
										<span class="badge badge-sm badge-secondary-light">04</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="levels_2" class="filled-in">
									<label for="levels_2" class="d-flex justify-content-between align-items-center form-label">
										SEO 
										<span class="badge badge-sm badge-secondary-light">12</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="levels_3" class="filled-in">
									<label for="levels_3" class="d-flex justify-content-between align-items-center form-label">
										React Native
										<span class="badge badge-sm badge-secondary-light">05</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="levels_4" class="filled-in">
									<label for="levels_4" class="d-flex justify-content-between align-items-center form-label">
										Content Writer
										<span class="badge badge-sm badge-secondary-light">02</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="levels_5" class="filled-in">
									<label for="levels_5" class="d-flex justify-content-between align-items-center form-label">
										Marketeer
										<span class="badge badge-sm badge-secondary-light">02</span>
									</label>
								</li>
							</ul>
						</div>
						
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Budget</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="oftype_1" class="filled-in">
									<label for="oftype_1">
										10k - 20k
									</label>
								</li>
								<li>
									<input type="checkbox" id="oftype_2" class="filled-in">
									<label for="oftype_2">
										20k - 30k 
									</label>
								</li>
								<li>
									<input type="checkbox" id="oftype_3" class="filled-in">
									<label for="oftype_3">
										30k - 40k 
									</label>
								</li>
								<li>
									<input type="checkbox" id="oftype_4" class="filled-in">
									<label for="oftype_4">
										40k - 50k 
									</label>
								</li>
								<li>
									<input type="checkbox" id="oftype_5" class="filled-in">
									<label for="oftype_5">
										50k and above
									</label>
								</li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Industry</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="indutype_1" class="filled-in">
									<label for="indutype_1">
										Development
									</label>
								</li>
								<li>
									<input type="checkbox" id="indutype_2" class="filled-in">
									<label for="indutype_2">
										Management
									</label>
								</li>
								<li>
									<input type="checkbox" id="indutype_3" class="filled-in">
									<label for="indutype_3">
										Finance
									</label>
								</li>
								<li>
									<input type="checkbox" id="indutype_4" class="filled-in">
									<label for="indutype_4">
										Retail 
									</label>
								</li>
								<li>
									<input type="checkbox" id="indutype_5" class="filled-in">
									<label for="indutype_5">
										Charity
									</label>
								</li>
							</ul>
						</div>
					</div>	
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<div class="box">
						<div class="box-body">
							<div class="bg-light p-10 d-lg-flex justify-content-between align-items-center rounded">
								<p class="mb-lg-0 mb-20">Showing 1 to 7 of 13 entries</p>
								<div class="d-flex justify-lg-content-end align-items-center">
									<select class="form-select w-150">
										<option selected>Sort By...</option>
										<option value="1">New</option>
										<option value="2">Top Rated</option>
										<option value="3">Populer</option>
									</select>
									<ul class="nav nav-pills" id="pills-tab" role="tablist">
									  <li class="nav-item mx-5" role="presentation">
										  <a class="nav-link b-0 fs-18" id="pills-grid-tab" data-bs-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="false">
											<i class="fa fa-th me-0"></i>
										  </a>
									  </li>
									  <li class="nav-item mx-5" role="presentation">
										  <a class="nav-link active b-0 fs-18" id="pills-list-tab" data-bs-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="true">
											<i class="fa fa-list me-0"></i>
										  </a>
									  </li>
									</ul>								
								</div>
							</div>
						</div>
					</div>
					
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
							
							<?php
							
							 $data2;
                            $sql = "SELECT * FROM leades  ;";
                            $result = $conn->query($sql);
                            
                            
                            if ($result->num_rows > 0) {
                                
                              while($json = $result->fetch_assoc()) {
                        ?>
                           
                            
                              
							<div class="box">
								<div class="box-body">
									<div class="d-lg-flex">
										<div class="w-p100">
											<div class="d-flex align-items-center mb-30">
												<div class="me-15">
													<img src="images/logo/logo-1.jpg" class="avatar avatar-lg rounded100 bg-primary-light b-1" alt="">
												</div>
												<div class="d-flex flex-column flex-grow-1 fw-500">
													<a href="#" class="text-dark hover-primary mb-1 fs-20"> <?php echo $json['title']; ?> <span class="badge badge-success-light badge-sm">Full Time</span></a>
													<span class="fs-14"><i class="fa fa-map-marker me-10"></i><span class="text-fade">Karachi</span> Pakistan <em><small>30 min ago</small></em></span>
												</div>
											</div>
											<div class="d-lg-flex align-items-center justify-content-between">
												<div class="d-lg-flex d-block align-items-center">
													<h6 class="bg-secondary-light d-inline-block fw-500 px-10 py-5 mb-0 rounded"><span class="text-fade fw-400 me-10">Budget:</span> Rs <?php echo $json['budget']; ?> </h6>
													<h6 class="bg-secondary-light d-inline-block fw-500 px-10 py-5 mb-0 rounded my-10 my-lg-0 mx-lg-15 mx-0"><span class="text-fade fw-400 me-10">Responses:</span> 12</h6>
													<h6 class="bg-secondary-light d-inline-block fw-500 px-10 py-5 mb-0 rounded"><span class="text-fade fw-400 me-10">Area of Expertise:</span> <?php echo $json['skills']; ?> </h6>
												</div>
												<div class="ms-lg-10">
													<a href="#" class="waves-effect waves-light btn btn-primary-light btn-sm mt-lg-0 mt-10">More Info</a>
												</div>
											</div>
										</div>
										<div class="position-relative w-xl-300 w-lg-250 ps-lg-20 bs-1 ms-lg-20">
											<h4 class="mt-lg-0 mt-25 mb-25">
												<small class="text-fade fs-12">Status</small><br>
												Open
											</h4>
											<a href="Lead.php" class="waves-effect waves-light btn btn-block w-p100 btn-primary">Connect!</a>
										</div>
									</div>
								</div>
							</div>
                            
                            
                        <?php
                              }
                              
                            }
                            
                            $conn->close(); 
                            
                            

                           
                            
                            
                            ?>
							
							
						</div>
	
					</div>
					<div aria-label="Page navigation example">
					  <ul class="pagination mb-0">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					  </ul>
					</div>
				</div>	
			</div>
		</div>
	</section>
	
	
    
	<?php include_once 'footer_b.php'; ?>
	
	
	<?php include_once 'footer.php'; ?>