<?php  session_start(); include_once 'header.php'; 
    
if(isset($_POST['title'])){


    $sql = "INSERT INTO `leades`( `title`, `budget`, `cname`, `skills`, `details`, `exrequired`, `user_id`) 
    VALUES ( '" . $_POST['title'] . "' , '" . $_POST['budget'] . "' , '" . $_POST['cname'] . "' , '" . $_POST['skills'] . "' , 
    '" . $_POST['details'] . "' , '" . $_POST['exrequired'] . "'  , '" . $_SESSION["user"] . "' )";
    // die();
    $result = $conn->query($sql);
    
    $conn->close(); 
    

    
}
    if(!isset($_SESSION["user"])){
        
        header("Location: http://localhost/project/");
    }
    
    
    
?>

<?php include_once 'nav.php'; ?>

	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Add Your Lead</h2>
						
                        
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row">


				<div class="col-lg-12 col-md-12 col-12">
					<div class="box">
						<div class="box-body">
							<div class="tab-content" id="pills-tabContent23">
								<div class="tab-pane fade show active" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab">
									<div class="row">
										<div class="col-12">
											<form class="form" method='post'>
												<div>
													<h4 class="box-title text-primary"><i class=" me-15"></i> Add Lead</h4>
													<hr class="my-15">
													<div class="row">
													  <div class="col-md-6">

														<div class="form-group">
														  <label class="form-label">Title</label>
														  <input type="text" class="form-control" placeholder="Title" name='title'>
														</div>
													  </div>
													  <div class="col-md-6">
														<div class="form-group">
														  <label class="form-label">Budget</label>
														  <input type="text" class="form-control" placeholder="Budget" name='budget'>
														</div>
													  </div>
													</div>
													<div class="row">
													  <div class="col-md-6">
														<div class="form-group">
														  <label class="form-label">Company</label>
														  <input type="text" class="form-control" placeholder="Company Name" name='cname'>
														</div>
													  </div>
													  <div class="col-md-6">
														<div class="form-group">
														  <label class="form-label">Skills (Sepreate By dash)</label>
														  <input type="tel" class="form-control" placeholder="Skills" name='skills'>
														</div>
													  </div>
													</div>
													<h4 class="box-title text-primary mt-30"><i class="ti-envelope me-15"></i> Project Details</h4>
													<hr class="my-15">
													<div class="form-group">
													  <textarea class="form-control" type="email" placeholder="Details" name='details'></textarea>
													</div>
													
													
													<h4 class="box-title text-primary mt-30"><i class="ti-share me-15"></i> Expertise Required:</h4>
													<hr class="my-15">
													<div class="form-group">
													    
													  <textarea class="form-control" type="email" placeholder="Expertise" name='exrequired'></textarea>
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