<?php

    $uname = "root";
    $server = "localhost";
    $pass = "";
    $db_name = "justicecms";
    //$uname=getenv('MYSQLCONNSTR_dbUser');
    //$server=getenv('MYSQLCONNSTR_dbHost');
    //$pass=getenv('MYSQLCONNSTR_dbPass');
    //$db_name=getenv('MYSQLCONNSTR_dbName');

    function doNoQuery($query){
        global $uname, $server, $pass, $db_name;
        $conn=mysqli_connect($server, $uname, $pass, $db_name);
        if(!$conn){
            die("Could not connect! Error: ".mysqli_connect_error());
        }
        return mysqli_query($conn,$query);
    }

    function doQuery($query){
        global $uname, $server, $pass, $db_name;
        $conn=mysqli_connect($server, $uname, $pass, $db_name);
        if(!$conn){
            die("Could not connect! Error: ".mysqli_connect_error());
        }
        $result=mysqli_query($conn, $query);
        $data=array();
        if($result && mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
        }
        return $data;
    }
?>