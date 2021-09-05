<?php
    require_once '../controllers/landing_controller.php';
    //require_once '../controllers/lawyer_controller.php';
?>
<html>
    <head>
        <title>Justice - for Managing Cases</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
        <link rel="icon" href="../assets/favicon_all_logo.png">
    </head>
    <body>
        <center>
            <form action="" method="POST" onsubmit="return landingValidation()" style="padding:20px;">
                <table>
                    <tr>
                        <td style="padding:20px;"><img src="../assets/justicelogo.png"; width="300" height="400"></td>
                        <td align="center" style="padding:20px;">
                            <div class="card border-success mb3 dropshadow" style="height:350px;width:250px">
                                <div class="card-header">Login</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="padding-bottom:10px;"><input class="form-control" type="text" name="login_email" id="login_email" placeholder="Email" value="<?php echo $login_email;?>"><span id="err_login_email" style="color:red;"><?php echo $err_login_email;?></span></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px;"><input class="form-control" type="password" name="login_pass" id="login_pass" placeholder="Password"><span id="err_login_pass" style="color:red;"><?php echo $err_login_pass;?></span></td>
                                        </tr>
                                    </table>
                                    <a href="forgot_pass.php">Forgot password?</a><br><br>
                                    <input class="btn btn-success" type="submit" name="login_button" value="Login">
                                </div>
                            </div>
                        </td>
                        <td align="center" style="padding:20px;">
                            <div class="card border-success mb3 dropshadow" style="height:350px;width:250px">
                                <div class="card-header">Signup</div>
                                <div class="card-body">
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-info text-left" href="lawyer_registration.php"><i class="fas fa-gavel"></i> As Lawyer</a>
                                        <a class="btn btn-info text-left" href=""><i class="fas fa-users"></i> As Complainant</a><!--ADD YOUR HYPERLINK-->
                                        <a class="btn btn-info text-left" href=""><i class="fas fa-balance-scale"></i> As Judge</a><!--ADD YOUR HYPERLINK-->
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
        <script src="../scripts/landing_validation.js"></script>
    </body>
</html>
