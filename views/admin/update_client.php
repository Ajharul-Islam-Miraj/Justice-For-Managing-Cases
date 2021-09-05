<?php
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
	<head>
		<title>Update Client</title>
		<link rel="stylesheet" type="text/css" href="../../css/update_client.css">
	</head>
	<body>
		<center>
		<h1>Update Client</h1>
		<table border="2" id="update-client">
            <tr>
                <td><b>ID. NO</b></td>
                <td><b>CLIENT NAME</b></td>
                <td><b>MOBILE NO</b></td>
                <td><b>NID</b></td>
                <td><b>UPDATE</b></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Nasir Uddin</td>
                <td>0199999999922</td>
                <td>199855764733</td>
            </tr>
		</center>
		<a href="lawyer_info.php">Back</a>
	</body>
</html>