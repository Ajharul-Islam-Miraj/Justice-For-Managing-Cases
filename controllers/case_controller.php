<?php
    require_once '../models/db_conn.php';
    
    function getCasesForLaywer($id){
        $query="SELECT * FROM cases WHERE lawyer_id=".$id;
        return doQuery($query);
    }
?>