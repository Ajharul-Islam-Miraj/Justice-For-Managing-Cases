<?php
    include 'judge_header.php';
    require_once '../controllers/judge_controller.php';
    require_once '../controllers/common_controller.php';
    $my_profile=getUserById($_COOKIE["id"]);
?>
<div class=" d-flex flex-row ">
    <div class="card-header w-22 p-1  bg-secondary">
            <img  src="<?php echo $my_profile[0]["pp"];?>"  width='190px' height='200px'>
            <div >
                <h5 class="font-weight-bold text-capitalize  text-white mt-2 text-center"><?php echo $my_profile[0]["fullname"];?></h5>
            </div>
        </div>
<div class="card-body p-0">
  <table class="table font-weight-bold text-capitalize">
    <tbody>
              <tr>
              <th scope="row">Full Name</th>
              <td><?php echo "<td>".$my_profile[0]["fullname"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">ID</th>
              <td><?php echo "<td>".$my_profile[0]["id"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">User Name</th>
              <td><?php echo "<td>".$my_profile[0]["username"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">Email</th>
              <td><?php echo "<td>".$my_profile[0]["email"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">Phone</th>
              <td><?php echo "<td>".$my_profile[0]["phone"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">Birthday</th>
              <td><?php echo "<td>".$my_profile[0]["dob"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">Gender</th>
              <td><?php echo "<td>".$my_profile[0]["gender"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">Address</th>
              <td><?php echo "<td>".$my_profile[0]["address"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">City</th>
              <td><?php echo "<td>".$my_profile[0]["city"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">State</th>
              <td><?php echo "<td>".$my_profile[0]["state"]."</td>";?></td>
              </tr>
              <tr>
              <th scope="row">Zip/Postal</th>
              <td><?php echo "<td>".$my_profile[0]["zip"]."</td>";?></td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  update info
                  </button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success " id="exampleModalLabel">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="POST" enctype="multipart/form-data" onsubmit="return registrationValidation()" style="padding:20px;">
      <div class="modal-body">

      <table class="table font-weight-bold text-capitalize ">
   <tr>
    <td align="center">
        <div class="card border-success dropshadow">
  <div class="card-body">
      <table>
          <tr>
          <td align="left" style="padding-bottom:10px;">Profile Picture: </td>
          <td align="left" style="padding-bottom:10px;"><input class="form-control" type="file" name="pp" id="pp" accept="image/*"><span id="err_pp" style="color:red;"><?php echo $err_pp;?></span></td>
      </tr>
      <tr>
          <td align="left" style="padding-bottom:10px;">Full Name: </td>
          <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $my_profile[0]["fullname"]; ?>"><span id="err_fullname" style="color:red;"><?php echo $err_fullname;?></span></td>
      </tr>
      <tr>
          <td align="left" style="padding-bottom:10px;">Birthday: </td>
          <td align="left" style="padding-bottom:10px;"><input class="form-control" type="date" name="dob" id="dob" value="<?php echo $my_profile[0]["dob"]; ?>"><span id="err_dob" style="color:red;"><?php echo $err_dob;?></span></td>
      </tr>
      <tr>
          <td align="left" style="padding-bottom:10px;">Address: </td>
          <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="address" id="address" placeholder="Address" value="<?php echo $my_profile[0]["address"]; ?>"><span id="err_address" style="color:red;"><?php echo $err_address;?></span></td>
      </tr>
      <tr>
          <td align="left" style="padding-bottom:10px;">City: </td>
          <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="city" id="city" placeholder="City" value="<?php echo $my_profile[0]["city"]; ?>"><span id="err_city" style="color:red;"><?php echo $err_city;?></span></td>
      </tr>
      <tr>
          <td align="left" style="padding-bottom:10px;">State: </td>
          <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="state" id="state" placeholder="State" value="<?php echo $my_profile[0]["state"]; ?>"><span id="err_state" style="color:red;"><?php echo $err_state;?></span></td>
      </tr>
      <tr>
          <td align="left" style="padding-bottom:10px;">Zip/Postal: </td>
          <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="zip" id="zip" placeholder="Postal/Zip-Code" value="<?php echo $my_profile[0]["zip"]; ?>"><span id="err_zip" style="color:red;"><?php echo $err_zip;?></span></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input class="btn btn-outline-success" type="submit" name="update_button" value="Update"></td>
    </tr>
    </form>
</table>
        </div>
    </div>
  </td>
  </tr>
      </table>
      </div>

      </div>
    </div>
  </div>
</div>
      </td>
              </tr>
        </tbody>
        </table>
        </div>
      </div>
      </div>
        </td>
    </tr>
</table>


</div>
<?php
    include 'j_footer.php';
?>
