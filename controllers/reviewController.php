<?php
    require_once '../models/db_conn.php';
	

	$query="SELECT r.id, r.review, r.rating, u.fullname FROM reviews as r, users as u WHERE r.reviewee_id = u.id and rating > 3";
	$result=doNoQuery($query);
	$temp = "<tr><td><b>ID</b></td><td><b>Review</b></td><td><b>Fullname</b></td><td><b>Rating</b></td>";
	if($result && mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$temp .= "<tr><td><b>{$row["id"]}</b></td><td><b>{$row["review"]}</b></td><td><b>{$row["fullname"]}</b></td><td><b>{$row["rating"]}</b></td>";
		}
	}
	echo $temp;
?>