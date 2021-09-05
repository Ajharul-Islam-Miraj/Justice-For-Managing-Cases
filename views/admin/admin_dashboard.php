<?php
    //if(!isset($_COOKIE["login_email"])){
	//	header("Location: ../landing.php");
	//}
?>
<html>
	<head>
		<title>ADMIN Dashboard</title>
		<link rel="stylesheet" type="text/css" href="../../../css/admin_dashboard.css">
	</head>
	<body> 
		<div style="float:right;" ><input type="text" name="reg_address" placeholder="Search" value=""><a href = "" >Search</a></div>
		<center>
		<h1>ADMIN - Dashboard</h1>
		<table border="2" id="admin-dashboard-style">
		<tr>
			<td><a href="new_admin.php">Recruit new ADMIN Member?</a><br></td>
			
		</tr>
		<tr>		
			<th align = "center"><a href= "print_report.php">Print Report</a></th>
		</tr>
		<tr>
			<th align = "center"><a href= "lawyer_info.php">Lawyers Info</a></th>
			
		</tr>
		<tr>
			<th align = "center"><a href= "client_info.php">Clients Info</a></th>
		</tr>
		<tr>
			<th align = "center"><a href= "top_trending_lawyer.php">Top Trending Lawyer</a></th>
		</tr>
		<tr>		
			<th align = "center"><a href= "profile.php">Profile</a></th>
		</tr>
		<tr>		
			<th align = "center"><a href= "ongoing_case_status.php">Ongoing Case Status</a></th>
		</tr>
		<tr>
			<td align="center"><a href="../landing.php">Logout</a></td>
		</tr>
		</table>
		</center>
		
		
	</body>

</html>