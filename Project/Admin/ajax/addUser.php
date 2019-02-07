<?php
function my_autoloader($class)
{
	require '../../class/' . $class . '.php';
}
spl_autoload_register('my_autoloader');

$req = "SELECT * FROM user WHERE";

if (mysqli_query($tm->_db, $req)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $req . "<br>" . mysqli_error($conn);
}


?>						

						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="fa fa-check-square-o"></i>Add User</h3>
								Allows granting access to a person.	
							</div>
								
							<div class="card-body">
								
								<form action="" autocomplete="off" action="#" method="post">
								  <div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">User name</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" autocomplete="off">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="off">
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
    
