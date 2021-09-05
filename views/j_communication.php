<?php
    include 'judge_header.php';
    require_once '../controllers/client_controller.php';
    require_once '../controllers/common_controller.php';
    $clients=getClients($_COOKIE["id"]);
?>
<center>
<table class="table table-striped mb-0 mt-0 table-dark">
    <tr>
        <td align="center" >
            <div class="card border-info mb3" style="height:600px;width:600px;">
                <div class="card-header">My Clients</div>
                    <div class="card-body">
                    <div class="overflow-auto">
                        <table class="table table-striped">
                            <tr>
                                <th>#SR</th>
                                <th>Client Name</th>
                                <th>Chat/Refresh</th>
                            </tr>
                            <?php
                                $sr=1;
                                foreach($clients as $client){
                                  $client_name=getUserById($client["client_id"]);
                                    echo "<tr>";
                                    echo "<th>".$sr."</th>";
                                    echo "<td>".$client_name[0]["fullname"]."</td>";
                                    echo "<td><button class=\"btn btn-outline-primary\" name=\"chat_button\" id=\"chat_button\" onclick=\"chatRefresh(".$client_name[0]["id"].")\">Chat/Refresh</button></td>";
                                    echo "<tr>";
                                    $sr++;
                                 }
                            ?>
                        </table>
                    </div>
                    </div>
                    <div class="card-footer"></div>
            </div>
        </td>
        <td align="center" >
            <div class="card border-success  text-white bg-dark" style="height:500px;width:500px;">
                <div class="card-header text-success">My Chats</div>
                    <div class="card-body scroll-box">
                    <div class="table-responsive">
                        <table class="table" table-borderless id="my_chats">

                        </table>
                    </div>
                    </div>
                    <div class="card-footer "><input class="form-control mb-1" type="text" name="chat_box" id="chat_box"><button class="btn btn-success" onclick="sendMessage()">Send</button></div>
            </div>
        </td>
    </tr>
</table>
</center>
<script src="../scripts/chat_ajax_validation.js"></script>
<?php
    include 'lawyer_footer.php';
?>
