<?php
if(isset($_POST['id'])) {
	echo "post detecté";
}
?>

<!-- BEGIN CSS for this page --> 
		<link rel="stylesheet" href="assets/plugins/trumbowyg/ui/trumbowyg.min.css"> 
		<!-- END CSS for this page --> 

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						 
						<div class="card mb-3"> 
							<div class="card-header"> 
								<h3><i class="fa fa-file-o"></i> Ajouter un article</h3> 
								Modifier jusqu'à ce que cela marche.
							</div> 
							<div class="card-body"> 
								 
 
								<form class="demo-form" action="table-article.php" method="POST"> 
									  <div class="form-section current"> 
										<label for="titre">TITRE: </label> 
										<input type="text" class="form-control parsley-error" name="titre" id="firstname" required="" data-parsley-group="block-0" data-parsley-id="24"> 
 
                                        <textarea rows="3" class="form-control editor" name="content"></textarea> 
 
									  </div> 
										 
									  <br><br> 
										 
									  <div class="form-navigation"> 
										<button type="button" class="previous btn btn-info pull-left" style="display: none;">&lt; Previous</button> 
										<input type="submit" class="next btn btn-info pull-right" /> 
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
 