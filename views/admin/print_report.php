<?php
    //if(!isset($_COOKIE["login_email"])){
	//	header("Location: ../landing.php");
	//}
?>
<html>
    <head>
        <title>Lawyer - Report and Reviews</title>
        <link rel="stylesheet" type="text/css" href="../../css/print_report.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
          integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
          crossorigin="anonymous"></script>
    </head>
    <body>
        <center>
            <table id="report-box-style">
                <h4>Generate Reports</h4>
                <tr>
                    <td align="right">Monthly:</td>
                    <td align="left"><a href="monthly.pdf" id = "montly" download>Print</a></td>
                </tr>
                <tr>
                    <td align="right">Weekly:</td>
                    <td align="left"><a href="weekly.pdf" download>Print</a></td>
                </tr>
                <tr>
                    <td align="right">Money Transaction:</td>
                    <td align="left"><a href="money_transaction.pdf" download>Print</a></td>
                </tr>
                <tr>
                    <td align="right">Hearing:</td>
                    <td align="left"><a href="hearing.pdf" download>Print</a></td>
                </tr>
                <tr>
                    <td align="right">Case Stats:</td>
                    <td align="left"><a href="case_stats.pdf" download>Print</a></td>
                </tr>
            </table>
        </center>
		<a href = "admin_dashboard.php"?>Back</a>
        <script src="../../scripts/profile_report.js"></script>
    </body>
</html>