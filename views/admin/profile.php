<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
		  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
		  crossorigin="anonymous"></script>
</head>
<body>
	<img src="" id="profile_img">
	<table id="user_info" class="<?php echo $_COOKIE["id"];?>" border="1px solid">
	</table>
	<a href="admin_dashboard.php">Back</a>
	<script src="../../scripts/profile.js"></script>
</body>
</html>