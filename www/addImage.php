<?php 
    if($_SERVER['REQUEST_METHOD']==="POST"){
        
            $uploaddir = 'images/';
            $uploadfile = $uploaddir . basename($_FILES['userImage']['name']);
            move_uploaded_file($_FILES["userImage"]["tmp_name"], $uploadfile);

    } 
?>