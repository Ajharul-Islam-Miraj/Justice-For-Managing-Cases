<?php
    require_once '../models/db_conn.php';

    $hasError=false;
    $document="";
    $err_document="";
    if(isset($_POST["upload_doc_button"])){
        if(empty($_FILES["document"]["name"])){
            $err_document="* Document Required.";
            $hasError=true;
        }
        else{
            $fileType=strtolower(pathinfo(basename($_FILES["document"]["name"]),PATHINFO_EXTENSION));
            $document="../storage/docs/".uniqid().".$fileType";
            move_uploaded_file($_FILES["document"]["tmp_name"],$document);
        }
        if(!$hasError){
            addDocument($document, $_GET["id"], $_COOKIE["id"]);
        }
    }
    function getDocumentsForViewerUploader($viewer_id, $uploader_id){
        $query="SELECT * FROM documents WHERE viewer_id=$viewer_id AND uploader_id=$uploader_id";
        return doQuery($query);
    }
    function addDocument($document, $viewer_id, $uploader_id){
        $query="INSERT INTO documents(document, viewer_id, uploader_id) VALUES ('$document', $viewer_id, $uploader_id)";
        doNoQuery($query);
    }
?>