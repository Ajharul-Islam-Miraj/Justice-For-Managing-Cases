<?php
    include 'lawyer_header.php';
    require_once '../controllers/case_controller.php';
    require_once '../controllers/common_controller.php';
    require_once '../controllers/client_controller.php';
    require_once '../controllers/document_controller.php';
    $client=getUserById($_GET["id"]);
    $cases=getCasesForClient($_GET["id"]);
    $documents=getDocumentsForViewerUploader($_GET["id"], $_COOKIE["id"]);
?>
<center>
<table>
    <tr>
        <td align="left" style="padding-top:85px;">
        <div class="card" style="height:600px;width:850px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $client[0]["fullname"];?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Username: <?php echo $client[0]["username"];?></h6>
                <p class="card-text">Cases: <br>
                    <?php
                        $sr=1;
                        foreach($cases as $case){
                            echo $sr.". ".$case["case_title"]."<br>";
                            $sr++;
                        }
                    ?>
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client NID: </b><?php echo $client[0]["nid"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client Phone: </b><?php echo $client[0]["phone"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client Email: </b><?php echo $client[0]["email"];?></h6></li>
                    <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted"><b>Client Address: </b><?php echo $client[0]["address"];?></h6></li>
                </ul>
            </div>
                <div class="card-footer"></div>
        </div>
        </td>
        <td align="center" style="padding-top:100px;">
            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return uploadDocValidation()">
            <div class="card border-info mb3" style="height:600px;width:600px;">
                <div class="card-header">Documents</div>
                    <div class="card-body scroll-box">
                    <div class="overflow-auto">
                        <table class="table table-striped">
                            <tr>
                                <th scope="col">#SR</th>
                                <th scope="col">File Name</th>
                                <th scope="col">Download</th>
                            </tr>
                            <?php
                                $sr=1;
                                foreach($documents as $document){
                                    $path = $document["document"];
                                    $fileName = basename($path);
                                    $fileName = basename($path, ".*");
                                    echo "<tr>";
                                    echo "<th>".$sr."</th>";
                                    echo "<td>".$fileName."</td>";
                                    echo "<td><a class=\"btn btn-primary\" href=\"".$document["document"]."\" download>Download</a></td>";
                                    echo "</tr>";
                                    $sr++;
                                }
                            ?>
                        </table>
                    </div>
                    </div>
                <div class="card-footer">
                    <input class="form-control" type="file" name="document" id="document" accept="*/*"><span id="err_document" style="color:red;"><?php echo $err_document;?></span>
                    <input class="btn btn-success" type="submit" name="upload_doc_button" value="Upload">
                </td>
                </div>
            </div>
            </form>
        </td>
    </tr>
</table>
</center>
<script src="../scripts/client_validation.js"></script>
<?php
    include 'lawyer_footer.php';
?>
