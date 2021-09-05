<?php
require_once '../models/db_conn.php';

$lawyer_nid="";
$err_lawyer_nid="";
$lawyer_id="";
$hasError=false;
if(isset($_POST["assign_lawyer_button"])){
  if(empty($_POST["lawyer_nid"])){
      $err_lawyer_nid="* NID Required.";
      $hasError=true;
  }
  else{
      $lawyer_nid=htmlspecialchars($_POST["lawyer_nid"]);
      $lawyer=getJudgeByNid($lawyer_nid);
      if(count($lawyer)>0){
          $lawyer_id=$lawyer[0]["id"];
      }
      else{
          $err_lawyer_nid="* NID Invalid.";
          $hasError=true;
      }
  }lawyer
  if(!$hasError){
      $judge_id=$_COOKIE["id"];
      updateCase( $lawyer_id,$_GET["id"]);
  }

}
function updateCase($lawyer_id, $id){
    $query="UPDATE cases SET lawyer_id=$lawyer_id WHERE id=$id";
    doNoQuery($query);
}
function getjlawyerByNid($lawyer_nid){
    $query="SELECT * FROM users WHERE id='$lawyer_id' AND type='lawyer'";
    return doQuery($query);
}

 ?>
