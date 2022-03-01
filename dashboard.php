<?php 
session_start(); include_once 'header.php'; 
if(!isset($_SESSION["user"])){
    
    header("Location: http://localhost/project/");
}


$data;
$sql = "SELECT * FROM user WHERE email='".$_SESSION["user"]."' LIMIT 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
  while($row = $result->fetch_assoc()) {
    $data = $row;
  }
  
} else {
    $error = '1';
}



  
$sql2 = "select * from `buy` where userid =  '" . $_SESSION["user"] . "'";

$result2 = $conn->query($sql2);
$coins  = 0;
if ($result2->num_rows > 0) {
    $data = $result2->fetch_assoc();
    $coins = $data['coins'];
}

?>

<?php include_once 'nav.php'; ?>

	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">My Dashboard</h2>
						
                        
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">
					<div class="widget courses-search-bx placeholdertx mb-10">
						<div class="form-group">
							<div class="input-group">
								<label>Search Leads</label>
								<input name="name" type="text" required="" class="form-control">
							</div>
						</div>
					</div>
					<div class="position-sticky t-100">
						<div class="box box-widget widget-user-2">
							<div class="widget-user-header bg-secondary-light">
							  <div class="widget-user-image">
								<img class="rounded-circle bg-danger" src="https://cdn-icons-png.flaticon.com/512/219/219983.png" alt="User Avatar">
							  </div>
							  <h3 class="widget-user-username"><?php echo $data['fullname'] ?> (<?php echo $coins; ?> Coins) </h3>
							  <h6 class="widget-user-desc">Active</h6>
							</div>
							<div class="box-footer no-padding">
								<ul class="nav d-block nav-stacked fs-16" id="pills-tab23" role="tablist">
									
									<li class="nav-item bb-1">
										<a class="py-10 nav-link active" id="pills-payments-tab" data-bs-toggle="pill" href="#pills-payments" role="tab" aria-controls="pills-payments" aria-selected="true">
											<span class="me-10 icon-Money"><span class="path1"></span><span class="path2"></span></span>Connected Leads
										</a>
									</li>
									
                                    

									<li class="nav-item bb-1">
										<a class="py-10 nav-link " id="pills-edit-tab" data-bs-toggle="pill" href="#pills-edit" role="tab" aria-controls="pills-edit" aria-selected="true">
											<span class="me-10 icon-Edit"><span class="path1"></span><span class="path2"></span></span>Edit Profile 
										</a>
									</li>

									<li class="nav-item">
										<a class="py-10 nav-link" href="buy.php">
											<span class="me-10 icon-Unlock"></span>Buy Coins
										</a>
									</li>
									<li class="nav-item">
										<a class="py-10 nav-link" href="logout.php">
											<span class="me-10 icon-Unlock"></span>Logout
										</a>
									</li>
								</ul>
							</div>						
							<div class="p-15 bt-1 bb-1">
								<div class="row text-center">
									<div class="col-6 be-1">
										<a href="#" class="link d-flex align-items-center justify-content-center font-medium">
											<span class="icon-Mail fs-20 me-5"></span>Message</a>
									</div>
									<div class="col-6">
										<a href="#" class="link d-flex align-items-center justify-content-center font-medium">
											<span class="icon-Code1 fs-20 me-5"><span class="path1"></span><span class="path2"></span></span>Portfolio</a>
									</div>
								</div>						
							</div>
					   </div>
						
					   
					</div>
				</div>

				<div class="col-lg-9 col-md-8 col-12">
					<div class="box">
						<div class="box-body">
							<div class="tab-content" id="pills-tabContent23">
								<div class="tab-pane fade" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab">
									<div class="row">
										<div class="col-12">
											<form class="form">
												<div>
													<h4 class="box-title text-primary"><i class="ti-user me-15"></i> Edit Profile</h4>
													<hr class="my-15">
													<div class="row">
													  <div class="col-md-12">

														<div class="form-group">
														  <label class="form-label">Full Name</label>
														  <input type="text" class="form-control" value='<?php echo $data['fullname'] ?>'  placeholder="First Name">
														</div>
													  </div>
													  
													</div>
													<div class="row">
													  <div class="col-md-6">
														<div class="form-group">
														  <label class="form-label">Company Name</label>
														  <input type="text" class="form-control" placeholder="Company Name">
														</div>
													  </div>
													  <div class="col-md-6">
														<div class="form-group">
														  <label class="form-label">Contact Number</label>
														  <input type="tel" class="form-control" placeholder="Phone">
														</div>
													  </div>
													</div>
													<h4 class="box-title text-primary mt-30"><i class="ti-envelope me-15"></i> Contact Info &amp; Bio</h4>
													<hr class="my-15">
													<div class="form-group">
													  <label class="form-label">Email</label>
													  <input class="form-control" type="email" placeholder="email">
													</div>
													<div class="form-group">
													  <label class="form-label">Website</label>
													  <input class="form-control" type="url" placeholder="http://">
													</div>
													<div class="form-group">
													  <label class="form-label">Contact Number</label>
													  <input class="form-control" type="tel" placeholder="Contact Number">
													</div>
													<div class="form-group">
													  <label class="form-label">Address</label>
													  <input class="form-control" type="text" placeholder="Address">
													</div>
													<div class="form-group">
													  <label class="form-label">Bio</label>
													  <textarea rows="4" class="form-control" placeholder="Bio"></textarea>
													</div>
													<h4 class="box-title text-primary mt-30"><i class="ti-share me-15"></i> Social Profile</h4>
													<hr class="my-15">
													<div class="form-group">
													  <label class="form-label">Facebook</label>
													  <input class="form-control" type="text" placeholder="Facebook">
													</div>
													<div class="form-group">
													  <label class="form-label">Twitter</label>
													  <input class="form-control" type="text" placeholder="Twitter">
													</div>
													<div class="form-group">
													  <label class="form-label">Instagram</label>
													  <input class="form-control" type="text" placeholder="Instagram">
													</div>
													<div class="form-group">
													  <label class="form-label">Linkedin</label>
													  <input class="form-control" type="text" placeholder="Linkedin">
													</div>
													<hr class="my-15">
												</div>
												<div class="d-flex justify-content-end gap-items-2">
													<button type="submit" class="btn btn-success">
													  <i class="ti-save-alt"></i> Save changes
													</button>
													<button type="button" class="btn btn-danger">
													  <i class="ti-trash"></i> Cancel
													</button>
												</div>  
											</form>
										</div>
									</div>
								</div>
								<div class="tab-pane fade show active" id="pills-payments" role="tabpanel" aria-labelledby="pills-payments-tab">									
									<h4 class="box-title mb-0">
										Connected Leads
									</h4>
									<hr>
									
									
									
									
									
									<div class="table-responsive mt-30">
									  <table class="table table-striped">
									  		<thead>
												<tr class="bg-dark">
												  <th>ID</th>
												  <th>Title</th>
												  <th>Budget</th>
												  <th>Company Name</th>
												  <th>Total Visit</th>
												</tr>										
									  		</thead>
									  		<tbody>
									  		    <?php $data2;
                                                    $sql = "SELECT * FROM leades WHERE user_id='".$_SESSION["user"]."' ;";
                                                    $result = $conn->query($sql);
                                                    
                                                    
                                                    if ($result->num_rows > 0) {
                                                        
                                                      while($row = $result->fetch_assoc()) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['id'] ?></td>
                                                        <td><?php echo $row['title'] ?></td>
                                                        <td><?php echo $row['budget'] ?></td>
                                                        <td><?php echo $row['cname'] ?></td>
                                                        <td><?php echo $row['total_visit'] ?></td>
                                                    </tr>
                                                <?php
                                                      }
                                                      
                                                    }
                                                    
                                                    $conn->close(); 
                                                    
                                                    
 ?>
									  		</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">								
									<h4 class="box-title mb-0">
										Calendar
									</h4>
									<hr>
									<div class="row">	
									  <div class="col-12">
										  <div id="calendar"></div> 
									  </div>
									  <div class="col-12"> 
										<div class="box no-border no-shadow">
											<div class="box-header with-border">
											  <h4 class="box-title">Draggable Events</h4>
											</div>
											<div class="box-body p-0">
											  <!-- the events -->
											  <div id="external-events">
												<div class="external-event m-15 bg-primary" data-class="bg-primary"><i class="fa fa-hand-o-right"></i>Lunch</div>
												<div class="external-event m-15 bg-warning" data-class="bg-warning"><i class="fa fa-hand-o-right"></i>Go home</div>
												<div class="external-event m-15 bg-info" data-class="bg-info"><i class="fa fa-hand-o-right"></i>Do homework</div>
												<div class="external-event m-15 bg-success" data-class="bg-success"><i class="fa fa-hand-o-right"></i>Work on UI design</div>
												<div class="external-event m-15 bg-danger" data-class="bg-danger"><i class="fa fa-hand-o-right"></i>Sleep tight</div>
											  </div>
											  <div class="event-fc-bt mx-15 my-20">
												<!-- checkbox -->
												<div class="checkbox">
													<input id="drop-remove" type="checkbox">
													<label for="drop-remove">
														Remove after drop
													</label>
												</div>
												<a href="#" data-bs-toggle="modal" data-bs-target="#add-new-events" class="btn btn-success w-p100 my-10">
													<i class="ti-plus"></i> Add New Event
												</a>
											  </div>
										   </div>
										</div>
									  </div> 
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- BEGIN MODAL -->
	<!-- Modal Add Category -->
	<div class="modal fade none-border center-modal" id="add-new-events">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><strong>Add</strong> a category</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form role="form">
						<div class="row">
							<div class="col-md-6">
								<label class="control-label form-label">Category Name</label>
								<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
							</div>
							<div class="col-md-6">
								<label class="control-label form-label">Choose Category Color</label>
								<select class="form-select form-white" data-placeholder="Choose a color..." name="category-color">
									<option value="success">Success</option>
									<option value="danger">Danger</option>
									<option value="info">Info</option>
									<option value="primary">Primary</option>
									<option value="warning">Warning</option>
									<option value="inverse">Inverse</option>
								</select>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success save-category" data-bs-dismiss="modal">Save</button>
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->
	
	
	
    
    
	<?php include_once 'footer_b.php'; ?>
	
	
	<?php include_once 'footer.php'; ?>