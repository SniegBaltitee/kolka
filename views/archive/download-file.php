<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once($_SERVER["DOCUMENT_ROOT"]."/database_config.php");
    // Make sure an ID was passed
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
     
       $stat = $conn->prepare("select * from documents where id_doc=?");
       $stat->bindParam(1, $id);
       $stat->execute();
       $data = $stat->fetch();

       $file = $data['file_namee'];

       if(file_exists($file)){
        header('Content-Type:'.$data['file_type']);
        header('Content-Lenght:'.$data['file_size']);
        echo file_get_contents($data['files']);
        readfile($file);
        exit;
       }
    }
            
            