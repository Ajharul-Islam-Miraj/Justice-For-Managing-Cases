<?php
    require_once '../models/db_conn.php';
    $message="";
    $receiver_id="";
    $sender_id="";
    if(isset($_GET["chat_refresh"])){
        $receiver_id=$_GET["receiver_id"];
        $sender_id=$_COOKIE["id"];
        getChats($receiver_id, $sender_id);
    }
    if(isset($_GET["send"])){
        $message=$_GET["message"];
        $receiver_id=$_GET["receiver_id"];
        $sender_id=$_COOKIE["id"];
        addChat($message, $sender_id, $receiver_id);
    }
    function getChats($receiver_id, $sender_id){
        $query="SELECT * FROM chats WHERE receiver_id=$receiver_id AND sender_id=$sender_id";
        $blueBubble=doQuery($query);
        $query="SELECT * FROM chats WHERE receiver_id=$sender_id AND sender_id=$receiver_id";
        $greyBubble=doQuery($query);
        $chats=array_merge($blueBubble, $greyBubble);
        $allChats=asort($chats);
        foreach($chats as $chat){
            if(strcmp($chat["sender_id"],$sender_id)==0){
                echo "<tr>";
                echo "<td> </td>";
                echo "<td><div class=\"card text-white bg-primary mb-3\"><div class=\"card-body\"><p class=\"card-text\">".$chat["message"]."</p></div></td>";
                echo "</tr>";
            }
            elseif(strcmp($chat["receiver_id"],$sender_id)==0){
                echo "<tr>";
                echo "<td><div class=\"card text-white bg-secondary mb-3\"><div class=\"card-body\"><p class=\"card-text\">".$chat["message"]."</p></div></td>";
                echo "<td> </td>";
                echo "</tr>";
            }
        }
    }
    function addChat($message, $sender_id, $receiver_id){
        $query="INSERT INTO chats(message, sender_id, receiver_id) VALUES ('$message', $sender_id, $receiver_id)";
        doNoQuery($query);
    }
?>