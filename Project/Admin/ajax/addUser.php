<?php
require '../../class/autoloader.class.php';

Autoloader::register();


$array = [
	"id" => false,
	"title" => null,
	"content" => null
];


?>						

						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="fa fa-check-square-o"></i>Add User</h3>
								Allows granting access to a person.	
							</div>
								
							<div class="card-body">
								
								<form action="table-user.php" autocomplete="off" method="post">
								  <div class="form-group row">
									<label for="name" class="col-sm-2 col-form-label">User name</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" id="name" name="name" placeholder="Email" autocomplete="off">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="password" class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
									</div>
								  </div>
								  <div class="form-group row">
									<div class="col-sm-10">
									  <button type="submit" class="btn btn-primary">Add User</button>
									</div>
								  </div>
								</form>
								
							</div>							
						</div><!-- end card-->					
                    </div>
            </div>
			<!-- END container-fluid -->

		<!-- END content -->

    </div>
	<!-- END content-page -->
    
