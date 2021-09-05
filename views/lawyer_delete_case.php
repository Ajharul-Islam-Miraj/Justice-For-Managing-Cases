<?php
    if(!isset($_COOKIE["id"])){
        header("Location: landing.php");
    }
    require_once '../controllers/case_controller.php';
    deleteCase($_GET["id"]);
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
?>