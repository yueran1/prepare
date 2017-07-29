<?php

$request=$_SERVER['REQUEST_METHOD'];

if($request =='GET'){
    //isset determine para is null or not
    if(isset($_GET['filename'])){
        //forget $_GET['filename']
        $file_content=file_get_contents($_GET['filename']);
        echo $file_content;
    }else{
        die('file does not exist');
    }
}elseif($request =='POST'){
    if(isset($_POST['filename']) and isset($_POST['content'])){
        //forget $_POST['filename'],$_POST['content']
        file_put_contents($_POST['filename'],$_POST['content']);
        //echo 'content';
    }else{
        die('there is sth wrong with filename para');
    }
}elseif($request =='DELETE'){
    ////forget file_get_contents
    parse_str(file_get_contents('php://input'),$_DELETE);
    
    if(isset($_DELETE['file'])){
        unlink($_DELETE['file']);
    }else{
        
        die("Error with delete filename");
        
    }

}


?>