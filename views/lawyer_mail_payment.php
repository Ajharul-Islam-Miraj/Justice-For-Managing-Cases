<?php
    if(!isset($_COOKIE["id"])){
        header("Location: landing.php");
    }
    require_once '../models/mail_sender.php';
    require_once '../controllers/common_controller.php';
    require_once '../controllers/payment_controller.php';
    require_once '../models/generate_pdf.php';

    if(isset($_GET["id"])){
        generateReceipt();
        echo  "<script type='text/javascript'>";
        echo "window.close();";
        echo "</script>";
    }

    function generateReceipt(){
        $my_profile=getUserById($_COOKIE["id"]);
        $payment=getPayment($_GET["id"]);
        $html_builder="<html><head><center><h3>Report - Transactions</h3></center><h4>Laywer Name: ".$my_profile[0]["fullname"]."</h4></head><body><table border=\"2\"><tr><th>Due</th><th>Paid</th><th>Balance</th><th>Due Date</th><th>Payment Date</th><th>Payer ID</th></tr>";
        $html_builder.="<tr>";
        $html_builder.="<td>".$payment[0]["due"]."</td>";
        $html_builder.="<td>".$payment[0]["paid"]."</td>";
        $html_builder.="<td>".$payment[0]["balance"]."</td>";
        $html_builder.="<td>".$payment[0]["due_date"]."</td>";
        $html_builder.="<td>".$payment[0]["payment_date"]."</td>";
        $html_builder.="<td>".$payment[0]["payer_id"]."</td>";
        $html_builder.="</tr>";
        $html_builder.="</table></body></html>";
        $filePath=getPdf($html_builder, "../storage/docs/", $_COOKIE["id"], "PAYMENT_RECEIPT");
        sendAttachment($_COOKIE["id"],$my_profile[0]["username"],$my_profile[0]["email"],$filePath,"Payment Receipt");
    }
?>