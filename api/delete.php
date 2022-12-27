<?php
  if(
    $_POST['id']
  )
  
  {
        include_once 'database.php';
        $db = new Database();
        $delete=$db->deleteApprenant( $_POST['id']);
        if(!$delete){
            echo "Error";
        } else{
            header('Location: ../index.php');
        }
    }


?>