<?php
include './inc/connection.php';
session_start();

$id=$_SESSION['userid'];
if(isset($_POST) == true){
    //generate unique file name
    $fileName = time().'_'.basename($_FILES["image"]["name"]);
    
    //file upload path
    $targetDir = "profiles/";
    $targetFilePath = $targetDir . $fileName;
    
    //allow certain file formats
     $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif');
    
    if(in_array($fileType, $allowTypes)){
        //upload file to server
       
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
            //insert file data into the database if needed
            //........
           // $response['status'] = 'ok';
            $con->query("update registration set image='$fileName' where id='$id'");
            //echo $con->affected_rows;exit;
            if($con->affected_rows==1) 
            {
                $response['status'] = 'ok';
                $response['im']=$fileName;
                       
            }
           
        }else{
            $response['status'] = 'err';
        }
    }else{
        $response['status'] = 'type_err';
    }
    
    //render response data in JSON format
    echo json_encode($response);
}