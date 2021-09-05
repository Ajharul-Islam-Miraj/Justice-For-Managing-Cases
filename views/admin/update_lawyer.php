<?php
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
	<head>
		<title>Update Lawyer</title>
		<link rel="stylesheet" type="text/css" href="../../css/update_lawyer.css">
	</head>
	<body>
		<center>
		<h1>Update Lawyer</h1>
		<table border="2" id="update-lawyer">
            <tr>
                <td><b>ID. NO</b></td>
                <td><b>LAWYER NAME</b></td>
                <td><b>MOBILE NO</b></td>
                <td><b>NID</b></td>
                <td><b>UPDATE</b></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Abul Kalam</td>
                <td>0199999999922</td>
                <td>199855764733</td>
            </tr>
		</center>
		<a href="lawyer_info.php">Back</a>
	</body>
</html>