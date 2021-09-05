<html>
    <head>
        <title>Justice - Forgot Password</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
        <link rel="icon" href="../assets/favicon_all_logo.png">
    </head>
    <body  style="padding-top:20px;">
        <center>
        <table>
            <tr>
                <td style="padding:20px;"><img src="../assets/justicelogo.png"; width="300" height="400"></td>
                <td align="center" style="padding:20px;">
                    <div id="step1" class="card border-success mb3 dropshadow" style="height:350px;width:250px">
                        <div class="card-header">Reset Password - Step 1</div>
                        <div class="card-body">
                            <input class="form-control" type="text" name="email" id="email" placeholder="Your Email" onkeyup="getEmailAddress(this.value)">
                            <span id="valid_email" style="color:green;"></span>
                            <span id="invalid_email" style="color:red;"></span>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-outline-warning" href="landing.php">Cancel</a><span style="padding-right:10px"></span><button onclick="sendOtp()" class="btn btn-success" name="reset_pass_email_button" id="reset_pass_email_button" disabled>Send OTP</button>
                        </div>
                    </div>
                </td>
                <td align="center" style="padding:20px;">
                    <div id="step2" class="card border-success mb3 dropshadow" style="height:350px;width:250px;display:none;">
                        <div class="card-header">Reset Password - Step 2</div>
                        <div class="card-body">
                            <input class="form-control" type="text" name="otp" id="otp" placeholder="OTP" onkeyup="matchOtp(this.value)">
                            <span id="valid_otp" style="color:green;"></span>
                            <span id="invalid_otp" style="color:red;"></span>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-outline-warning" href="landing.php">Cancel</a><span style="padding-right:10px"></span><button onclick="submitOtp()" class="btn btn-success" name="reset_pass_otp_button" id="reset_pass_otp_button" disabled>Submit OTP</button>
                        </div>
                    </div>
                </td>
                <td align="center" style="padding:20px;">
                    <div id="step3" class="card border-success mb3 dropshadow" style="height:350px;width:250px;display:none;">
                        <div class="card-header">Reset Password - Step 3</div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td style="padding-bottom:10px;">
                                        <input class="form-control" type="password" name="new_pass" id="new_pass" placeholder="New Password">
                                        <span id="err_new_pass" style="color:red;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-control" type="password" name="new_cpass" id="new_cpass" placeholder="Confirm New Password">
                                        <span id="err_new_cpass" style="color:red;"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer text-muted">
                            <a class="btn btn-outline-warning" href="landing.php">Cancel</a><span style="padding-right:10px"></span><button onclick="updatePassword()" class="btn btn-success" name="reset_pass_confirm_button" id="reset_pass_confirm_button">Confirm</button>
                        </div>
                    </div>
                </td>
                <td align="center" style="padding:20px;">
                    <div id="step4" class="card border-success mb3 dropshadow" style="height:350px;width:250px;display:none;">
                        <div class="card-header">Success</div>
                        <div class="card-body">
                            <center>
                                <h3 style="color:green;">Password Updated<br>Successfully!</h3>
                            </center>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-outline-success" href="landing.php">Goto Login</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        </center>
        <script src="../scripts/forgot_pass.js"></script>
    </body>
</html>