<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Pack Admin Panel';

?>

	<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php if(isset($title)){ echo $title; }?></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="style/main.css">
		<link rel="stylesheet" href="style/jquery-ui-1.10.0.custom.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>=
		<script>
			$(function() {
				$( "#tabs" ).tabs();
			});
		</script>
	</head>
<body>


<div class="container">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<h2>OpenLauncher Pack Editor</h2>
				<p><a href='logout.php'>Logout</a></p>
				<hr>
			<h4>Welcome <?php echo $_SESSION['username']; ?></h4>
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">My Packs</a></li>
					<li><a href="#tabs-2">New Pack</a></li>
					<li><a href="#tabs-3">Help</a></li>
				</ul>

				<div id="tabs-1">
				<div class="list-group">
					<a href="#" class="list-group-item">
						<span class="badge">1.7.10</span>
						<h4 class="list-group-item-heading">Epic mod pack</h4>
						<p class="list-group-item-text">This is an epic mod pack!</p>
					</a>
					<a href="#" class="list-group-item">
						<span class="badge">1.8</span>
						<h4 class="list-group-item-heading">Phe0nix</h4>
						<p class="list-group-item-text">This is a mod pack made by modmuss50.</p>
					</a>
					<a href="#" class="list-group-item">
						<span class="badge">1.6.4</span>
						<h4 class="list-group-item-heading">Testing</h4>
						<p class="list-group-item-text">This is a place holder pack that is used for testing the website.</p>
					</a>
					<a href="#" class="list-group-item list-group-item-danger">
						<span class="badge">1.2.5</span>
						<h4 class="list-group-item-heading">A mod pack!</h4>
						<p class="list-group-item-text">This is a mod pack, it is also here just to show off the layout of the website. This can show if a mod pack is not live on the launcher or is damaged.</p>
					</a>
				</div>
				</div>

				<div id="tabs-2">
					<p>Please fill in the details of your new mod pack bellow.</p>
					<form role="form" method="post" action="makeNewPack.php" autocomplete="off">

						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Pack Name" tabindex="1">
						</div>
						<div class="form-group">
							<input type="text" name="description" id="description" class="form-control input-lg" placeholder="Description" tabindex="2">
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="mcVer" id="mcVer" class="form-control input-lg" placeholder="Minecraft version" tabindex="3">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="forgeVer" id="forgeVer" class="form-control input-lg" placeholder="Forge Version" tabindex="4">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Next" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
						</div>
					</form>
				</div>
				<div id="tabs-3">
					<p>This is where the help section will be</p>
				</div>
			</div>
		</div>
	</div>


</div>

<?php 
//include header template
require('layout/footer.php'); 
?>