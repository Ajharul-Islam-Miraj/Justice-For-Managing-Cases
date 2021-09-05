<?php
    if(!isset($_COOKIE["id"])){
		header("Location: ../landing.php");
	}
?>
<html>
	<head>
		<title>Lawyer Information</title>
		<link rel="stylesheet" type="text/css" href="../../css/lawyer_info.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"
		  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		  crossorigin="anonymous"></script>
		  
		  <script
			  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
			  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
			  crossorigin="anonymous"></script>
		<script type="text/javascript" src = "../../scripts/lawyer_info.js"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		  ></script>
	</head>
	<body>
		<div style="float:right;" ><input type="text" name="reg_address" placeholder="Search" value=""><a href = "" >Search</a></div>
		<center>
		<h1>Lawyer Information</h1>
		<table>
			<tr>
				<td align="left"><a href="add_lawyer.php">Add Lawyer</a></td>
		</table>
		<table border="2" id="user_info">
		</table>
		<div class="modal" tabindex="-1" role="dialog" id="update_form">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form>
				  <div class="form-group">
					<label for="lawyer_name">lawyer Name</label>
					<input type="text" class="form-control" id="lawyer_name" value= "">
				  </div>
				  <div class="form-group">
					<label for="phone">Mobile No</label>
					<input type="text" class="form-control" id="phone" value= "">
				  </div>
				  <div class="form-group">
					<label for="nid">NID</label>
					<input type="text" class="form-control" id="nid" value= "">
				  </div>
				  <button type="submit" class="btn btn-primary update_data">Update</button>
				</form>
			  </div>

			</div>
		  </div>
		</div>
		</center>
		<a href="admin_dashboard.php">Back</a>
		
	</body>
</html>