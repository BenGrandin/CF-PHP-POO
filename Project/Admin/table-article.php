<?php
require '../class/autoloader.class.php';

Autoloader::register();

$article = new Article(); 

if(isset($_POST['titre']) && isset($_POST['content'])) {
	if(!empty($_POST['titre']) && !empty($_POST['content'])) {

		$article->setTitle(htmlspecialchars($_POST['titre']));
		$article->setContent($_POST['content']);


		if($_POST['id'] != false) {
			$article->setId($_POST['id']);
			$article->update();
			
		}else {	
			$article->create();
		}
	}
}

// Suppression

if(isset($_GET['id'])) {
	$article->setId(htmlspecialchars($_GET['id']));
	$article->delete();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Admin</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->


		<script src="assets/js/modernizr.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
				
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<script src="assets/js/detect.js"></script>
		<script src="assets/js/fastclick.js"></script>
		<script src="assets/js/jquery.blockUI.js"></script>
		<script src="assets/js/jquery.nicescroll.js"></script>

		<!-- App js -->
		<script src="assets/js/pikeadmin.js"></script>

		<!-- BEGIN Java Script for this page -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

			<!-- Counter-Up-->
			<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
			<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>	
		
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.php" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>
        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>
					
					<li class="submenu">
                        <a href="#" class="active"><i class="fa fa-fw fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="table-article.php">Article</a></li>
                                <li><a href="table-media.php">Media</a></li>
                                <li><a href="table-user.php">User</a></li>
							</ul>
                    </li>
					
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
					
						<div class="row">
									<div class="col-xl-12">
											<div class="breadcrumb-holder">
													<h1 class="main-title float-left">VIEW / EDIT / ADD ARTICLE</h1>
													<ol class="breadcrumb float-right">
														<li class="breadcrumb-item">Table</li>
														<li class="breadcrumb-item active">Article</li>
													</ol>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
						<div class="row" id="content">
							<!-- c'était pas difficile bordel, tu as passé du temps a tout faire mais même pas fichu de faire ce lien !! !-->
							<button class="btn btn-success" id="btn_add">New article</button>
						
                        <table class="table table-striped table-dark">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TITLE</th>
							<th scope="col">CONTENT</th>
							<th scope="col">OPTIONS</th>
                            </tr>
	                    </thead>
						<?php
						foreach($article->fetchAll() as $data) {
						
						?>
                        <tbody>
                            <tr>
                            <th scope="row"><?= $data["id"]; ?></th>
                            <td><?= $data["title"]; ?></td>
							<td><?= $data["content"]; ?></td>
							<td>
								<button type="button" id="<?=$data['id'];?>" class="btn btn-primary edit">Edit</button>
								<a href="?id=<?=$data['id'];?>"  class="btn btn-danger">Delete</a>
							</td>
                        </tbody>
						<script>
							$("#<?= $data['id'] ?>").on("click", function() {
								$.ajax({
									url: 'ajax/addArticle.php',
									type: "POST",
									data: "id=<?= $data['id']; ?>",
									dataType: "html",
									success: function(data) {
										$("#content").html(data);
									},
									error: function(e) {
										alert(e);
									}
								})
							});
						</script>
						<?php
						}
						?>
                        </table>

            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">4 Fantastiques</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>
	</footer>

</div>
<!-- END main -->
		

	<script>
		$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();
					
			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		

		

		$("#btn_add").on("click", function() {
			$.ajax({
				url: "ajax/addArticle.php",
				type: "GET",
				success: function(data) {
					$("#content").html(data);
				},
				error : function(error) {
					alert("Erreur");
				}
			})
		})
	</script>
	
<!-- END Java Script for this page -->

</body>
</html>
