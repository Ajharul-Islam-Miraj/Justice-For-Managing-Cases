<?php
    if(!isset($_COOKIE["id"])){
        header("Location: landing.php");
    }
    require_once '../controllers/payment_controller.php';
    deletePayment($_GET["id"]);
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
?>