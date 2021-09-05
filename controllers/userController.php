<?php
    require_once '../models/db_conn.php';
	$temp = "<tr><td><b>ID. NO</b></td><td><b>LAWYER NAME</b></td><td><b>MOBILE NO</b></td><td><b>NID</b></td><td><b><button id='remove_lawyer'>REMOVE</button></a></b></td><td><b><button id = 'update_lawyer'>UPDATE</button></b></td></tr>";
	if(strcmp($_POST["type"],"1") == 0 && strcmp($_POST["user_type"],"lawyer") == 0) {
		
		$query="SELECT * FROM users where type='lawyer'";
		$result=doNoQuery($query);
		
		if($result && mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					//echo $row["pp"];
					$temp .= "<tr><td><b>{$row["id"]}</b></td><td><b>{$row["username"]}</b></td><td><b>{$row["phone"]}</b></td><td><b>{$row["nid"]}</b></td><td><b><button id='remove_lawyer' class={$row["id"]}  >REMOVE</button></a></b></td><td><b><button class='{$row["id"]} {$row["username"]} {$row["phone"]} {$row["nid"]} update_lawyer_btn' data-toggle='modal' data-target='#update_form'>UPDATE</button></b></td></tr>";
				}
			}
		echo $temp;
	} else if($_POST['type'] == "2" && $_POST["user_type"] == "lawyer") {
		$query="DELETE FROM users WHERE id={$_POST['id']}";
		doNoQuery($query);
	} else if ($_POST['type'] == "3" && $_POST["user_type"] == "lawyer"){
		$query="UPDATE users SET username='{$_POST['username']}', nid = '{$_POST['nid']}', phone = '{$_POST['phone']}'  WHERE id={$_POST['id']}";
		doNoQuery($query);
	}
	else if ($_POST['type'] == "1" && $_POST["user_type"] == "client") {
		$query="SELECT * FROM users where type= '{$_POST["user_type"]}'";
		$result=doNoQuery($query);
		
		if($result && mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					//echo $row["pp"];
					$temp .= "<tr><td><b>{$row["id"]}</b></td><td><b>{$row["username"]}</b></td><td><b>{$row["phone"]}</b></td><td><b>{$row["nid"]}</b></td><td><b><button id='remove_lawyer' class={$row["id"]}  >REMOVE</button></a></b></td><td><b><button class='{$row["id"]} {$row["username"]} {$row["phone"]} {$row["nid"]} update_lawyer_btn' data-toggle='modal' data-target='#update_form'>UPDATE</button></b></td></tr>";
				}
			}
		echo $temp;
		
	}
	else if ($_POST['type'] == "2" && $_POST["user_type"] == "client") {
		$query="DELETE FROM users WHERE id={$_POST['id']} and type = 'client'";
		doNoQuery($query);
		
	}
	else if ($_POST['type'] == "3" && $_POST["user_type"] == "client") {
		$query="UPDATE users SET username='{$_POST['username']}', nid = '{$_POST['nid']}', phone = '{$_POST['phone']}'  WHERE id={$_POST['id']}";
		doNoQuery($query);
		
	}
	else if($_POST['type'] == "4" && $_POST["user_type"] == "admin") {
		$temp = "";
		$query="SELECT * FROM users where type= '{$_POST["user_type"]}' and id = '{$_POST["id"]}'";
		$result=doNoQuery($query);
		if($result && mysqli_num_rows($result)>0){
			$row=mysqli_fetch_assoc($result);
			$temp .= "<tr><td>ID</td><td>".$row["id"]."</td></tr><tr><td>Full Name</td><td>{$row["fullname"]}</td></tr><tr><td>Username</td><td>{$row["username"]}</td></tr><tr><td>Email</td><td>{$row["email"]}</td></tr><tr><td>Phone</td><td>{$row["phone"]}</td></tr><tr><td>NID</td><td>{$row["nid"]}</td></tr><tr><td>DOB</td><td>{$row["dob"]}</td></tr><tr><td>Gender</td><td>{$row["gender"]}</td></tr><tr><td>Address</td><td>{$row["address"]}</td></tr><tr><td>City</td><td>{$row["city"]}</td></tr><tr><td>State</td><td>{$row["state"]}</td></tr><tr><td>Zip</td><td>{$row["zip"]}</td></tr>";
		}
		echo $temp;
	}

	
?>