<?php
    require_once '../../models/db_conn.php';
	require_once '../../controllers/lawyer_controller.php';
?>

<html>
    <head>
        <title>New Lawyer- Registration</title>
        <link rel="stylesheet" href="../../css/admin_registration_style.css" type="text/css">
    </head>
    <body>
        <center>
            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return registrationValidation()" style="padding:20px;">
                <table>
                    <tr>
                        <td style="padding:20px;"><img src="../../assets/justicelogo.png"; width="380" height="480"></td>
                        <td align="center">
                            <div class="card border-success mb3 dropshadow">
                                <div class="card-header">Register as Lawyer</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Profile Picture: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="file" name="pp" id="pp" accept="image/*"><span id="err_pp" style="color:red;"><?php echo $err_pp;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Full Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>"><span id="err_fullname" style="color:red;"><?php echo $err_fullname;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">User Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" onkeyup="isTakenUsername(this.value)" type="text" name="username" id="username" placeholder="User Name" value="<?php echo $username; ?>"><span id="err_username" style="color:red;"><?php echo $err_username;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Email: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" onkeyup="isTakenEmail(this.value)" type="text" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>"><span id="err_email" style="color:red;"><?php echo $err_email;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Phone: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" onkeyup="isTakenPhone(this.value)" type="number" name="phone" id="phone" placeholder="Phone Number" value="<?php echo $phone; ?>"><span id="err_phone" style="color:red;"><?php echo $err_phone;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Password: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="password" name="pass" id="pass" placeholder="Password"><span id="err_pass" style="color:red;"><?php echo $err_pass;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Confirm Password: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="password" name="cpass" id="cpass" placeholder="Confirm Password"><span id="err_cpass" style="color:red;"><?php echo $err_cpass;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">NID: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" onkeyup="isTakenNid(this.value)" type="number" name="nid" id="nid" placeholder="NID" value="<?php echo $nid; ?>"><span id="err_nid" style="color:red;"><?php echo $err_nid;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Birthday: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="date" name="dob" id="dob"><span id="err_dob" style="color:red;"><?php echo $err_dob;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Gender: </td>
                                            <td align="left" style="padding-bottom:10px;">
                                                <input type="radio" name="gender" id="gender_male" value="Male"> Male
                                                <input type="radio" name="gender" id="gender_female" value="Female"> Female
                                                <span id="err_gender" style="color:red;"><?php echo $err_gender;?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Address: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="address" id="address" placeholder="Address"><span id="err_address" style="color:red;"><?php echo $err_address;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">City: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="city" id="city" placeholder="City"><span id="err_city" style="color:red;"><?php echo $err_city;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">State: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="state" id="state" placeholder="State"><span id="err_state" style="color:red;"><?php echo $err_state;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Zip/Postal: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="zip" id="zip" placeholder="Postal/Zip-Code"><span id="err_zip" style="color:red;"><?php echo $err_zip;?></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><input class="btn btn-outline-success" type="submit" name="reg_button" value="Register"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    <script src="../../scripts/lawyer_validation.js"></script>
    <script src="../../scripts/common_validation.js"></script>
	<a href="lawyer_info.php">Back</a>
    </body>
</html>