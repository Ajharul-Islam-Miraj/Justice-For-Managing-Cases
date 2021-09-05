<?php
    include 'judge_header.php';
    require_once '../controllers/case_controller.php';
    require_once '../controllers/common_controller.php';
    require_once '../controllers/client_controller.php';
    $case=getCaseById($_GET["id"]);
    $cases=getCasesForjudge($_COOKIE["id"]);
    $clients=getClients($_COOKIE["id"]);
    $my_client="";
    $my_lawyer="";
    $my_complainant="";
    if(count($case)>0){
        $my_client=getUserById($case[0]["client_id"]);

        $my_lawyer=getUserById($case[0]["lawyer_id"]);
        $my_complainant=getUserById($case[0]["complainant_id"]);
    }
?>
<center>
    <table class="table table-dark p-0 mb-0">
        <tr>
        <td >
        <div >
            <div class="card-body ">
                <h5 class="card-title"><?php echo $case[0]["case_title"];?></h5>
                <h6 class="card-subtitle mb-2 text-success text-muted">Status: <?php echo $case[0]["case_status"];?></h6>
                <p class="card-text"><?php echo $case[0]["case_description"];?></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client Name: </b><?php echo $my_client[0]["fullname"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client NID: </b><?php echo $my_client[0]["nid"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client Phone: </b><?php echo $my_client[0]["phone"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Complainant Name: </b><?php echo $my_complainant[0]["fullname"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Complainant NID: </b><?php echo $my_complainant[0]["nid"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Complainant Phone: </b><?php echo $my_complainant[0]["phone"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Lawyer Name: </b><?php echo $my_lawyer[0]["fullname"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Lawyer NID: </b><?php echo $my_lawyer[0]["nid"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Lawyer Phone: </b><?php echo $my_lawyer[0]["phone"];?></h6></li>
                </ul>
            </div>
                <div class="card-footer">
                    <a href="<?php echo $case[0]["document"];?>" class="card-link" download>Download Attachment</a>
                </div>
        </div>
        </td>
<tr>
      <td align="center">
            <form action="" method="POST"  enctype="multipart/form-data" onsubmit="return addCaseValidation()">
                <div class="card-header text-primary">Assign lawyer<h6 name="case_id" value="<?php echo $case[0]["id"];?>"></h6></div>
                    <div class="card-body">
                    <table>
                        <tr>
                           <td>
                            <h7  class="text-success ">Lawyer NID</h7>
                            <input class="form-control mt-2" type="number" name="lawyer_nid" id="lawyer_nid" placeholder="Lawyer NID"><span id="err_lawyer_nid" style="color:red;"><?php echo $err_lawyer_nid;?></span>
                            </td>
                          </tr>
                      </table>
                      </div>
          <div class="card-footer "><input  class=" btn btn-info text-center" type="submit" name="assign_lawyer_button" id="assign_lawyer_button" value="Assign"></div>
            </form>
        </td>
        </tr>
    </table>
</center>
<script src="../scripts/case_validation.js"></script>
<?php
    include 'j_footer.php';
?>
