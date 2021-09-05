<?php
    include 'lawyer_header.php';
    require_once '../controllers/case_controller.php';
    require_once '../controllers/common_controller.php';
    require_once '../controllers/client_controller.php';
    $case=getCaseById($_GET["id"]);
    $clients=getClients($_COOKIE["id"]);
    $my_client="";
    $my_judge="";
    $my_complainant="";
    if(count($case)>0){
        $my_client=getUserById($case[0]["client_id"]);
        $my_judge=getUserById($case[0]["judge_id"]);
        $my_complainant=getUserById($case[0]["complainant_id"]);
    }
?>
<center>
    <table>
        <tr>
        <td align="left" style="padding-top:85px;">
        <div class="card" style="height:600px;width:850px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $case[0]["case_title"];?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Status: <?php echo $case[0]["case_status"];?></h6>
                <p class="card-text"><?php echo $case[0]["case_description"];?></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client Name: </b><?php echo $my_client[0]["fullname"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client Phone: </b><?php echo $my_client[0]["phone"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Complainant Name: </b><?php echo $my_complainant[0]["fullname"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Complainant Phone: </b><?php echo $my_complainant[0]["phone"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Judge Name: </b><?php echo $my_judge[0]["fullname"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Judge Phone: </b><?php echo $my_judge[0]["phone"];?></h6></li>
                </ul>
            </div>
                <div class="card-footer">
                    <a href="<?php echo $case[0]["document"];?>" class="card-link" download>Download Attachment</a>
                </div>
        </div>
        </td>
        <td align="center" style="padding-top:100px;">
            <form action="" method="POST"  enctype="multipart/form-data" onsubmit="return addCaseValidation()">
            <div class="card border-info mb3" style="height:600px;width:600px;">
                <div class="card-header">Edit Case<h6 name="case_id" value="<?php echo $case[0]["id"];?>"></h6></div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>
                                <table>
                                    <tr>
                                        <td>
                                            <h7>Case Title:</h7>
                                            <input class="form-control" type="text" name="case_title" id="case_title" placeholder="Case Title" value="<?php echo $case[0]["case_title"];?>"><span id="err_case_title" style="color:red;"><?php echo $err_case_title;?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h7>Case Description:</h7>
                                            <textarea class="form-control" name="case_description" id="case_description" placeholder="Case Description" cols="30" rows="4"><?php echo $case[0]["case_description"];?></textarea><span id="err_case_description" style="color:red;"><?php echo $err_case_description;?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h7>Client:</h7>
                                            <div class="form-group">
                                                <select class="form-control" name="client_id" id="client_id">
                                                    <option value="" selected disabled>Client Name</option>
                                                    <?php
                                                        foreach($clients as $client){
                                                            $client_name=getUserById($client["client_id"]);
                                                            echo "<option value=\"".$client_name[0]["id"]."\">".$client_name[0]["fullname"]."</option>";
                                                        }
                                                    ?>
                                                </select><span id="err_client_id" style="color:red;"><?php echo $err_client_id;?></span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                </td>
                                <td>
                                <table>
                                    <tr>
                                        <td>
                                            <h7>Hearing Date:</h7>
                                            <input class="form-control" type="date" name="hearing_date" id="hearing_date" value="<?php echo $case[0]["hearing_date"];?>"><span id="err_hearing_date" style="color:red;"><?php echo $err_hearing_date;?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h7>Case Status:</h7>
                                            <div class="form-group">
                                                <select class="form-control" name="case_status" id="case_status">
                                                    <option value="" selected disabled>Case Status</option>
                                                    <option value="Running">Running</option>
                                                    <option value="Closed">Closed</option>
                                                    <option value="Won">Won</option>
                                                    <option value="Lost">Lost</option>
                                                </select><span id="err_case_status" style="color:red;"><?php echo $err_case_status;?></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h7>Complainant NID:</h7>
                                            <input class="form-control" type="number" name="complainant_nid" id="complainant_nid" placeholder="Complainant NID" value="<?php echo $my_complainant[0]["nid"]; ?>"><span id="err_complainant_nid" style="color:red;"><?php echo $err_complainant_nid;?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h7>Judge NID:</h7>
                                            <input class="form-control" type="number" name="judge_nid" id="judge_nid" placeholder="Judge NID" value="<?php echo $my_judge[0]["nid"]; ?>"><span id="err_judge_nid" style="color:red;"><?php echo $err_judge_nid;?></span>
                                        </td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h7>Attach Document:</h7>
                                    <input class="form-control" type="file" name="document" id="document" accept="*/*"><span id="err_document" style="color:red;"><?php echo $err_document;?></span></td>
                                </td>
                            </tr>
                        </table>
                    </div>
                <div class="card-footer"><input class="btn btn-success" type="submit" name="update_case_button" id="update_case_button" value="Update"></div>
            </div>
            </form>
        </td>
        </tr>
    </table>
</center>
<script src="../scripts/case_validation.js"></script>
<?php
    include 'lawyer_footer.php';
?>