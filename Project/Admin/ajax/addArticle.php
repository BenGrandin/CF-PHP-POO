<?php
function my_autoloader($class)
{
	require '../../class/' . $class . '.php';
}
spl_autoload_register('my_autoloader');
?>

<!-- BEGIN CSS for this page --> 
		<link rel="stylesheet" href="assets/plugins/trumbowyg/ui/trumbowyg.min.css"> 
		<!-- END CSS for this page --> 

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						 
						<div class="card mb-3"> 
							<div class="card-header"> 
								<h3><i class="fa fa-file-o"></i> Add  article</h3> 
								Write what you want
							</div> 
							<div class="card-body"> 
								 
 
								<form class="demo-form" action="#" novalidate=""> 
									  <div class="form-section current"> 
										<label for="firstname">Name of the article: </label> 
										<input type="text" class="form-control parsley-error" name="firstname" id="firstname" required="" data-parsley-group="block-0" data-parsley-id="24"> 
 
                                        <textarea rows="3" class="form-control editor" name="content"></textarea> 
 
									  </div> 
										 
									  <br><br> 
										 
									  <div class="form-navigation"> 
										<button type="button" class="previous btn btn-info pull-left" style="display: none;">&lt; Previous</button> 
										<button type="button" class="next btn btn-info pull-right">Add article</button> 
										<input type="submit" class="btn btn-primary pull-right" style="display: none;"> 
										<span class="clearfix"></span> 
									  </div> 
 
									</form> 
									 
 
								 
							</div>														 
    			 
														 
						</div><!-- end card-->					 
                    </div> 
					 
			</div> 
 
 
 
<!-- BEGIN Java Script for this page --> 
<script src="assets/plugins/trumbowyg/trumbowyg.min.js"></script> 
<script> 
$(document).ready(function () { 
    'use strict'; 
	$('.editor').trumbowyg();							 
});  
</script> 
<!-- END Java Script for this page --> 
 