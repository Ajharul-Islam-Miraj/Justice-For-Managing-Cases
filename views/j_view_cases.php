<?php
    include 'judge_header.php';
    require_once '../controllers/case_controller.php';
    require_once '../controllers/common_controller.php';
    require_once '../controllers/client_controller.php';
    $cases=getCasesForjudge($_COOKIE["id"]);
    $clients=getClients($_COOKIE["id"]);
?>
<center>
<table>
    <tr>
        <td align="center" style="padding-top:100px;">
        </td>
        <td align="center" >
            <div class="card border-info mt-0 mb-0" style="height:600px;width:850px;">
                <div class="card-header">All Cases</div>
                    <div class="card-body">
                    <div class="overflow-auto">
                        <table class="table table-striped">
                            <tr>
                                <th scope="col">#SR</th>
                                <th scope="col">Date Added</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Hearing Date</th>
                                <th scope="col">Status</th>

                            </tr>
                            <?php
                                $sr=1;
                                foreach($cases as $case){
                                    echo "<tr>";
                                    echo "<th>".$sr."</th>";
                                    echo "<td>".$case["date_added"]."</td>";
                                    echo "<td>".$case["case_title"]."</td>";
                                    echo "<td>".$case["case_description"]."</td>";
                                    echo "<td>".$case["hearing_date"]."</td>";
                                    echo "<td>".$case["case_status"]."</td>";
                                    echo "<td><a class=\"btn btn-outline-primary\" href=\"judge_view_edit_case.php?id=".$case["id"]."\">View/Edit</a></td>";
                                    echo "<td><a class=\"btn btn-outline-danger\" href=\"j_deltcase.php?id=".$case["id"]."\"target=\"_blank\" >Delete</a></td>";
                                    echo "</tr>";
                                    $sr++;
                                }
                            ?>
                        </table>
                    </div>
                    </div>
                <div class="card-footer"></div>
            </div>
        </td>
    </tr>
</table>
</center>
<script src="../scripts/case_validation.js"></script>
<?php
    include 'j_footer.php';
?>
