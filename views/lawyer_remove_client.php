<?php
    if(!isset($_COOKIE["id"])){
        header("Location: landing.php");
    }
    require_once '../controllers/client_controller.php';
    deleteClient($_GET["id"]);
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
?>