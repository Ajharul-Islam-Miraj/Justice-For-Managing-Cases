<?php
$conn = mysqli_connect("localhost", "root", "", "justicecms");
$sql = "SELECT * FROM users WHERE nid LIKE '%".$_POST['nid']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
              <td>".$row['id']."</td>
              <td>".$row['fullname']."</td>
              <td>".$row['username']."</td>
              <td>".$row['email']."</td>
              <td>".$row['phone']."</td>
              <td>".$row['nid']."</td>
              <td>".$row['dob']."</td>
              <td>".$row['gender']."</td>
              <td>".$row['address']."</td>
            </tr>";
	}
}
else{
	echo "<tr><td>0 result's not found</td></tr>";
}

?>
