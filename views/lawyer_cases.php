<?php
    include 'lawyer_header.php';
    require_once '../controllers/case_controller.php';
    $cases=getCasesForLaywer($_COOKIE["id"]);
?>
<center style="padding-top:20px;">
<div class="card border-info mb3" style="height:600px;width:1500px;">
    <div class="card-header">All Cases</div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th scope="col">#SR</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">View/Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                <!--TODO-->
            </table>
        </div>
<div class="card-footer"></div>
</div>
</center>
<?php
    include 'lawyer_footer.php';
?>