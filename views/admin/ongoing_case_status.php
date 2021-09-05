<?php
    if(!isset($_COOKIE["id"])){
		header("Location: ../landing.php");
	}
?>
<html>
	<head>
		<title>Ongoing Case Status</title>
		<link rel="stylesheet" type="text/css" href="../../css/ongoing_case_status.css">
	</head>
	<body>
		<center>
			<table border = "2" id="ongoing_case">
			<h4>Ongoing Case Status</h4>
			<tr>
				<th><u>Ongoing  Case</u></th>
				<th><u>Status</u></th>
			</tr>
			<tr>
				<td>Rajib Murder</td>
				<td>postponed</td>
			</tr>
			<tr>
				<td>Shattajit Murder</td>
				<td>Pending</td>
			</tr>
			
		</center>
		<a href="admin_dashboard.php">Back</a>
	</body>

</html>