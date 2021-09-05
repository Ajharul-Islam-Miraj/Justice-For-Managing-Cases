<?php
    if(!isset($_COOKIE["id"])){
		header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Top Trending Lawyer</title>
        <link rel="stylesheet" type="text/css" href="../../css/top_trending_lawyer.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
          integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
          crossorigin="anonymous"></script>
    </head>
	<body>
	    <center>
            <h1>Top Rated</h1>
            <table border="2" id="review-box">

            </table>
        </center>
        <a href="admin_dashboard.php">Back</a>
	<script src="../../scripts/review.js"></script>
	</body>
</html>	